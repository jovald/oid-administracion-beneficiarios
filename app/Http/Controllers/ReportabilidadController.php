<?php

namespace App\Http\Controllers;

use App\Beneficiario;
use App\CredencialDiscapacidad;
use App\DatoSocial;
use App\FichaAtencionSocial;
use App\FichaBeneficiario;
use App\FichaFonoaudiologia;
use App\FichaKinesiologia;
use App\FichaPsicologia;
use App\FichaTerapiaOcupacional;
use App\Fonasa;
use App\HoraAgendada;
use App\MotivoAtencionSocial;
use App\PrestacionRealizada;
use App\SubMotivoAtencionSocial;
use App\TipoAyudaTecnicoSocial;
use App\TipoSubmotivoSocial;
use App\TipoMotivoSocial;
use Illuminate\Http\Request;

class ReportabilidadController extends Controller
{
    public function index() {
        return view('reportabilidad.menuReportabilidad');
    }


    public function showResults(Request $request){
        
        $cant = Beneficiario::count();
        $masculino = Beneficiario::where('sexo','masculino')->count();
        $fem = Beneficiario::where('sexo','femenino')->count();
        $ingresoAnual=FichaBeneficiario::whereYear('fecha_ingreso', '=', date('Y'))->count();
        $ingresoMensual = FichaBeneficiario::whereYear('fecha_ingreso', '=', date('Y'))
            ->whereMonth('fecha_ingreso', '=', date('m'))
            ->count();
        $credencial = CredencialDiscapacidad::count();

        $atencionAnual=PrestacionRealizada::whereYear('fecha', '=', date('Y'))->count();
        $atencionMensual=PrestacionRealizada::whereYear('fecha', '=', date('Y'))
            ->whereMonth('fecha', '=', date('m'))
            ->count();
        $estimulacionTemprana = Beneficiario::whereYear('fecha_nacimiento','>=',(date('Y')-2))->count();
        $edad3_5= Beneficiario::whereYear('fecha_nacimiento','<=',(date('Y')-3))->whereYear('fecha_nacimiento','>=',(date('Y')-5))->count();
        $edad6_10= Beneficiario::whereYear('fecha_nacimiento','<=',(date('Y')-6))->whereYear('fecha_nacimiento','>=',(date('Y')-10))->count();
        $edad11_20= Beneficiario::whereYear('fecha_nacimiento','<=',(date('Y')-11))->whereYear('fecha_nacimiento','>=',(date('Y')-20))->count();
        $edad21_30= Beneficiario::whereYear('fecha_nacimiento','<=',(date('Y')-21))->whereYear('fecha_nacimiento','>=',(date('Y')-30))->count();
        $edad31_40= Beneficiario::whereYear('fecha_nacimiento','<=',(date('Y')-31))->whereYear('fecha_nacimiento','>=',(date('Y')-40))->count();
        $edad641_50= Beneficiario::whereYear('fecha_nacimiento','<=',(date('Y')-41))->whereYear('fecha_nacimiento','>=',(date('Y')-50))->count();
        $edad51_60= Beneficiario::whereYear('fecha_nacimiento','<=',(date('Y')-51))->whereYear('fecha_nacimiento','>=',(date('Y')-60))->count();
        $edad61_70= Beneficiario::whereYear('fecha_nacimiento','<=',(date('Y')-61))->whereYear('fecha_nacimiento','>=',(date('Y')-70))->count();
        $edad71_80= Beneficiario::whereYear('fecha_nacimiento','<=',(date('Y')-71))->whereYear('fecha_nacimiento','>=',(date('Y')-80))->count();
        $edad81_90= Beneficiario::whereYear('fecha_nacimiento','<=',(date('Y')-81))->whereYear('fecha_nacimiento','>=',(date('Y')-90))->count();
        $edad91_100= Beneficiario::whereYear('fecha_nacimiento','<=',(date('Y')-91))->whereYear('fecha_nacimiento','>=',(date('Y')-100))->count();
        $edad101_110= Beneficiario::whereYear('fecha_nacimiento','<=',(date('Y')-101))->whereYear('fecha_nacimiento','>=',(date('Y')-110))->count();
        $edad111_120= Beneficiario::whereYear('fecha_nacimiento','<=',(date('Y')-111))->whereYear('fecha_nacimiento','>=',(date('Y')-120))->count();

        //$nino= Beneficiario::where('edad','>=',3)->where('edad','<=',5)->count();
        // 19-65    adulto mayor   65-100
       // print $nino;
        $porcentajeJoven=0;
        $porcentajeAdulto=0;
        $porcentajeAdultoMayor=0;

        //SALUD FONASA O ISAPRE
        $fonasa=DatoSocial::where('fonasa_id','!=', null)->count();
        $fonasaTramoA= DatoSocial::where('fonasa_id','=',1)->count();
        $fonasaTramoB= DatoSocial::where('fonasa_id','=',2)->count();
        $fonasaTramoC= DatoSocial::where('fonasa_id','=',3)->count();
        $fonasaTramoD= DatoSocial::where('fonasa_id','=',4)->count();
        //isapre
        $isapre=DatoSocial::where('isapre_id','!=', null)->count();
        $isapreCruzBlanca= datoSocial::where('isapre_id','=',1)->count();
        $isapreColmena= datoSocial::where('isapre_id','=',2)->count();
        $isapreMasVida= datoSocial::where('isapre_id','=',3)->count();
        $isapreConsalud= datoSocial::where('isapre_id','=',4)->count();
        $isapreBanmedica= datoSocial::where('isapre_id','=',5)->count();
        $isapreVidaTres= datoSocial::where('isapre_id','=',6)->count();
        $isapreCodelco= datoSocial::where('isapre_id','=',7)->count();
        $isapreDipreca= datoSocial::where('isapre_id','=',8)->count();
        $isapreCapredena= datoSocial::where('isapre_id','=',9)->count();
        $isapreFerroSalud= datoSocial::where('isapre_id','=',10)->count();
        $isapreOtro= datoSocial::where('isapre_id','=',11)->count();

       

        if($fonasa!=0){
            $porcentajeFonasa = $fonasa*100/$cant;
            $porcentajeFonasaTramoA=$fonasaTramoA*100/$fonasa;
            $porcentajeFonasaTramoB=$fonasaTramoB*100/$fonasa;
            $porcentajeFonasaTramoC=$fonasaTramoC*100/$fonasa;
            $porcentajeFonasaTramoD=$fonasaTramoD*100/$fonasa;
        }else{
            $porcentajeFonasa = 0;
            $porcentajeFonasaTramoA=0;
            $porcentajeFonasaTramoB=0;
            $porcentajeFonasaTramoC=0;
            $porcentajeFonasaTramoD=0;
        }

        //EDUCACION id 1-9
        $preBasico=Beneficiario::where('educacion_id','=',1)->count();
        $basicoIncompleto=Beneficiario::where('educacion_id','=',2)->count();
        $basicoCompleto=Beneficiario::where('educacion_id','=',3)->count();
        $medioIncompleto=Beneficiario::where('educacion_id','=',4)->count();
        $medioCompleto=Beneficiario::where('educacion_id','=',5)->count();
        $tecnicoIncompleto=Beneficiario::where('educacion_id','=',6)->count();
        $tecnicoCompleto=Beneficiario::where('educacion_id','=',7)->count();
        $universitarioIncompleto=Beneficiario::where('educacion_id','=',8)->count();
        $universitarioCompleto=Beneficiario::where('educacion_id','=',9)->count();

        //SITUACION LABORAL id 1-5
        $trabajador=Beneficiario::where('ocupacion_id','=',1)->count();
        $estudiante=Beneficiario::where('ocupacion_id','=',2)->count();
        $duenoCasa=Beneficiario::where('ocupacion_id','=',3)->count();
        $pensionado=Beneficiario::where('ocupacion_id','=',4)->count();
        $cesante=Beneficiario::where('ocupacion_id','=',5)->count();

        if($cant!=0){
            $porcentajeMasculino = $masculino*100/$cant;
            $porcentajeFemenino=$fem*100/$cant;
            $porcentajeCredencial=$credencial*100/$cant;
            $porcentajeIsapre=$isapre*100/$cant;
        }else{
            $porcentajeMasculino =0;
            $porcentajeFemenino=0;
            $porcentajeCredencial=0;
            $porcentajeIsapre=0;
        }
        
        return view('reportabilidad.createFichaPaciente', compact('cant', 'porcentajeFemenino', 'porcentajeMasculino', 'ingresoAnual', 'ingresoMensual', 'porcentajeCredencial', 'atencionAnual' , 'atencionMensual','porcentajeAdulto', 'porcentajeJoven', 'porcentajeAdultoMayor', 'porcentajeFonasa',
            'porcentajeFonasaTramoA','porcentajeFonasaTramoB', 'porcentajeFonasaTramoC','porcentajeFonasaTramoD', 'porcentajeIsapre', 'preBasico','basicoIncompleto', 'basicoCompleto',
            'medioIncompleto', 'medioCompleto', 'tecnicoIncompleto', 'tecnicoCompleto', 'universitarioIncompleto' ,
            'universitarioCompleto', 'trabajador','estudiante','duenoCasa','pensionado','cesante', 'isapreCruzBlanca','isapreColmena','isapreMasVida','isapreConsalud','isapreBanmedica','isapreVidaTres','isapreCodelco', 
        'isapreDipreca','isapreCapredena','isapreFerroSalud','isapreOtro'));

    }
    public function showResultKine(Request $request){
        //KINE
        $user_rut="185341126-k";
        $atencionAnualKine=FichaKinesiologia::whereYear('ficha_kinesiologias.created_at', '=', date('Y'))
            ->join('kinesiologos','ficha_kinesiologias.kinesiologo_id','=','kinesiologos.id')
            ->where('kinesiologos.rut','=',$user_rut)
            ->count();
        $atencionMensualKine=FichaKinesiologia::whereYear('ficha_kinesiologias.created_at', '=', date('Y'))
            ->whereMonth('ficha_kinesiologias.created_at', '=', date('m'))
            ->join('kinesiologos','ficha_kinesiologias.kinesiologo_id','=','kinesiologos.id')
            ->where('kinesiologos.rut','=',$user_rut)
            ->count();

      /*  $asistenciaKine =HoraAgendada::where('hora_agendadas.asist_sn','=','si')
            ->join('kinesiologos','hora_agendadas.user_id','=','kinesiologos.id')
            ->where('kinesiologos.rut','=',$user_rut)
            ->count();
        $inasistenciaKine =HoraAgendada::where('hora_agendadas.asist_sn','=','no')
            ->join('kinesiologos','hora_agendadas.user_id','=','kinesiologos.id')
            ->where('kinesiologos.rut','=',$user_rut)
            ->count();
            */
        return view('reportabilidad.reportabilidadKine', compact('atencionAnualKine','atencionMensualKine'));
    }

