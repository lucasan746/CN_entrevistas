@extends('layouts.master')
@section('content')
<div class="block full info-alerta" style="min-height: 90vh">
    <div class="row" style="text-align: center">
        <div class="col-md-12"><h4>Entrevista guardada con exito.</h4><h4><a href="<?php echo "/download-pdf/".$nombrePdfProspecto ?>">Descargar certificado</a></h4></div>
    </div>
</div>
@endsection