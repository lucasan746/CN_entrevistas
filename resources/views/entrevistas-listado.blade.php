@extends('layouts.master')
@section('content')
	<!-- Page content -->
	<div id="page-content">
		<!-- Inicio Header // Boton a nueva entrevista -->
		<div class="content-header">
			<div class="header-section">
				<div class="row">
					<div class="col-md-9">
						<h1><strong>Entrevistas:</strong> Listado</h1>
					</div>
					<div class="col-md-3 text-right">
						<a href="/entrevista-nueva" class="btn btn-primary">Nueva Entrevista</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Fin Header -->
		
		<!-- Inicio: Buscador Avanzado -->
		<div class="block">
			<div class="block-title">
				<!-- Interactive block controls (initialized in js/app.js -> interactiveBlocks()) -->
				<div class="block-options pull-right">
					<a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-content"><i class="fa fa-arrows-v"></i></a>
				</div>
				<h2><strong>Buscador</strong> Avanzado</h2>
			</div>
			<!-- Block Content -->
			<div class="block-content">
				<p>Personalice su b&uacute;squeda filtrando por los parametros a continuaci&oacute;n:</p>

				<form action="page_forms_general.html" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
					<div class="form-group">
						<div class="col-md-1 text-right">
							<label class="control-label" for="dni_cliente">DNI:</label>
						</div>

						<div class="col-md-2">
							<input type="hidden" name="dni_prospecto" id="dni_prospecto" value="" class="form-control" />
							<input type="text" name="dni_prospecto" id="dni_prospecto" class="form-control" value="" autocomplete="off" />
						<button style="position:absolute; top:6px; right:22px;" type="button" id="btn_limpiar_dni" class="btn btn-xs btn-default"><i class="fa fa-times"></i></button>
						</div>

						<div class="col-md-1 text-right">
							<label class="control-label" for="Prospecto">Prospecto:</label>
						</div>
						<div class="col-md-2">
							<input type="hidden" name="prospecto" id="prospecto" value="" class="form-control" />
							<input type="text" name="prospecto" id="prospecto" class="form-control" value="" autocomplete="off" />
						<button style="position:absolute; top:6px; right:22px;" type="button" id="btn_limpiar_lead" class="btn btn-xs btn-default"><i class="fa fa-times"></i></button>
						</div>

						<div class="col-md-1 text-right">
							<label class="control-label" for="Prospecto">Fecha:</label>
						</div>


						<div class="col-md-4">
							<div class="input-group input-daterange" data-date-format="mm/dd/yyyy">
								<input type="text" id="fecha_desde" name="fecha_desde" class="form-control text-center" placeholder="Desde">
								<span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
								<input type="text" id="fecha_hasta" name="fecha_hasta" class="form-control text-center" placeholder="Hasta">
							</div>
						</div>
					</div>

					<div class="form-group">									
						<div class="col-md-1 text-right">
							<label class="control-label" for="select-ejecutivo">Ejecutivo:</label>
						</div>
						<div class="col-md-2">
							<select id="select-ejecutivo" name="select-ejecutivo" class="select-chosen" data-placeholder="Seleccionar..">
								<option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->         
								<option value="Javier Filippis">Javier Filippis</option>
								<option value="Todos">Todos</option>
							</select>
						</div>

						<div class="col-md-1 text-right">
							<label class="control-label" for="select-gerencia">Gerencia:</label>
						</div>
						<div class="col-md-2">
							<select id="select-gerencia" name="select-gerencia" class="select-chosen" data-placeholder="Seleccionar..">
								<option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->         
								<option value="central">Central</option>
								<option value="Hostal del Sol">Hostal del Sol</option>
								<option value="Hosteria del Cerro">Hoster&iacute;a del Cerro</option>
								<option value="Todos">Todos</option>
							</select>
						</div>

						<div class="col-md-1 text-right">
							<label class="control-label" for="select_estado">Estado:</label>
						</div>
						<div class="col-md-2">
							<select id="select_estado" name="select_estado" class="select-chosen" data-placeholder="Seleccionar..">
								<option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->         
								<option value="Borrador">Borrador</option>
								<option value="Certificado Enviado">Certificado Enviado</option>
								<option value="Certificado Vencido">Certificado Vencido</option>
								<option value="Certificado Utilizado">Certificado Utilizado</option>
								<option value="Eliminada">Eliminada</option>
								<option value="Todos">Todos</option>
							</select>
						</div>





					</div>

					<div class="form-group form-actions">
						<div class="col-md-12">
							<button type="submit" name="buscar" value="1" class="btn btn-sm btn-primary">Buscar</button>
							<button type="submit" name="exportar" value="1" class="btn btn-sm btn-warning">Exportar CSV</button>
						</div>
					</div>
				</form>
			</div>
			<!-- END Block Content -->
		</div>
		<!-- Fin: Buscador Avanzado -->
		
		<!-- Inicio: Mensaje Destacado -->
		<div class="block full info-alerta">
			<div class="row">
				<div class="col-md-12"><h4><i class="fa fa-info-circle fa-fw"></i> Record&aacute; que en caso que el prospecto no haya recibido el certificado podes reenviarlo o descargarlo para enviarselo por otro medio.</h4></div>
			</div>
    	</div>
		<!-- Fin: Mensaje Destacado -->
		
		<!-- Inicio: Tabla -->
		<div class="block full">
			<!-- Sumar condicional con siguiente mensaje en caso de no haber registros -->
            <p class="alert alert-danger"> <i class="fa fa-exclamation-circle"></i> No existen registros en base a los filtros definidos. Por favor, realice una nueva busqueda o limpie los parametros cargados previamente.</p>
			
			<div class="table-responsive">
				<table id="listado-entrevistas" class="table table-vcenter table-condensed table-bordered table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>FECHA</th>
							<th>PROSPECTO</th>
							<th>DNI</th>
							<th>EJECUTIVO</th>
							<th>GERENCIA</th>
							<th>ESTADO</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>0123456</td>
							<td>01/01/2021</td>
							<td><a data-toggle="tooltip" data-original-title="Editar Prospecto" href="perfil-editar.php">Javier Filippis</a></td>
							<td>11222333</td>
							<td>Juan Lopez</td>
							<td>San Bernardo</td>
							<td>
								<button type="button" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="Modificar Estado"><span data-toggle="modal" data-target="#editarEstado">Cert. Enviado</span>
								</button>
							</td>
							<td class="text-center">
								<div class="btn-group">
									<a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-sm btn-default" data-original-title="Enviar Certificado"><span data-toggle="modal" data-target="#enviarCertificado"><i class="fa fa-sticky-note"></i></span></a>
									<a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-sm btn-default" data-original-title="Descargar Certificado"><i class="fa fa-download"></i></a>
								</div>
							</td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
		<!-- Fin: Tabla -->
	</div>
	<!-- END Page Content -->

