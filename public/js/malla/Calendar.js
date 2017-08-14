(function() {

    var cal, calendarDate, d, m, y;
    this.setDraggableEvents = function() {
        return $("#events .external-event").each(function() {
            var eventObject;
            eventObject = {
                title: $.trim($(this).text())
            };
            $(this).data("eventObject", eventObject);
            return $(this).draggable({
                zIndex: 999,
                revert: true,
                revertDuration: 0
            });
        });
    };

    setDraggableEvents();

    calendarDate = new Date();

    d = calendarDate.getDate();

    m = calendarDate.getMonth();

    y = calendarDate.getFullYear();

    cal = $(".full-calendar").fullCalendar({
        header: {
            center: "title",
            left: "month,agendaWeek,agendaDay,listWeek",
            right: "prev,today,next"
        },
        buttonIcons: {
            prev: "fa-chevron-left",
            next: "fa-chevron-right"
        },
        buttonText: {
            today: "Hoy",
            agendaDay: "Día",
            agendaWeek: "Semana",
            month: "Mes",
            listWeek: "Lista"
        },
        firstDay: Monday=1,
        droppable: true,
        editable: false,
        selectable: true,
        defaultView: 'agendaWeek',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
        slotEventOverlap: false,
        locale: 'es',
        allDaySlot: false,

        contentHeight: parseInt(document.getElementById("contentHeight").value),
        minTime: document.getElementById("minTime").value,
        maxTime: document.getElementById("maxTime").value,
        slotDuration: document.getElementById("slotDuration").value,
        slotLabelInterval: parseInt(document.getElementById("slotLabelInterval").value),

        eventSources: [
            {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: 'poblar/',
                data : {id : $('#id').val()}
            }
        ],

        select: function(start, end) {

            if(puedeAsignarHora() == "false"){
                alert("No tiene los permisos para agendar horas.");
                return;
            }

            var date = new Date(start);
            var ahora = new Date();

            var date1 = date.toLocaleDateString();
            var date2 = ahora.toLocaleDateString();

            if(date1 < date2){
                alert("No se puede agendar hora en un día pasado");
                return;
            }

            return bootbox.prompt({
                title: 'Ingrese rut de beneficiario',
                placeholder: 'El RUT debe tener el formato 12345678-9',
                buttons: {
                    confirm: {
                        label: 'Ingresar'
                    },
                    cancel: {
                        label: 'Cancelar'
                    }
                },
                callback: function(value) {

                    if(value == null){
                        return;
                    }

                    if(value == ""){
                        alert("El rut no puede quedar en blanco");
                        return;
                    }

                    var formato = /.[.]./g;

                    if(formato.test(value)){
                        alert("El formato del rut es incorrecto");
                        return;
                    }

                    var Fn = {
                        // Valida el rut con su cadena completa "XXXXXXXX-X"
                        validaRut : function (rutCompleto) {
                            if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test( rutCompleto ))
                                return false;
                            var tmp 	= rutCompleto.split('-');
                            var digv	= tmp[1];
                            var rut 	= tmp[0];
                            if ( digv == 'K' ) digv = 'k' ;
                            return (Fn.dv(rut) == digv );
                        },
                        dv : function(T){
                            var M=0,S=1;
                            for(;T;T=Math.floor(T/10))
                                S=(S+T%10*(9-M++%6))%11;
                            return S?S-1:'k';
                        }
                    }

                    if(Fn.validaRut(value) == false){
                        alert('Debe ingresar un rut válido');
                        return;
                    }

                    var nombre = encontrarNombre(value, start);
                    if(nombre == null){
                        alert('El beneficiario no se encuentra en la base de datos');
                        return;
                    }
                    cal.fullCalendar("renderEvent", {
                        title: nombre,
                        start: start,
                        end: end
                    }, true);
                    location.reload();
                    return cal.fullCalendar('unselect');

                }
            });
        },
        eventClick: function(calEvent, jsEvent, view) {
            if(calEvent.realizado) {
                alert("Ya se han asignado prestaciones a esa hora agendada");
                return;
            }else{

                if(puedeAsignarHora()){
                    if(confirm('¿Desea eliminar la hora?')){
                        eliminarHora(calEvent.id);
                    }else{

                        if(puedeAtenderHora()){
                            if(confirm("¿El beneficiario registra asistencia?")){
                                calEvent.url = '/registro_prestacion/' + calEvent.id;
                                window.open(calEvent.url, '_self');
                            }else{
                                calEvent.url = '/registro_prestacion/inasistencia/' + calEvent.id;
                                window.open(calEvent.url, '_self');
                            }
                        }
                    }
                    return;
                }

                if(confirm("¿El beneficiario registra asistencia?")){
                    calEvent.url = '/registro_prestacion/' + calEvent.id;
                    window.open(calEvent.url, '_self');
                }else{
                    calEvent.url = '/registro_prestacion/inasistencia/' + calEvent.id;
                    window.open(calEvent.url, '_self');
                }

            }
            return false;
        },
        drop: function(date, allDay) {
            var copiedEventObject, eventClass, originalEventObject;
            originalEventObject = $(this).data("eventObject");
            originalEventObject.id = Math.floor(Math.random() * 99999);
            eventClass = $(this).attr('data-event-class');
            console.log(originalEventObject);
            copiedEventObject = $.extend({}, originalEventObject);
            copiedEventObject.start = date;
            copiedEventObject.allDay = allDay;
            if (eventClass) {
                copiedEventObject["className"] = [eventClass];
            }
            $(".full-calendar-demo").fullCalendar("renderEvent", copiedEventObject, true);
            if ($("#calendar-remove-after-drop").is(":checked")) {
                return $(this).remove();
            }
        }
    });

    function guardarHora(event) {
        var fecha = moment(event).format('DD/MM/YYYY');
        var hora = moment(event).format('hh:mm');

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            async: true,
            url: "/malla/store",
            type: "POST",
            data: {
                fecha: fecha,
                hora: hora
            },
            error: function(jqXHR, textStatus, errorThrown) {

            }
        });
    }

    function encontrarNombre(rut, start) {
        var nombre_encontrado;

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            async: false,
            url: "/malla/getnombre",
            type: "GET",
            data: {
                rutBuscado: rut
            },
            success: function(data, textStatus, jqXHR) {
                var beneficiario_encontrado = $.parseJSON(data);
                nombre_encontrado = beneficiario_encontrado.nombre;
            },
            error: function(jqXHR, textStatus, errorThrown) {

            }
        });

        var fecha = moment(start).format('YYYY-MM-DD');
        var hora = moment(start).format('HH:mm');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            async: true,
            url: "/malla/store",
            type: "POST",
            data: {
                fecha: fecha,
                hora: hora,
                rut: rut,
                id: $('#id').val()
            },
            error: function(jqXHR, textStatus, errorThrown) {

            }
        });

        return nombre_encontrado;
    }

    $("#id").change(function() {
        location.reload();
    });

    function puedeAsignarHora(){

        var respuesta = "";
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            async: false,
            url: "/malla/validarusuario",
            type: "POST",

            success: function(data, textStatus, jqXHR) {
                respuesta = data;
            },

            error: function(jqXHR, textStatus, errorThrown) {
            }
        });
        return respuesta;
    }

    function puedeAtenderHora(){
        var respuesta = "";
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            async: false,
            url: "/malla/puedeatender",
            type: "POST",

            success: function(data, textStatus, jqXHR) {
                respuesta = data;
            },

            error: function(jqXHR, textStatus, errorThrown) {
            }
        });
        return respuesta;
    }

    function eliminarHora(id){

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            async: false,
            url: "/malla/eliminarhora",
            type: "POST",
            data: {
                idHora: id
            },
            success: function(data, textStatus, jqXHR) {
                alert('La hora se ha eliminado correctamente.');
                location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Hubo un error al eliminar la hora. Reintente.');
            }
        });

    }



})();