    public function showResultFono(Request $request){
        //FONO
        /*     $user_rut1="0";
             $atencionAnualFono=FichaFonoaudiologia::whereYear('ficha_fonoaudiologia.created_at', '=', date('Y'))
                 ->join('fonoaudiologos','ficha_fonoaudiologia.fonoaudiologos_id','=','fonoaudiologos.id')
                 ->where('fonoaudiologos.rut','=',$user_rut1)
                 ->count();
             $atencionMensualFono=FichaFonoaudiologia::whereYear('ficha_fonoaudiologia.created_at', '=', date('Y'))
                 ->whereMonth('ficha_kinesiologias.created_at', '=', date('m'))
                 ->join('fonoaudiologos','ficha_fonoaudiologia.fonoaudiologos_id','=','fonoaudiologos.id')
                 ->where('fonoaudiologos.rut','=',$user_rut)
                 ->count();

             /*      $asistenciaFono =HoraAgendada::where('hora_agendadas.asist_sn','=','si')
                       ->join('fonoaudiologos','hora_agendadas.user_id','=','fonoaudiologos.id')
                       ->where('fonoaudiologos.rut','=',$user_rut)
                       ->count();
                   $inasistenciaFono =HoraAgendada::where('hora_agendadas.asist_sn','=','no')
                       ->join('kinesiologos','hora_agendadas.user_id','=','kinesiologos.id')
                       ->where('kinesiologos.rut','=',$user_rut)
                       ->count();

        return view('reportabilidad.reportabilidadFono', compact('atencionAnualFono','atencionMensualFono','asistenciaFono','inasistenciaFono'));
             */
    }