<!-- Modal Cambio de Estado -->
<div class="modal fade" id="editarEstado" tabindex="-1" role="dialog" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="estado_entrevista">Cambiar Estado de Entrevista</h4>
			</div>
			<div class="modal-body">
				<p class="alert alert-success"> <i class="fa fa-exclamation-circle"></i> El cambio de Estado se ha realizado con Exito!</p>
				<form action="#" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
					<div class="form-group">
						<label class="col-md-3 control-label" for="nombre_gerencia">Estado:</label>
						<div class="col-md-9">
							<select id="select_estado" name="select_estado" class="select-chosen">
								        
								<option disabled value="Borrador">Borrador</option>
								<option value="Certificado Enviado">Certificado Enviado</option>
								<option value="Certificado Vencido">Certificado Vencido</option>
								<option value="Certificado Utilizado">Certificado Utilizado</option>
								<option value="Eliminada">Eliminada</option>
							</select>
						</div>
					</div>
					<div class="form-group form-actions">
						<div class="col-md-9 col-md-offset-3">
							<button type="button" data-dismiss="modal" class="btn btn-sm btn-warning">Cerrar / Cancelar</button>
							<button type="submit" class="btn btn-sm btn-primary">Guardar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal Envio de Certificado -->
<div class="modal fade" id="enviarCertificado" tabindex="-1" role="dialog" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="estado_entrevista">Enviar Certificado</h4>
			</div>
			<div class="modal-body">
				<p class="alert alert-success"> <i class="fa fa-exclamation-circle"></i> El certificado se envio con exito!</p>
				<form action="#" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
					<div class="form-group">
						<label class="col-md-3 control-label" for="nombre_gerencia">Enviar a:</label>
						<div class="col-md-9">
							<select id="select_estado" name="select_estado" class="select-chosen" data-placeholder="Seleccionar..">
								<option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->         
								<option value="vjfilippis@gmail.com">vjfilippis@gmail.com</option>
								<option value="vjfilippis@gmail.com">vjfilippis@hotmail.com</option>
							</select>
						</div>
					</div>
					<div class="form-group form-actions">
						<div class="col-md-9 col-md-offset-3">
							<button type="button" data-dismiss="modal" class="btn btn-sm btn-warning">Cancelar</button>
							<button type="submit" class="btn btn-sm btn-primary">Enviar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
