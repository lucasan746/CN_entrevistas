@extends('layouts.master')
@section('content')
<!-- Page content -->
<div id="page-content" data-jsfiles="['listado_cliente.js']">
    <div class="content-header">
        <div class="header-section">
            <div class="row">
				<div class="col-md-9">
					<h1><strong>Prospectos:</strong> Listado</h1>
				</div>
				<div class="col-md-3 text-right">
					<a href="/prospecto-nuevo" class="btn btn-primary">Nuevo Prospecto</a>
				</div>
			</div>
        </div>
    </div>

	
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
							<label class="control-label" for="select_estado">Estado:</label>
						</div>
						<div class="col-md-2">
							<select id="select_estado" name="select_estado" class="select-chosen" data-placeholder="Seleccionar..">
								<option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->         
								<option value="activo">Activo</option>
								<option value="Eliminado">Eliminado</option>
								<option value="Todos">Todos</option>
							</select>
						</div>
					</div>


					<div class="form-group form-actions">
						<div class="col-md-12">
							<button type="submit" name="buscar" value="1" class="btn btn-sm btn-primary">Buscar</button>
						</div>
					</div>
				</form>
			</div>
			<!-- END Block Content -->
		</div>
	<!-- Fin: Buscador Avanzado -->

    <div class="block full">
       <!-- Sumar condicional con siguiente mensaje en caso de no haber registros -->
            <p class="alert alert-danger"> <i class="fa fa-exclamation-circle"></i> No existen registros en base a los filtros definidos. Por favor, realice una nueva busqueda o limpie los parametros cargados previamente.</p>
 
            <div class="table-responsive">
                <table id="general-table" class="table table-vcenter table-condensed table-hover dataTable no-footer">
                    <thead>
                        <tr>
                            <th>#</th>
							<th class="sorting">DNI</th>
							<th>NOMBRE Y APELLIDO</th>
							<th class="text-center">&Uacute;LTIMA ENTREVISTA</th>
							<th class="text-center">CANT. ENTREVISTAS</th>
                            <th class="text-center">ESTADO</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
						<tr class='js-contenedor-registro' data-id_registro='' id='contenedor_registro_'>
							<td>0123456</td>
							<td>10123456</td>
							<td>Juan Perez</td>
							<td class="text-center">01/01/2021</td>
							<td class="text-center"><span class="label label-success">1</span></td>
							<td class="text-center">
								<label class="switch switch-success">
									<input type="checkbox" class='js-toggle-activo' id='chkbox_activo_id_prospecto'checked>
									<span></span>
								</label>
							</td>
							<td class="text-right">
								<div class="btn-group">
									<a href="prospecto-editar.php" data-toggle="tooltip" title="editar" class="btn btn-xs btn-default"><i class="fa fa-cog"></i></a>
								</div>
							</td>
						</tr>
						<tr class='js-contenedor-registro' data-id_registro='' id='contenedor_registro_'>
							<td>0123456</td>
							<td>10123456</td>
							<td>Miguel Fernandez</td>
							<td class="text-center">01/01/2021</td>
							<td class="text-center"><span class="label label-danger">0</span></td>
							<td class="text-center">
								<label class="switch switch-success">
									<input type="checkbox" class='js-toggle-activo' id='chkbox_activo_id_prospecto'checked>
									<span></span>
								</label>
							</td>
							<td class="text-right">
								<div class="btn-group">
									<a href="prospecto-editar.php" data-toggle="tooltip" title="editar" class="btn btn-xs btn-default"><i class="fa fa-cog"></i></a>
								</div>
							</td>
						</tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="8">
                                <div class="btn-group btn-group-sm pull-right">
                                    <nav>
                                        <ul class="pagination">
                                            <li class="disabled"><a href="javascript:void(0)"><i class="fa fa-chevron-left"></i></a></li>
											<li class="active"><a href="javascript:void(0)">1</a></li>
											<li><a href="javascript:void(0)">2</a></li>
											<li><a href="javascript:void(0)">3</a></li>
											<li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
    </div>
</div>

@endsection