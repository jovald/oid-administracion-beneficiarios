@extends("layouts.master")

@section("title")
    Ficha Terapia Ocupacional - OID
@endsection

@section("styles_before")
    <link href="{{ asset("/assets/stylesheets/plugins/fuelux/wizard.css") }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section("styles")
    <link href="{{ asset("/assets/stylesheets/plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.css") }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset("/assets/stylesheets/plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.min.css") }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset("/assets/images/meta_icons/apple-touch-icon-precomposed.png") }}" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('/assets/stylesheets/plugins/select2/select2.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section("body-attr")
    class="contrast-red"
@endsection

@section("scripts")
    <!-- / jquery [required] -->
    <script src="{{ asset("/assets/javascripts/jquery/jquery.min.js") }}" type="text/javascript"></script>
    <!-- / jquery mobile (for touch events) -->
    <script src="{{ asset("/assets/javascripts/jquery/jquery.mobile.custom.min.js") }}" type="text/javascript"></script>
    <!-- / jquery ui -->
    <script src="{{ asset("/assets/javascripts/jquery/jquery-ui.min.js") }}" type="text/javascript"></script>
    <!-- / jQuery UI Touch Punch -->
    <script src="{{ asset("/assets/javascripts/jquery/jquery.ui.touch-punch.min.js") }}" type="text/javascript"></script>
    <!-- / bootstrap [required] -->
    <script src="{{ asset("/assets/javascripts/bootstrap/bootstrap.js") }}" type="text/javascript"></script>
    <!-- / modernizr -->
    <script src="{{ asset("/assets/javascripts/plugins/modernizr/modernizr.min.js") }}" type="text/javascript"></script>
    <!-- / retina -->
    <script src="{{ asset("/assets/javascripts/plugins/retina/retina.js") }}" type="text/javascript"></script>
    <!-- / theme file [required] -->
    <script src="{{ asset("/assets/javascripts/theme.js") }}" type="text/javascript"></script>
    <!-- / START - page related files and scripts [optional] -->
    <script src="{{ asset("/assets/javascripts/plugins/fuelux/wizard.js") }}" type="text/javascript"></script>
    <!-- / END - page related files and scripts [optional] -->


    <!-- / START - moments-->
    <script src="{{ asset("/assets/javascripts/plugins/common/moment.min.js") }}" type="text/javascript"></script>
    <!-- / END - moments-->

    <!-- / START - datepicker-->
    <script src="{{ asset("/assets/javascripts/plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.js") }}" type="text/javascript"></script>
    <!-- / END - datepicker-->

    <!-- / START - Validaciones-->
    <script src="{{ asset("/assets/javascripts/plugins/validate/jquery.validate.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset('/assets/javascripts/plugins/1000hz-bootstrap-validator/validator.min.js') }}"></script>
    <script src="{{ asset("/assets/javascripts/plugins/validate/additional-methods.js") }}" type="text/javascript"></script>

    <script src="{{ asset('/js/InputValidation.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/area-medica/IngresoFormulario.js') }}" type="text/javascript"></script>
    <!-- / END - validaciones-->
@endsection

