<?php

namespace App\Http\Controllers;

use App\AntecedentesMorbidosFamiliaresSiNoFono;
use App\AntecedentesMorbidosSiNoFono;
use App\AntecedentesPerinatalesFono;
use App\AntecedentesPostnatalesFono;
use App\AntecedentesPrenatalesFono;
use App\DesarrolloLenguajeEdades;
use App\DesarrolloPsicomotorEdades;
use App\DesarrolloSocialFono;
use App\FichaFonoaudiologia;
use App\HabitosSiNoFono;
use App\ParienteHogarFono;
use Illuminate\Http\Request;

class FichaFonoaudiologiaController extends Controller
{

    /**
     * Mostrar formulario de ingreso de evaluacion inicial.
     *
     * @return view
     */
    public function create($id)
    {
        return view('area-medica.ficha-evaluacion-inicial.fonoaudiologia.create')
            ->with(compact('id'));
    }

    public function postAgregarPariente(Request $request)
    {
        $this->validate($request, $this->rules($request));

        try{
            $habitosSiNoFono = new HabitosSiNoFono([
                'mamadera' => $request->input('mamadera'),
                'chupete' => $request->input('chupete'),
                'chupa_dedo' => $request->input('chupa_dedo'),
                'come_solo_tipo' => $request->input('come_solo_tipo'),
                'viste_solo' => $request->input('viste_solo'),
                'boca_abierta_dia' => $request->input('boca_abierta_dia'),
                'boca_abierta_noche' => $request->input('boca_abierta_noche'),
            ]);
            $habitosSiNoFono->save();

            $desarrolloLenguajeEdades = new DesarrolloLenguajeEdades([
                'balbuceo' => $request->input('balbuceo'),
                'sonrio' => $request->input('sonrio'),
                'primeras_palabras' => $request->input('primeras_palabras'),
                'frases_dos_palabras' => $request->input('frases_dos_palabras'),
                'oraciones' => $request->input('oraciones'),
                'hablo_espo' => $request->input('hablo_espo'),
                'siguio_inst' => $request->input('siguio_inst'),
                'mira_ojos' => $request->input('mira_ojos'),
                'mira_labios' => $request->input('mira_labios'),
                'comunica_palabras' => $request->input('comunica_palabras'),
                'comunica_jerga' => $request->input('comunica_jerga'),
                'comunica_palabras_sueltas' => $request->input('comunica_palabras_sueltas'),
                'comunica_gestos' => $request->input('comunica_gestos'),
                'entiende_dice' => $request->input('entiende_dice'),
                'desconocidos_entienden' => $request->input('desconocidos_entienden'),

            ]);
            $desarrolloLenguajeEdades->save();

            $antecedentesPerinatalesFono = new AntecedentesPerinatalesFono([
                'tipo_parto' => $request->input('tipo_parto'),
                'suf_fetal' => $request->input('suf_fetal'),
                'edad_gest' => $request->input('edad_gest'),
                'lugar_naci' => $request->input('lugar_naci'),
                'peso' => $request->input('peso'),
                'talla' => $request->input('talla'),
                'apgar' => $request->input('apgar'),
                'comp_parto' => $request->input('comp_parto'),
                'hospitalizaciones' => $request->input('hospitalizaciones'),
                'otros_perinatales' => $request->input('otros'),
            ]);
            $antecedentesPerinatalesFono->save();

            $antecedentesPrenatalesFono = new AntecedentesPrenatalesFono([
                'plan_embarazo' => $request->input('plan_embarazo'),
                'acept_embarazo' => $request->input('acept_embarazo'),
                'control_embarazo' => $request->input('control_embarazo'),
                'ingesta_med' => $request->input('ingesta_med'),
                'ingesta_oh_drogas' => $request->input('ingesta_oh_drogas'),
                'consumo_cigarrillo' => $request->input('consumo_cigarrillo'),
                'estado_emocional' => $request->input('estado_emocional'),
                'enfermedades_embarazo' => $request->input('enfermedades_embarazo'),
                'otros_prenatales' => $request->input('otros'),
            ]);
            $antecedentesPrenatalesFono->save();

            $desarrolloPsicomotorEdades = new DesarrolloPsicomotorEdades([
                'control_cabeza' => $request->input('control_cabeza'),
                'sento' => $request->input('sento'),
                'paro' => $request->input('paro'),
                'gateo' => $request->input('gateo'),
                'camino' => $request->input('camino'),
                'control_esf_diurno' => $request->input('control_esf_diurno'),
                'control_esf_nocturno' => $request->input('control_esf_nocturno'),
            ]);
            $desarrolloPsicomotorEdades->save();

            $desarrolloSocialFono = new DesarrolloSocialFono([
                'respeta_normas' => $request->input('respeta_normas'),
                'comparte_juguetes' => $request->input('comparte_juguetes'),
                'juega_otros' => $request->input('juega_otros'),
                'carinoso' => $request->input('carinoso'),
                'berrinches' => $request->input('berrinches'),
                'frustra_facil' => $request->input('frustra_facil'),
                'irritable' => $request->input('irritable'),
                'agresivo' => $request->input('agresivo'),
                'peleador' => $request->input('peleador'),
                'intereses' => $request->input('intereses'),
                'observaciones_social' => $request->input('observaciones'),
            ]);
            $desarrolloSocialFono->save();

            $antecedentesMorbidosSiNoFono = new AntecedentesMorbidosSiNoFono([
                'alergias_sn' => $request->input('alergias_sn'),
                'alergias_desc' => $request->input('alergias_desc'),
                'obesidad_sn' => $request->input('obesidad_sn'),
                'obesidad_desc' => $request->input('obesidad_desc'),
                'otitis_sn' => $request->input('otitis_sn'),
                'otitis_desc' => $request->input('otitis_desc'),
                'diabetes_sn' => $request->input('diabetes_sn'),
                'diabetes_desc' => $request->input('diabetes_desc'),
                'cirugias_sn' => $request->input('cirugias_sn'),
                'cirugias_desc' => $request->input('cirugias_desc'),
                'traumatis_sn' => $request->input('traumatis_sn'),
                'traumatis_desc' => $request->input('traumatis_desc'),
                'epilepsia_sn' => $request->input('epilepsia_sn'),
                'epilepsia_desc' => $request->input('epilepsia_desc'),
                'deficit_visual_sn' => $request->input('deficit_visual_sn'),
                'deficit_visual_desc' => $request->input('deficit_visual_desc'),
                'deficit_auditivo_sn' => $request->input('deficit_auditivo_sn'),
                'deficit_auditivo_desc' => $request->input('deficit_auditivo_desc'),
                'paralisis_cerebral_sn' => $request->input('paralisis_cerebral_sn'),
                'paralisis_cerebral_desc' => $request->input('paralisis_cerebral_desc'),
                'otros_morbidos' => $request->input('otros_morbidos'),
            ]);
            $antecedentesMorbidosSiNoFono->save();

            $antecedentesMorbidosFamiliaresSiNoFono = new AntecedentesMorbidosFamiliaresSiNoFono([
                'diabetes_sn' => $request->input('diabetes_sn'),
                'hipertension_sn' => $request->input('hipertension_sn'),
                'epilepsia_sn' => $request->input('epilepsia_sn'),
                'deficiencia_mental_sn' => $request->input('deficiencia_mental_sn'),
                'autismo_sn' => $request->input('autismo_sn'),
                'trast_lenguaje_sn' => $request->input('trast_lenguaje_sn'),
                'trast_aprendizaje_sn' => $request->input('trast_aprendizaje_sn'),
                'trast_visuales_sn' => $request->input('trast_visuales_sn'),
                'trast_auditivos_sn' => $request->input('trast_auditivos_sn'),
                'trast_psiquiatricos_sn' => $request->input('trast_psiquiatricos_sn'),
            ]);
            $antecedentesMorbidosFamiliaresSiNoFono->save();

            $parienteHogarFono = new ParienteHogarFono([
                'observaciones_parientes' => $request->input('observaciones_parientes'),
                'nombre1' => $request->input('nombre1'),
                'parentesco1' => $request->input('parentesco1'),
                'edad1' => $request->input('edad1'),
                'escolaridad1' => $request->input('escolaridad1'),
                'ocupacion1' => $request->input('ocupacion1'),
                'nombre2' => $request->input('nombre2'),
                'parentesco2' => $request->input('parentesco2'),
                'edad2' => $request->input('edad2'),
                'escolaridad2' => $request->input('escolaridad2'),
                'ocupacion2' => $request->input('ocupacion2'),
                'nombre3' => $request->input('nombre3'),
                'parentesco3' => $request->input('parentesco3'),
                'edad3' => $request->input('edad3'),
                'escolaridad3' => $request->input('escolaridad3'),
                'ocupacion3' => $request->input('ocupacion3'),
                'nombre4' => $request->input('nombre4'),
                'parentesco4' => $request->input('parentesco4'),
                'edad4' => $request->input('edad4'),
                'escolaridad4' => $request->input('escolaridad4'),
                'ocupacion4' => $request->input('ocupacion4'),
                'nombre5' => $request->input('nombre5'),
                'parentesco5' => $request->input('parentesco5'),
                'edad5' => $request->input('edad5'),
                'escolaridad5' => $request->input('escolaridad5'),
                'ocupacion5' => $request->input('ocupacion6'),
                'nombre6' => $request->input('nombre6'),
                'parentesco6' => $request->input('parentesco6'),
                'edad6' => $request->input('edad6'),
                'escolaridad6' => $request->input('escolaridad6'),
                'ocupacion6' => $request->input('ocupacion6'),

            ]);
            $parienteHogarFono->save();

            $antecedentesPostnatalesFono = new AntecedentesPostnatalesFono([
                'trat_post_parto' => $request->input('trat_post_parto'),
                'tipo_alimenta' => $request->input('tipo_alimenta'),
                'limite_edad_alimenta' => $request->input('limite_edad_alimenta'),
                'operaciones_edad' => $request->input('operaciones_edad'),
                'observaciones_postnatales' => $request->input('observaciones_postnatales'),
                'hospitalizaciones_edad' => $request->input('hospitalizaciones_edad'),
            ]);
            $antecedentesPostnatalesFono->save();


            $fichaFonoaudiologia = new FichaFonoaudiologia([
                'motivo_consulta' => $request->input('motivo_consulta'),
                'habitos_si_no_id' => $habitosSiNoFono->id,
                'desarrollo_le_ed_id' => $desarrolloLenguajeEdades->id,
                'antecedentes_peri_fono_id' => $antecedentesPerinatalesFono->id,
                'antecedentes_pre_fono_id' => $antecedentesPrenatalesFono->id,
                'desarrollo_psi_ed_id' => $desarrolloPsicomotorEdades->id,
                'antecedentes_mor_fono_id' => $antecedentesMorbidosSiNoFono->id,
                'antecedentes_mor_fa_fono_id' => $antecedentesMorbidosFamiliaresSiNoFono->id,
                'parientes_hogar_fono_id' => $parienteHogarFono->id,
                'antecedentes_pos_fono_id' => $antecedentesPostnatalesFono->id,
                'user_id' => '1', //provisional
                'beneficiario_id' => $request->input('id'),
            ]);
            $fichaFonoaudiologia->save();
        }
        catch(Exception $e){

            //procedimiento en caso de reportar errores

        }
        $id = $request->input('id');
        return view('area-medica.ficha-evaluacion-inicial.fonoaudiologia.create')
            ->with(compact('id'));

    }



}
