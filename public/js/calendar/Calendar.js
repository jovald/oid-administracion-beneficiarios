/**
 * Created by pablofb on 22-07-17.
 */

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

    cal = $(".full-calendar-demo").fullCalendar({
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
            today: "Today",
            agendaDay: "Day",
            agendaWeek: "Week",
            month: "Month",
            listWeek: "List"
        },
        droppable: true,
        editable: true,
        selectable: true,
        select: function(start, end, allDay) {
            return bootbox.prompt("Event title", function(title) {
                if (title !== null) {
                    cal.fullCalendar("renderEvent", {
                        title: title,
                        start: start,
                        end: end,
                        allDay: allDay
                    }, true);
                    return cal.fullCalendar('unselect');
                }
            });
        },
        eventClick: function(calEvent, jsEvent, view) {
            return bootbox.dialog({
                message: $("<form class='form'><label>Change event name</label></form><input id='new-event-title' class='form-control' type='text' value='" + calEvent.title + "' /> "),
                buttons: {
                    "delete": {
                        label: "<i class='fa fa-trash-o'></i> Delete Event",
                        className: "pull-left",
                        callback: function() {
                            return cal.fullCalendar("removeEvents", function(ev) {
                                return ev._id === calEvent._id;
                            });
                        }
                    },
                    success: {
                        label: "<i class='fa fa-floppy-o'></i> Save",
                        className: "btn-success",
                        callback: function() {
                            calEvent.title = $("#new-event-title").val();
                            return cal.fullCalendar('updateEvent', calEvent);
                        }
                    }
                }
            });
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
        },
        events: [
            {
                id: "event1",
                title: "All Day Event",
                start: moment().startOf('month').format('YYYY-MM-DD'),
                className: 'event-orange'
            }, {
                id: "event2",
                title: "Long Event",
                start: moment().subtract(5, 'day').format('YYYY-MM-DD'),
                end: moment().subtract(1, 'day').format('YYYY-MM-DD'),
                className: "event-red"
            }, {
                id: 999,
                id: "event3",
                title: "Repeating Event",
                start: moment().subtract(3, 'day').format('YYYY-MM-DD HH:mm'),
                allDay: false,
                className: "event-blue"
            }, {
                id: 999,
                id: "event3",
                title: "Repeating Event",
                start: moment().add(4, 'day').format('YYYY-MM-DD HH:mm'),
                allDay: false,
                className: "event-green"
            }, {
                id: "event4",
                title: "Meeting",
                start: moment().startOf('day').add(10, 'hours').add(30, 'minute').format('YYYY-MM-DD HH:mm'),
                allDay: false,
                className: "event-orange"
            }, {
                id: "event5",
                title: "Lunch",
                start: moment().startOf('day').add(12, 'hours').add(0, 'minute').format('YYYY-MM-DD HH:mm'),
                end: moment().startOf('day').add(14, 'hours').add(0, 'minute').format('YYYY-MM-DD HH:mm'),
                allDay: false,
                className: "event-red"
            }, {
                id: "event6",
                title: "Birthday Party",
                start: moment().startOf('day').add(1, 'day').add(19, 'hours').add(0, 'minute').format('YYYY-MM-DD HH:mm'),
                end: moment().startOf('day').add(1, 'day').add(22, 'hours').add(30, 'minute').format('YYYY-MM-DD HH:mm'),
                allDay: false,
                className: "event-purple"
            }
        ]
    });

})();