    public function showResultPsico(Request $request){
        //Psico
        $user_rut1="82982635-5";
        $atencionAnualPsico=FichaPsicologia::whereYear('ficha_psicologias.created_at', '=', date('Y'))
            ->join('psicologos','ficha_psicologias.psicologo_id','=','psicologos.id')
            ->where('psicologos.rut','=',$user_rut1)
            ->count();
        $atencionMensualPsico=FichaPsicologia::whereYear('ficha_psicologias.created_at', '=', date('Y'))
            ->whereMonth('ficha_psicologias.created_at', '=', date('m'))
            ->join('psicologos','ficha_psicologias.psicologo_id','=','psicologos.id')
            ->where('psicologos.rut','=',$user_rut1)
            ->count();

        /*$asistenciaPsico =HoraAgendada::where('hora_agendadas.asist_sn','=','si')
            ->join('psicologos','hora_agendadas.user_id','=','psicologos.id')
            ->where('psicologos.rut','=',$user_rut1)
            ->count();
        $inasistenciaPsico =HoraAgendada::where('hora_agendadas.asist_sn','=','no')
            ->join('psicologos','hora_agendadas.user_id','=','psicologos.id')
            ->where('psicologos.rut','=',$user_rut1)
            ->count();
            */
        return view('reportabilidad.reportabilidadPsico', compact('atencionAnualPsico','atencionMensualPsico','asistenciaPsico','inasistenciaPsico'));
    }