@section("content")
    @include('partials.header')
    <div id='wrapper'>
        <div id='main-nav-bg'></div>
    @include('partials.nav')
    <!-- AQUI VA EL NAVBAR  -->
        <section id="content">
            <div class="container">
                <div class="row" id="content-wrapper">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-header">
                                    <h1 class="pull-left">
                                        <i class="fa fa-pencil-square-o"></i>
                                        <span>Evaluación Inicial Terapia Ocupacional</span>
                                    </h1>
                                    <div class="pull-right">
                                        <ul class="breadcrumb">
                                            <li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="box">
                                    <div class='box-content box-padding'>
                                        <div class='fuelux'>
                                            <div class='wizard' data-initialize='wizard' id='myWizard'>
                                                <div class='steps-container'>
                                                    <ul class='steps'>
                                                        <li class='active' data-step='1'>
                                                            <span class='step'>1</span>
                                                        </li>
                                                        <li data-step='2'>
                                                            <span class='step'>2</span>
                                                        </li>
                                                        <li data-step='3'>
                                                            <span class='step'>3</span>
                                                        </li>
                                                        <li data-step='4'>
                                                            <span class='step'>4</span>
                                                        </li>
                                                        <li data-step='5'>
                                                            <span class='step'>5</span>
                                                        </li>
                                                        <li data-step='6'>
                                                            <span class='step'>6</span>
                                                        </li>
                                                        <li data-step='7'>
                                                            <span class='step'>7</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class='actions'>
                                                    <button id="continuar_btn" type='submit' class='pull-right btn btn-md btn-success btn-next' data-last='Finalizar'>
                                                        Continuar
                                                        <i class='fa fa-arrow-right'></i>
                                                    </button>
                                                    <button class='pull-right btn btn-md btn-prev'>
                                                        <i class='fa fa-arrow-left'></i>
                                                        Volver
                                                    </button>
                                                </div>
                                                @if(count($errors) > 0)
                                                    <hr class='hr-normal'>
                                                    <div class="alert alert-danger">
                                                        @foreach($errors->all() as $error)
                                                            <p>{{ $error }}</p>
                                                        @endforeach
                                                    </div>
                                                @endif
                                                <hr class='hr-normal'>
                                                <form role="form" id="formulario_registro" action="{{route('area-medica.ficha-evaluacion-inicial.terapia-ocupacional.ingresando')}}" accept-charset="UTF-8" style="margin-bottom: 0;" method="post">
                                                    <div class='step-content'>
                                                        <!-- STEP 1 -->
                                                        <div class='step-pane active' data-step='1'>
                                                            <!--<div class="col-md-12">
                                                                <h3>Seleccionar Paciente</h3>
                                                                <hr/>
                                                            </div>-->
                                                            <input id="id" name="id" type="hidden" value="{{$id}}">
                                                            <!--<div class="col-md-12 form-group">
                                                                <label class="control-label" for="rut">Rut</label>
                                                                <div class="controls">
                                                                    <input class="form-control" id="rut" name="rut" placeholder="RUT" type="text">
                                                                </div>
                                                            </div>-->
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="motivo_consulta">Motivo de consulta</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="motivo_consulta" name="motivo_consulta" value="{{ old('motivo_consulta') }}"  placeholder="Motivo">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="derivado_por">Derivado por</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="derivado_por" name="derivado_por" value="{{ old('derivado_por') }}"  placeholder="Psicólogo, Kinesiólogo, etc.">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="relacion_paciente">Relación con el paciente</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="relacion_paciente" name="relacion_paciente" value="{{ old('relacion_paciente') }}"  placeholder="Padre, Madre, Tutor,etc.">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="observaciones_generales">Observaciones sobre enfermedades</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="observaciones_generales" name="observaciones_generales" value="{{ old('observaciones_generales') }}"  placeholder="Observaciones generales">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- STEP 2 -->
                                                        <div class='step-pane active' data-step='2'>
                                                            <div class="col-md-12">
                                                                <h3>Antecedentes Socio-Familiares</h3>
                                                                <hr/>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="nombre_madre">Nombre de la Madre</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="nombre_madre" name="nombre_madre" value="{{ old('nombre_madre') }}"  placeholder="Nombre de la Madre" type="text" required autofocus>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="edad_madre">Edad de la Madre</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="edad_madre" name="edad_madre" value="{{ old('edad_madre') }}"  placeholder="Edad de la Madre" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="ocupacion_madre">Ocupación de la Madre</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="ocupacion_madre" name="ocupacion_madre" value="{{ old('ocupacion_madre') }}"  placeholder="Ocupación de la Madre" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="escolaridad_madre">Escolaridad Madre</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="escolaridad_madre" name="escolaridad_madre" value="{{ old('escolaridad_madre') }}"  placeholder="Escolaridad Madre" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="horario_trabajo_madre">Horario Trabajo Madre</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="horario_trabajo_madre" name="horario_trabajo_madre" value="{{ old('horario_trabajo_madre') }}"  placeholder="Horario Trabajo Madre" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="nombre_padre">Nombre del Padre</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="nombre_padre" name="nombre_padre" value="{{ old('nombre_padre') }}"  placeholder="Nombre del Padre" type="text" required autofocus>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="edad_padre">Edad del Padre</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="edad_padre" name="edad_padre" value="{{ old('edad_padre') }}"  placeholder="Edad del Padre" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="ocupacion_padre">Ocupación del Padre</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="ocupacion_padre" name="ocupacion_padre" value="{{ old('ocupacion_padre') }}"  placeholder="Ocupación del Padre" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="escolaridad_padre">Escolaridad Padre</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="escolaridad_padre" name="escolaridad_padre" value="{{ old('escolaridad_padre') }}"  placeholder="Escolaridad Padre" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="horario_trabajo_padre">Horario Trabajo Padre</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="horario_trabajo_padre" name="horario_trabajo_padre" value="{{ old('horario_trabajo_padre') }}"  placeholder="Horario Trabajo Padre" type="text">
                                                                </div>
                                                            </div>
                                                            <!--FALTA GENOGRAMA-->
                                                            <div class="col-md-4">
                                                                <h3>Genograma</h3>
                                                                <hr/>
                                                            </div>
                                                            <div class="col-md-8 controls">
                                                                <input type="file" name="genograma" ></input>
                                                            </div>
                                                        </div>
                                                        <!-- STEP 3 -->
                                                        <div class='step-pane active' data-step='3'>
                                                            <div class="col-md-12">
                                                                <h3>Antecedentes de Salud</h3>
                                                                <hr/>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="tiempo_gestacional">Tiempo de gestación</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="tiempo_gestacional" name="tiempo_gestacional" value="{{ old('tiempo_gestacional') }}"  placeholder="Tiempo de gestación">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="tipo_parto">Tipo de parto</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="tipo_parto" name="tipo_parto" value="{{ old('tipo_parto') }}"  placeholder="Normal,Inducido,Fórceps o cesárea">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="enfermedades_natal_sn">¿Presenta enfermedades pre o post natales?</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="enfermedades_natal_sn" name="enfermedades_natal_sn" value="{{ old('enfermedades_natal_sn') }}"  placeholder="Si/No">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="observaciones_enfermedades">Observaciones sobre enfermedades</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="observaciones_enfermedades" name="observaciones_enfermedades" value="{{ old('observaciones_enfermedades') }}"  placeholder="Especificar enfermedades">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- STEP 4 -->
                                                        <div class='step-pane active' data-step='4'>
                                                            <div class="col-md-12">
                                                                <h3>Historial Clínico del Paciente</h3>
                                                                <hr/>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="enfermedades_familiares">Enfermedades Familiares</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="enfermedades_familiares" name="enfermedades_familiares" value="{{ old('enfermedades_familiares') }}"  placeholder="Especificar enfermedades">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="evaluacion_psiquiatra">Evaluación del Neurólogo/Psiquiatra</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="evaluacion_psiquiatra" name="evaluacion_psiquiatra" value="{{ old('evaluacion_psiquiatra') }}"  placeholder="Especificar diagnóstico">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="evaluacion_fonoaudiologo">Evaluación del Fonoaudiólogo</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="evaluacion_fonoaudiologo" name="evaluacion_fonoaudiologo" value="{{ old('evaluacion_fonoaudiologo') }}"  placeholder="Especificar diagnóstico">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="evaluacion_ocupacional">Evaluación del Terapeuta Ocupacional</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="evaluacion_ocupacional" name="evaluacion_ocupacional" value="{{ old('evaluacion_ocupacional') }}"  placeholder="Especificar diagnóstico">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="evaluacion_kinesiologo">Evaluación del Kinesiólogo</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="evaluacion_kinesiologo" name="evaluacion_kinesiologo" value="{{ old('evaluacion_kinesiologo') }}"  placeholder="Especificar diagnóstico">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="otra_evaluacion">Alguna otra evaluación</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="otra_evaluacion" name="otra_evaluacion" value="{{ old('otra_evaluacion') }}"  placeholder="Especificar diagnóstico">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="tratamientos_recibidos">Tratamientos recibidos</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="tratamientos_recibidos" name="tratamientos_recibidos" value="{{ old('tratamientos_recibidos') }}"  placeholder="Especificar diagnóstico">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="medicamentos_sn">¿Medicamentos?</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="medicamentos_sn" name="medicamentos_sn" value="{{ old('medicamentos_sn') }}"  placeholder="Si/No">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="medicamentos">Nombres Medicamentos</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="medicamentos" name="medicamentos" value="{{ old('medicamentos') }}"  placeholder="Especificar nombres">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="efectos_medicamentos">Efectos Medicamentos</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="efectos_medicamentos" name="efectos_medicamentos" value="{{ old('efectos_medicamentos') }}"  placeholder="Especificar Efectos">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="diagnosticos_previos">Diagnósticos Previos</label>
                                                                <div class="col-md-8 controls">
                                                                    <input class="form-control" id="diagnosticos_previos" name="diagnosticos_previos" value="{{ old('diagnosticos_previos') }}"  placeholder="Especificar Detalles">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- STEP 5 -->
                                                        <div class='step-pane active' data-step='5'>
                                                            <div class="col-md-12">
                                                                <h3>Desarrollo Evolutivo</h3>
                                                                <hr/>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="edad_sento">Edad a la que se sentó solo/a</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="edad_sento" name="edad_sento" value="{{ old('edad_sento') }}"  placeholder="Edad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="edad_camino">Edad en que caminó</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="edad_camino" name="edad_camino" value="{{ old('edad_camino') }}"  placeholder="Edad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="edad_palabra">Edad en que pronunció su primera palabra con sentido</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="edad_palabra" name="edad_palabra" value="{{ old('edad_palabra') }}"  placeholder="Edad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="control_vesical_sn">¿Tiene control Esfínteres Vesical?</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="control_vesical_sn" name="control_vesical_sn" value="{{ old('control_vesical_sn') }}"  placeholder="Si/No" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="edad_control_vesical">Edad a la que comenzó a controlar los esfínteres Vesical</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="edad_control_vesical" name="edad_control_vesical" value="{{ old('edad_control_vesical') }}"  placeholder="Edad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="vesical_diurno">Control Vesical Diurno</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="vesical_diurno" name="vesical_diurno" value="{{ old('vesical_diurno') }}"  placeholder="Especificar control" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="vesical_nocturno">Control Vesical Nocturno</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="vesical_nocturno" name="vesical_nocturno" value="{{ old('vesical_nocturno') }}"  placeholder="Especificar control" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="control_anal_sn">¿Tiene control Esfínteres Anal?</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="control_anal_sn" name="control_anal_sn" value="{{ old('control_anal_sn') }}"  placeholder="Si/No" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="edad_control_anal">Edad a la que comenzó a controlar los Esfínteres Anal</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="edad_control_anal" name="edad_control_anal" value="{{ old('edad_control_anal') }}"  placeholder="Edad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="anal_diurno">Control Anal Diurno</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="anal_diurno" name="anal_diurno" value="{{ old('anal_diurno') }}"  placeholder="Especificar control" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="anal_nocturno">Control Anal Nocturno</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="anal_nocturno" name="anal_nocturno" value="{{ old('anal_nocturno') }}"  placeholder="Especificar control" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="observaciones">Observaciones</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="observaciones" name="observaciones" value="{{ old('observaciones') }}"  placeholder="Observaciones" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <h4>En relación con su motricidad gruesa se aprecia:</h4>
                                                                <hr/>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="estabilidad_caminar_sna">Estabilidad al caminar</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="estabilidad_caminar_sna" name="estabilidad_caminar_sna" value="{{ old('estabilidad_caminar_sna') }}"  placeholder="Si/No/A Veces" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="caidas_frecuentes_sna">Caídas Frecuentes</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="caidas_frecuentes_sna" name="caidas_frecuentes_sna" value="{{ old('caidas_frecuentes_sna') }}"  placeholder="Si/No/A Veces" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="dominancia_lateral_sna">Dominancia Lateral</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="dominancia_lateral_sna" name="dominancia_lateral_sna" value="{{ old('dominancia_lateral_sna') }}"  placeholder="Si/No/A Veces" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <h4>En relación con su motricidad fina el niño(a) logra:</h4>
                                                                <hr/>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="garra_sna">Garra</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="garra_sna" name="garra_sna" value="{{ old('garra_sna') }}"  placeholder="Si/No/A Veces" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="pinza_sna">Pinza</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="pinza_sna" name="pinza_sna" value="{{ old('pinza_sna') }}"  placeholder="Si/No/A Veces" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="como_pinza">¿Cómo logra pinzar?</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="como_pinza" name="como_pinza" value="{{ old('como_pinza') }}"  placeholder="Si/No/A Veces" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="dibuja_sna">Dibuja</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="dibuja_sna" name="dibuja_sna" value="{{ old('dibuja_sna') }}"  placeholder="Si/No/A Veces" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="escribe_sna">Escribe</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="escribe_sna" name="escribe_sna" value="{{ old('escribe_sna') }}"  placeholder="Si/No/A Veces" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="corta_sna">Corta</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="corta_sna" name="corta_sna" value="{{ old('corta_sna') }}"  placeholder="Si/No/A Veces" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <h4>¿Cómo se comporta frente a?</h4>
                                                                <hr/>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="estimulos_visuales">Estimulos Visuales</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="estimulos_visuales" name="estimulos_visuales" value="{{ old('estimulos_visuales') }}"  placeholder="Estimulos Visuales" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="estimulos_auditivos">Estimulos Auditivos</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="estimulos_auditivos" name="estimulos_auditivos" value="{{ old('estimulos_auditivos') }}"  placeholder="Estimulos Auditivos" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="estimulos_gustativos">Estimulos Gustativos</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="estimulos_gustativos" name="estimulos_gustativos" value="{{ old('estimulos_gustativos') }}"  placeholder="Estimulos Gustativos" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="estimulos_tactiles">Estimulos Táctiles</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="estimulos_tactiles" name="estimulos_tactiles" value="{{ old('estimulos_tactiles') }}"  placeholder="Estimulos Táctiles" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="estimulos_olfativos">Estimulos Olfativos</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="estimulos_olfativos" name="estimulos_olfativos" value="{{ old('estimulos_olfativos') }}"  placeholder="Estimulos Olfativos" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <h4>En cuanto a su alimentación:</h4>
                                                                <hr/>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="come_solo_sn">¿Come solo?</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="come_solo_sn" name="come_solo_sn" value="{{ old('come_solo_sn') }}"  placeholder="Si/No" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="acepta_solido_sn">¿Acepta sólidos?</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="acepta_solido_sn" name="acepta_solido_sn" value="{{ old('acepta_solido_sn') }}"  placeholder="Si/No" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="acepta_semisolido_sn">¿Acepta semisólidos?</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="acepta_semisolido_sn" name="acepta_semisolido_sn" value="{{ old('acepta_semisolido_sn') }}"  placeholder="Si/No" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="acepta_liquidos_sn">¿Acepta líquidos?</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="acepta_liquidos_sn" name="acepta_liquidos_sn" value="{{ old('acepta_liquidos_sn') }}"  placeholder="Si/No" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="temperatura_preferida">¿Prefiere ciertas temperaturas?</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="temperatura_preferida" name="temperatura_preferida" value="{{ old('temperatura_preferida') }}"  placeholder="Si/No" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="sabores_preferidos">¿Prefiere ciertos sabores?</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="sabores_preferidos" name="sabores_preferidos" value="{{ old('sabores_preferidos') }}"  placeholder="Si/No" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="colores_preferidos">¿Prefiere ciertos colores?</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="colores_preferidos" name="colores_preferidos" value="{{ old('colores_preferidos') }}"  placeholder="Si/No" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="ejemplo_comida">Ejemplos de lo que come</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="ejemplo_comida" name="ejemplo_comida" value="{{ old('ejemplo_comida') }}"  placeholder="Descripción alimentos" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- STEP 6 -->
                                                        <div class='step-pane active' data-step='6'>
                                                            <div class="col-md-12">
                                                                <h3>Actividades vida diaria</h3>
                                                                <hr/>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <h4>Criterios: Dominado (D),Parcial (P) o Emergente (E)</h4>
                                                                <hr/>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <h4>Cuidados personales</h4>
                                                                <hr/>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="alimentacion">Alimentación</label>
                                                                <div class="col-md-2 controls">
                                                                    <input class="form-control" id="alimentacion" name="alimentacion" value="{{ old('alimentacion') }}"  placeholder="Punto" type="text">
                                                                </div>
                                                                <div class="col-md-6 controls">
                                                                    <input class="form-control" id="comentario_alimen" name="comentario_alimen" value="{{ old('comentario_alimen') }}"  placeholder="Comentario" type="text" maxlength="200">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="arreglo_personal">Arreglo personal</label>
                                                                <div class="col-md-2 controls">
                                                                    <input class="form-control" id="arreglo_personal" name="arreglo_personal" value="{{ old('arreglo_personal') }}"  placeholder="Punto" type="text">
                                                                </div>
                                                                <div class="col-md-6 controls">
                                                                    <input class="form-control" id="comentario_arreglo" name="comentario_arreglo" value="{{ old('comentario_arreglo') }}"  placeholder="Comentario" type="text" maxlength="200">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="banio">Baño</label>
                                                                <div class="col-md-2 controls">
                                                                    <input class="form-control" id="banio" name="banio" value="{{ old('banio') }}"  placeholder="Punto" type="text">
                                                                </div>
                                                                <div class="col-md-6 controls">
                                                                    <input class="form-control" id="comentario_banio" name="comentario_banio" value="{{ old('comentario_banio') }}"  placeholder="Comentario" type="text" maxlength="200">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="vestuario_superior">Vestuario tren superior</label>
                                                                <div class="col-md-2 controls">
                                                                    <input class="form-control" id="vestuario_superior" name="vestuario_superior" value="{{ old('vestuario_superior') }}"  placeholder="Punto" type="text">
                                                                </div>
                                                                <div class="col-md-6 controls">
                                                                    <input class="form-control" id="comentario_superior" name="comentario_superior" value="{{ old('comentario_superior') }}"  placeholder="Comentario" type="text" maxlength="200">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="vestuario_inferior">Vestuario tren inferior</label>
                                                                <div class="col-md-2 controls">
                                                                    <input class="form-control" id="vestuario_inferior" name="vestuario_inferior" value="{{ old('vestuario_inferior') }}"  placeholder="Punto" type="text">
                                                                </div>
                                                                <div class="col-md-6 controls">
                                                                    <input class="form-control" id="comentario_inferior" name="comentario_inferior" value="{{ old('comentario_inferior') }}"  placeholder="Comentario" type="text" maxlength="200">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="ponerse_zapatos">Ponerse los zapatos (amarre)</label>
                                                                <div class="col-md-2 controls">
                                                                    <input class="form-control" id="ponerse_zapatos" name="ponerse_zapatos" value="{{ old('ponerse_zapatos') }}"  placeholder="Punto" type="text">
                                                                </div>
                                                                <div class="col-md-6 controls">
                                                                    <input class="form-control" id="comentario_zapatos" name="comentario_zapatos" value="{{ old('comentario_zapatos') }}"  placeholder="Comentario" type="text" maxlength="200">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="aseo_perianal">Aseo perianal</label>
                                                                <div class="col-md-2 controls">
                                                                    <input class="form-control" id="aseo_perianal" name="aseo_perianal" value="{{ old('aseo_perianal') }}"  placeholder="Punto" type="text">
                                                                </div>
                                                                <div class="col-md-6 controls">
                                                                    <input class="form-control" id="comentario_aseo" name="comentario_aseo" value="{{ old('comentario_aseo') }}"  placeholder="Comentario" type="text" maxlength="200">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="lavado_dental">Lavar los dientes</label>
                                                                <div class="col-md-2 controls">
                                                                    <input class="form-control" id="lavado_dental" name="lavado_dental" value="{{ old('lavado_dental') }}"  placeholder="Punto" type="text">
                                                                </div>
                                                                <div class="col-md-6 controls">
                                                                    <input class="form-control" id="comentario_dental" name="comentario_dental" value="{{ old('comentario_dental') }}"  placeholder="Comentario" type="text" maxlength="200">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <h4>Control de esfínteres</h4>
                                                                <hr/>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="manejo_vesical">Manejo vesical</label>
                                                                <div class="col-md-2 controls">
                                                                    <input class="form-control" id="manejo_vesical" name="manejo_vesical" value="{{ old('manejo_vesical') }}"  placeholder="Punto" type="text">
                                                                </div>
                                                                <div class="col-md-6 controls">
                                                                    <input class="form-control" id="comentario_vesical" name="comentario_vesical" value="{{ old('comentario_vesical') }}"  placeholder="Comentario" type="text" maxlength="200">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="manejo_anal">Manejo anal</label>
                                                                <div class="col-md-2 controls">
                                                                    <input class="form-control" id="manejo_anal" name="manejo_anal" value="{{ old('manejo_anal') }}"  placeholder="Punto" type="text">
                                                                </div>
                                                                <div class="col-md-6 controls">
                                                                    <input class="form-control" id="comentario_anal" name="comentario_anal" value="{{ old('comentario_anal') }}"  placeholder="Comentario" type="text" maxlength="200">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <h4>Labores cotidianas en el hogar y la escuela</h4>
                                                                <hr/>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="preparar_comida">Prepararse algo de comer</label>
                                                                <div class="col-md-2 controls">
                                                                    <input class="form-control" id="preparar_comida" name="preparar_comida" value="{{ old('preparar_comida') }}"  placeholder="Punto" type="text">
                                                                </div>
                                                                <div class="col-md-6 controls">
                                                                    <input class="form-control" id="comentario_comida" name="comentario_comida" value="{{ old('comentario_comida') }}"  placeholder="Comentario" type="text" maxlength="200">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="poner_mesa">Poner la mesa</label>
                                                                <div class="col-md-2 controls">
                                                                    <input class="form-control" id="poner_mesa" name="poner_mesa" value="{{ old('poner_mesa') }}"  placeholder="Punto" type="text">
                                                                </div>
                                                                <div class="col-md-6 controls">
                                                                    <input class="form-control" id="comentario_mesa" name="comentario_mesa" value="{{ old('comentario_mesa') }}"  placeholder="Comentario" type="text" maxlength="200">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="limpieza_ligera">Limpieza ligera (barrer,sacudir)</label>
                                                                <div class="col-md-2 controls">
                                                                    <input class="form-control" id="limpieza_ligera" name="limpieza_ligera" value="{{ old('limpieza_ligera') }}"  placeholder="Punto" type="text">
                                                                </div>
                                                                <div class="col-md-6 controls">
                                                                    <input class="form-control" id="comentario_ligera" name="comentario_ligera" value="{{ old('comentario_ligera') }}"  placeholder="Comentario" type="text" maxlength="200">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="espacio_ordenado">Mantener su espacio en orden</label>
                                                                <div class="col-md-2 controls">
                                                                    <input class="form-control" id="espacio_ordenado" name="espacio_ordenado" value="{{ old('espacio_ordenado') }}"  placeholder="Punto" type="text">
                                                                </div>
                                                                <div class="col-md-6 controls">
                                                                    <input class="form-control" id="comentario_orden" name="comentario_orden" value="{{ old('comentario_orden') }}"  placeholder="Comentario" type="text" maxlength="200">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <h4>Actividades instrumetales</h4>
                                                                <hr/>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="manejo_dinero">Manejo del dinero</label>
                                                                <div class="col-md-2 controls">
                                                                    <input class="form-control" id="manejo_dinero" name="manejo_dinero" value="{{ old('manejo_dinero') }}"  placeholder="Punto" type="text">
                                                                </div>
                                                                <div class="col-md-6 controls">
                                                                    <input class="form-control" id="comentario_dinero" name="comentario_dinero" value="{{ old('comentario_dinero') }}"  placeholder="Comentario" type="text" maxlength="200">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="ir_compras">Ir de compras</label>
                                                                <div class="col-md-2 controls">
                                                                    <input class="form-control" id="ir_compras" name="ir_compras" value="{{ old('ir_compras') }}"  placeholder="Punto" type="text">
                                                                </div>
                                                                <div class="col-md-6 controls">
                                                                    <input class="form-control" id="comentario_compras" name="comentario_compras" value="{{ old('comentario_compras') }}"  placeholder="Comentario" type="text" maxlength="200">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="locomocion">Locomoción</label>
                                                                <div class="col-md-2 controls">
                                                                    <input class="form-control" id="locomocion" name="locomocion" value="{{ old('locomocion') }}"  placeholder="Punto" type="text">
                                                                </div>
                                                                <div class="col-md-6 controls">
                                                                    <input class="form-control" id="comentario_locomocion" name="comentario_locomocion" value="{{ old('comentario_locomocion') }}"  placeholder="Comentario" type="text" maxlength="200">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <h4>Habilidades sociales</h4>
                                                                <hr/>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="resolver_problemas">Resolución de problemas</label>
                                                                <div class="col-md-2 controls">
                                                                    <input class="form-control" id="resolver_problemas" name="resolver_problemas" value="{{ old('resolver_problemas') }}"  placeholder="Punto" type="text">
                                                                </div>
                                                                <div class="col-md-6 controls">
                                                                    <input class="form-control" id="comentario_problemas" name="comentario_problemas" value="{{ old('comentario_problemas') }}"  placeholder="Comentario" type="text" maxlength="200">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="adecuacion_social">Adecuación social</label>
                                                                <div class="col-md-2 controls">
                                                                    <input class="form-control" id="adecuacion_social" name="adecuacion_social" value="{{ old('adecuacion_social') }}"  placeholder="Punto" type="text">
                                                                </div>
                                                                <div class="col-md-6 controls">
                                                                    <input class="form-control" id="comentario_adecuacion" name="comentario_adecuacion" value="{{ old('comentario_adecuacion') }}"  placeholder="Comentario" type="text" maxlength="200">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="seguir_instrucciones">Seguir instrucciones</label>
                                                                <div class="col-md-2 controls">
                                                                    <input class="form-control" id="seguir_instrucciones" name="seguir_instrucciones" value="{{ old('seguir_instrucciones') }}"  placeholder="Punto" type="text">
                                                                </div>
                                                                <div class="col-md-6 controls">
                                                                    <input class="form-control" id="comentario_instrucciones" name="comentario_instrucciones" value="{{ old('comentario_instrucciones') }}"  placeholder="Comentario" type="text" maxlength="200">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-4 control-label" for="expresar_necesidades">Expresar necesidades básicas</label>
                                                                <div class="col-md-2 controls">
                                                                    <input class="form-control" id="expresar_necesidades" name="expresar_necesidades" value="{{ old('expresar_necesidades') }}"  placeholder="Punto" type="text">
                                                                </div>
                                                                <div class="col-md-6 controls">
                                                                    <input class="form-control" id="comentario_necesidades" name="comentario_necesidades" value="{{ old('comentario_necesidades') }}"  placeholder="Comentario" type="text" maxlength="200">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- STEP 7 -->
                                                        <div class='step-pane active' data-step='7'>
                                                            <div class="col-md-12">
                                                                <h3>Habilidades Sociales</h3>
                                                                <hr/>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="contacto_visual">Contacto visual</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="contacto_visual" name="contacto_visual" value="{{ old('contacto_visual') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="sonrisa_social">Sonrisa social</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="sonrisa_social" name="sonrisa_social" value="{{ old('sonrisa_social') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="seguimiento_personas">Seguimiento visual a personas</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="seguimiento_personas" name="seguimiento_personas" value="{{ old('seguimiento_personas') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="seguimiento_objetos">Seguimiento visual a objetos</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="seguimiento_objetos" name="seguimiento_objetos" value="{{ old('seguimiento_objetos') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="investigacion_visual">Investigación visual</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="investigacion_visual" name="investigacion_visual" value="{{ old('investigacion_visual') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="investigacion_motora">Investigación motora(Hurga)</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="investigacion_motora" name="investigacion_motora" value="{{ old('investigacion_motora') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="atencion_conjunta">Atención conjunta</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="atencion_conjunta" name="atencion_conjunta" value="{{ old('atencion_conjunta') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="imitacion_gestual">Imitación gestual</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="imitacion_gestual" name="imitacion_gestual" value="{{ old('imitacion_gestual') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="imitacion_vocal">Imitación vocal</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="imitacion_vocal" name="imitacion_vocal" value="{{ old('imitacion_vocal') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="imitacion_motora">Imitación motora</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="imitacion_motora" name="imitacion_motora" value="{{ old('imitacion_motora') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="situaciones_repetidas">Acepta situaciones repetitivas</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="situaciones_repetidas" name="situaciones_repetidas" value="{{ old('situaciones_repetidas') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="situaciones_nuevas">Acepta situaciones nuevas</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="situaciones_nuevas" name="situaciones_nuevas" value="{{ old('situaciones_nuevas') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="intencion_comunicacional">Intención comunicacional</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="intencion_comunicacional" name="intencion_comunicacional" value="{{ old('intencion_comunicacional') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="carinioso">Cariñoso</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="carinioso" name="carinioso" value="{{ old('carinioso') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="juego_solitario">Juego solitario</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="juego_solitario" name="juego_solitario" value="{{ old('juego_solitario') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="juego_paralelo">Juego paralelo</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="juego_paralelo" name="juego_paralelo" value="{{ old('juego_paralelo') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="juego_interactivo">Juego interactivo</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="juego_interactivo" name="juego_interactivo" value="{{ old('juego_interactivo') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="gestos_adecuados">Usa gestos adecuados para comunicarse</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="gestos_adecuados" name="gestos_adecuados" value="{{ old('gestos_adecuados') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="inicia_conversacion">Inicia coneversación</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="inicia_conversacion" name="inicia_conversacion" value="{{ old('inicia_conversacion') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="formula_peticiones">Formula peticiones</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="formula_peticiones" name="formula_peticiones" value="{{ old('formula_peticiones') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="aclarar_dudas">Pide aclaración de dudas</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="aclarar_dudas" name="aclarar_dudas" value="{{ old('aclarar_dudas') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="emisor_receptor">Alterna roles emisor/receptor</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="emisor_receptor" name="emisor_receptor" value="{{ old('emisor_receptor') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="ninios_edad">¿Juega con niños de su edad?</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="ninios_edad" name="ninios_edad" value="{{ old('ninios_edad') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="preferencia_tipo_persona">¿Tiene preferencias por cierto sexo, edad o tipos de personas?</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="preferencia_tipo_persona" name="preferencia_tipo_persona" value="{{ old('preferencia_tipo_persona') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="mayores_intereses">¿Cuáles son sus mayores intereses?</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="mayores_intereses" name="mayores_intereses" value="{{ old('mayores_intereses') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="cosas_no_gustan">¿Qué actividades o cosas no le gustan?</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="cosas_no_gustan" name="cosas_no_gustan" value="{{ old('cosas_no_gustan') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <label class="col-md-3 control-label" for="juegos">¿A qué juega?</label>
                                                                <div class="col-md-9 controls">
                                                                    <input class="form-control" id="juegos" name="juegos" value="{{ old('juegos') }}"  placeholder="Descripción habilidad" type="text">
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    {{ csrf_field() }}
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('partials.footer')

                <div class="modal-custom">
                    <div class='modal fade' id='confirmation' tabindex='-1'>
                        <div class='modal-dialog'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button aria-hidden='true' class='close' data-dismiss='modal' type='button'>×</button>
                                    <h3 class='modal-title' id='myModalLabel'>Confirmación</h3>
                                </div>
                                <div class='modal-body'>
                                    <h5>Ya ha completado la ficha de evaluación inicial para Terapia Ocupacional. Favor de verificar que los datos que ingresó son los correctos. <br>
                                        Para guardar pulse el botón Registrar. Si desea realizar un cambio, pulse el botón Volver.</h5>
                                    <hr>
                                </div>
                                <div class='modal-footer'>
                                    <button class='btn btn-default' data-dismiss='modal' type='button'>Volver</button>
                                    <button class='btn btn-success' type='button' onclick="enviarFormulario()">Registrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                    /**
                     * Envia el formulario cuando ya fueron revisados todos los datos
                     */
                    function enviarFormulario(){

                        $('#formulario_registro').submit();
                    }
                </script>

            </div>
        </section>
    </div>
@endsection
