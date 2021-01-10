<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrevista as ModelsEntrevista;

class EntrevistasController extends Controller
{
    public function nueva_entrevista(request $form){
        
        $entrevista = new ModelsEntrevista();
        $entrevista->dni = intval($form->dni_prospecto);
        $entrevista->nombre = $form->nombre_prospecto;
        $entrevista->apellido = $form->apellido_prospecto;
        $entrevista->fecha_nacimiento = $form->nacimiento_prospecto;
        $entrevista->edad = intval($form->edad_prospecto);
        $entrevista->id_prospecto = intval(12);
        $entrevista->estado_civil = $form->ecivil_prospecto;
        $entrevista->profesion = $form->profesion_prospecto;
        $entrevista->celular = intval($form->celular_prospecto);
        $entrevista->celular_alt = intval($form->celalternativo_prospecto);
        $entrevista->telefono = intval($form->telefono_prospecto);
        $entrevista->telefono_alt = intval($form->telalternativo_prospecto);
        $entrevista->email = $form->email_prospecto;
        $entrevista->email_alt = $form->mailalternativo_prospecto;
        $entrevista->direccion = $form->direccion_prospecto;
        $entrevista->localidad = $form->localidad_prospecto;
        $entrevista->cod_postal = intval($form->codigopostal_prospecto);
        $entrevista->pais = $form->pais_prospecto;
        $entrevista->provincia = $form->provincia_prospecto;
        $entrevista->acomp_dni = intval($form->acomp_dni_prospecto);
        $entrevista->acomp_nombre = $form->acomp_nombre_prospecto;
        $entrevista->acomp_apellido = $form->acomp_apellido_prospecto;
        $entrevista->acomp_fecha_nacimiento = date($form->acomp_fecha_prospecto);
        $entrevista->acomp_edad = intval($form->acomp_edad_prospecto);
        $entrevista->acomp_id_prospecto = intval(12);
        $entrevista->acomp_estado_civil = $form->acomp_ecivil_prospecto;
        $entrevista->acomp_profesion = $form->acomp_profesion_prospecto;
        $entrevista->acomp_celular = intval($form->acomp_celular_prospecto);
        $entrevista->acomp_celular_alt = intval($form->acomp_celalternativo_prospecto);
        $entrevista->acomp_telefono = intval($form->acomp_telefono_prospecto);
        $entrevista->acomp_telefono_alt = intval($form->acomp_telalternativo_prospecto);
        $entrevista->acomp_email = $form->acomp_email_prospecto;
        $entrevista->acomp_email_alt = $form->acomp_mailalternativo_prospecto;
        $entrevista->acomp_direccion = $form->acomp_direccion_prospecto;
        $entrevista->acomp_localidad = $form->acomp_localidad_prospecto;
        $entrevista->acomp_cod_postal = intval($form->acomp_codigopostal_prospecto);
        $entrevista->acomp_pais = $form->acomp_pais_prospecto;
        $entrevista->acomp_provincia = $form->acomp_provincia_prospecto;
        $entrevista->es_cliente = $form->es_cliente_prospecto;
        $entrevista->nro_cliente = intval($form->nro_cliente_prospecto);
        $entrevista->referente = $form->referente_prospecto;
        $entrevista->procedencia = $form->procedencia_prospecto;
        $entrevista->opc = $form->opc_prospecto;
        $entrevista->liner = $form->liner_prospecto;
        $entrevista->fecha = $form->fecha_prospecto;
        $entrevista->comentarios = $form->comentarios_prospecto;
        $entrevista->save();
        return redirect('/entrevistas-listado');       
    }
}
