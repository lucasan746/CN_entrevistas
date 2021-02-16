<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gerencia as ModelsGerencia;
use Illuminate\Support\Facades\DB;

class GerenciasController extends Controller
{
    public function nueva_gerencia(request $form){
        $gerencia = new ModelsGerencia();
        $gerencia->gerencia = $form->nombre_gerencia;
        $gerencia->estado = true;
        $gerencia->save();
        return redirect('/gerencia-listado'); 
    }

    public function listado_gerencia(){
        $gerencias = DB::table("gerencias")->get();
        $vac = compact('gerencias');
        return view('gerencia-listado',$vac);
    }

    public function edit_gerencia(request $form){
        $gerencia = ModelsGerencia::find($form->id_gerencia);
        if($form->nombre_gerencia != null){
            $gerencia->gerencia = $form->nombre_gerencia;
            $gerencia->save();
        }
        return redirect('/gerencia-listado'); 
    }

    public function edit_estado_gerencia(request $form){
        $gerencia = ModelsGerencia::find($form->id);
        $gerencia->estado = $form->estado;
        $gerencia->save(); 
    }

    public function eliminar_gerencia($id){
        $gerencia = ModelsGerencia::find($id);
        $gerencia->delete();
        return redirect('/gerencia-listado');
    }
}
