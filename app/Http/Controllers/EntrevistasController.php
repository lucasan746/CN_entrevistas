<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrevista as ModelsEntrevista;
use App\Models\Acomp as ModelsAcomp;
use App\Models\Prospecto as ModelsProspecto;

class EntrevistasController extends Controller
{
    public function nueva_entrevista(request $form){

        $prospecto = new ModelsProspecto();
        $prospecto->dni = intval($form->dni_prospecto);
        $prospecto->nombre = $form->nombre_prospecto;
        $prospecto->apellido = $form->apellido_prospecto;
        $prospecto->fecha_nacimiento = $form->nacimiento_prospecto;
        $prospecto->edad = intval($form->edad_prospecto);
        $prospecto->id_prospecto = intval($form->id_prospecto);
        $prospecto->estado_civil = $form->ecivil_prospecto;
        $prospecto->profesion = $form->profesion_prospecto;
        $prospecto->celular = intval($form->celular_prospecto);
        $prospecto->celular_alt = intval($form->celalternativo_prospecto);
        $prospecto->telefono = intval($form->telefono_prospecto);
        $prospecto->telefono_alt = intval($form->telalternativo_prospecto);
        $prospecto->email = $form->email_prospecto;
        $prospecto->email_alt = $form->mailalternativo_prospecto;
        $prospecto->direccion = $form->direccion_prospecto;
        $prospecto->localidad = $form->localidad_prospecto;
        $prospecto->cod_postal = intval($form->codigopostal_prospecto);
        $prospecto->pais = $form->pais_prospecto;
        $prospecto->provincia = $form->provincia_prospecto;
        $prospecto->save();

        $entrevista = new ModelsEntrevista();
        $entrevista->id_asociado = $form->id_prospecto;
        $entrevista->es_cliente = $form->es_cliente_prospecto;
        $entrevista->nro_cliente = intval($form->nro_cliente_prospecto);
        $entrevista->referente = $form->referente_prospecto;
        $entrevista->procedencia = $form->procedencia_prospecto;
        $entrevista->opc = $form->opc_prospecto;
        $entrevista->liner = $form->liner_prospecto;
        $entrevista->fecha = $form->fecha_prospecto;
        $entrevista->comentarios = $form->comentarios_prospecto;
        $entrevista->save();

        if($form->acomp_dni_prospecto != null){
            $acomp = new ModelsAcomp();
            $acomp->id_asociado = $entrevista->id;
            $acomp->acomp_dni = intval($form->acomp_dni_prospecto);
            $acomp->acomp_nombre = $form->acomp_nombre_prospecto;
            $acomp->acomp_apellido = $form->acomp_apellido_prospecto;
            $acomp->acomp_fecha_nacimiento = date($form->acomp_fecha_prospecto);
            $acomp->acomp_edad = intval($form->acomp_edad_prospecto);
            $acomp->acomp_id_prospecto = intval(12);
            $acomp->acomp_estado_civil = $form->acomp_ecivil_prospecto;
            $acomp->acomp_profesion = $form->acomp_profesion_prospecto;
            $acomp->acomp_celular = intval($form->acomp_celular_prospecto);
            $acomp->acomp_celular_alt = intval($form->acomp_celalternativo_prospecto);
            $acomp->acomp_telefono = intval($form->acomp_telefono_prospecto);
            $acomp->acomp_telefono_alt = intval($form->acomp_telalternativo_prospecto);
            $acomp->acomp_email = $form->acomp_email_prospecto;
            $acomp->acomp_email_alt = $form->acomp_mailalternativo_prospecto;
            $acomp->acomp_direccion = $form->acomp_direccion_prospecto;
            $acomp->acomp_localidad = $form->acomp_localidad_prospecto;
            $acomp->acomp_cod_postal = intval($form->acomp_codigopostal_prospecto);
            $acomp->acomp_pais = $form->acomp_pais_prospecto;
            $acomp->acomp_provincia = $form->acomp_provincia_prospecto;
            $acomp->save();
        }

        return redirect('/entrevistas-listado');       
    }

    public function get_entrevistas() {
        $allEntrevistas = ModelsEntrevista::all();
        $vac = compact('allEntrevistas');
        return view('entrevistas-listado',$vac);
    }

    public function id_prospecto() {
        $entrevistas = ModelsEntrevista::all()->count();
        $vac = compact('entrevistas');
        return view('entrevistas-nueva',$vac);
    }
}
