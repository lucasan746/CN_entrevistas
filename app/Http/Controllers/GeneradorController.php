<?php

namespace App\Http\Controllers;

use App\Mail\NotificacionesMail;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;

class GeneradorController extends Controller
{
    public function imprimirProspecto($nombrePdfProspecto,$id,$mail = null){
        try {
            $entrevista = DB::table("entrevistas")->join("prospecto","id_asociado","=","id_prospecto")->where("id","=",$id)->get();
            $data = [
                'entrevista' => $entrevista[0]
            ];
            if($mail == null){
                $mail = $entrevista[0]->email;
                $pdf = PDF::loadView('voucher', $data);
                $pdf->save($nombrePdfProspecto);
            }

            FacadesMail::to($mail)->send(new \App\Mail\NotificacionesMail($data["entrevista"]->pdf));
            $vac = compact("nombrePdfProspecto");
            return view("entrevista-terminada",$vac);
        } catch (\Throwable $th) {
            echo "<pre>".$th."</pre>";
        }
   }

   public function downloadPdf($pdf){
        //Define header information
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header("Cache-Control: no-cache, must-revalidate");
        header("Expires: 0");
        header('Content-Disposition: attachment; filename="'.basename($pdf).'"');
        header('Content-Length: ' . filesize($pdf));
        header('Pragma: public');

        //Clear system output buffer
        flush();

        //Read the size of the file
        readfile($pdf);

        //Terminate from the script
        die();
   }
}
