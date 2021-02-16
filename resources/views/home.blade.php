
@extends('layouts.master')

@section('content')

<div id="page-content">
    <!-- Dashboard Header -->
    <!-- For an image header add the class 'content-header-media' and an image as in the following example -->
    <div class="content-header content-header-media">
        <div class="header-section">
            <div class="row">
                <!-- Main Title (hidden on small devices for the statistics to fit) -->
                <div class="col-md-4 col-lg-6 hidden-xs hidden-sm">
                    <h1>Bienvenido <strong>{{Auth::user()->name}}</</strong><br></h1>
                </div>
                <!-- END Main Title -->
            </div>
        </div>
        <!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
        <img src="img/placeholders/headers/login_header.jpg" alt="header image" class="animation-pulseSlow">
    </div>
    <!-- END Dashboard Header -->

    <!-- INICIO: ACCESOS RAPIDOS -->
    <div class="row">
        <div class="col-sm-6 col-lg-3"> 
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="entrevista-nueva" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                        <i class="fa fa-commenting"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        <strong>Nueva Entrevista</strong><br>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="entrevistas-listado" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                        <i class="fa fa-comments-o"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        <strong>Historico de Entrevistas</strong>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6 col-lg-3">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-lg-3"> 
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="#" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                        <i class="fa fa-thumbs-o-up"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        <strong>Ventas Realizadas</strong>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="#" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                        <i class="fa fa-print"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        <strong>Imprimir contrato y reglamento</strong>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6 col-lg-3">
        </div>
    </div>
    <!-- FIN: ACCESOS RAPIDOS -->
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