    public function showResultTer(Request $request){
        //terapiaocupacional
        $user_rut2="57726529-5";
        $atencionAnualTer=FichaTerapiaOcupacional::whereYear('ficha_terapia_ocupacionals.created_at', '=', date('Y'))
            ->join('terapeuta_ocupacionals','ficha_terapia_ocupacionals.terapeuta_ocupacional_id','=','terapeuta_ocupacionals.id')
            ->where('terapeuta_ocupacionals.rut','=',$user_rut2)
            ->count();
        $atencionMensualTer=FichaTerapiaOcupacional::whereYear('ficha_terapia_ocupacionals.created_at', '=', date('Y'))
            ->whereMonth('ficha_terapia_ocupacionals.created_at', '=', date('m'))
            ->join('terapeuta_ocupacionals','ficha_terapia_ocupacionals.terapeuta_ocupacional_id','=','terapeuta_ocupacionals.id')
            ->where('terapeuta_ocupacionals.rut','=',$user_rut2)
            ->count();
/*
        $asistenciaTer =HoraAgendada::where('hora_agendadas.asist_sn','=','si')
            ->join('terapeuta_ocupacionals','hora_agendadas.user_id','=','terapeuta_ocupacionals.id')
            ->where('terapeuta_ocupacionals.rut','=',$user_rut2)
            ->count();
        $inasistenciaTer =HoraAgendada::where('hora_agendadas.asist_sn','=','no')
            ->join('terapeuta_ocupacionals','hora_agendadas.user_id','=','terapeuta_ocupacionals.id')
            ->where('terapeuta_ocupacionals.rut','=',$user_rut2)
            ->count();
            */
        return view('reportabilidad.reportabilidadTer', compact('atencionAnualTer','atencionMensualTer','asistenciaTer','inasistenciaTer'));
    }

    public function showResultSoc(Request $request)
    {
        //SOcial
        $atencionAnualSocial = FichaAtencionSocial::whereYear('created_at', '=', date('Y'))
            ->count();
        $atencionMensualSocial = FichaAtencionSocial::whereYear('created_at', '=', date('Y'))
            ->whereMonth('created_at', '=', date('m'))
            ->count();
        return view('reportabilidad.reportabilidadSoc', compact('atencionAnualSocial','atencionMensualSocial'));
    }

    public function showResultGrupal(Request $request){
        // El que mas ha trabajado
        $atencionAnualKines=FichaKinesiologia::whereYear('ficha_kinesiologias.created_at', '=', date('Y'))
            ->count();
        $atencionMensualKines=FichaKinesiologia::whereYear('ficha_kinesiologias.created_at', '=', date('Y'))
            ->whereMonth('ficha_kinesiologias.created_at', '=', date('m'))
            ->count();
        $atencionAnualFonos=0;
        $atencionMensualFonos=0;
        /*   $atencionAnualFonos=FichaFonoaudiologia::whereYear('created_at', '=', date('Y'))
               ->count();
           $atencionMensualFonos=FichaFonoaudiologia::whereYear('created_at', '=', date('Y'))
               ->whereMonth('ficha_kinesiologias.created_at', '=', date('m'))
               ->count(); */
        $atencionAnualPsicos=FichaPsicologia::whereYear('created_at', '=', date('Y'))
            ->count();
        $atencionMensualPsicos=FichaPsicologia::whereYear('created_at', '=', date('Y'))
            ->whereMonth('created_at', '=', date('m'))
            ->count();
        $atencionAnualTers=FichaTerapiaOcupacional::whereYear('created_at', '=', date('Y'))
            ->count();
        $atencionMensualTers=FichaTerapiaOcupacional::whereYear('created_at', '=', date('Y'))
            ->whereMonth('created_at', '=', date('m'))
            ->count();

        return view('reportabilidad.reportabilidadGrupal', compact('atencionAnualKines','atencionMensualKines','atencionAnualFonos','atencionMensualFonos',
            'atencionAnualPsicos','atencionMensualPsicos','atencionAnualTers','atencionMensualTers'));

    }

    
}