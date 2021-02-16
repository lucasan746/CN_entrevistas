@extends('layouts.master')
@section('content')
<!-- Page content -->
<div id="page-content" data-jsfiles="['listado_tipo_alojamiento.js']">
    <div class="content-header">
        <div class="header-section">
			<div class="row">
				<div class="col-md-9">
					<h1><strong>Gerencia:</strong> Listado</h1>
				</div>
				<div class="col-md-3 text-right">
					<a href="#" data-toggle="modal" data-target="#nuevaGerencia" class="btn btn-primary">Nueva Gerencia</a>
				</div>
			</div>
        </div>
    </div>

    <div class="block full">
		<div class="table-responsive">
			<table id="general-table" class="table table-striped table-vcenter table-hover">
				<thead>
					<tr>
						<th>GERENCIA</th>
						<th>ESTADO</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($gerencias as $gerencia)					
					<tr class='js-contenedor-registro' data-id_registro='id_gerencia' id='id_gerencia'>
						<td class='js-nombre-registro'>{{$gerencia->gerencia}}</td>
						<td>
							<label class="switch switch-success">
								<input type="checkbox" data-id="{{$gerencia->id}}" class='js-toggle-activo' <?php if($gerencia->estado == true){ echo "checked";} ?>>
								<span></span>
							</label>
						</td>
						<td class="text-right">
							<div class="btn-group">
								<a href="#" data-gerencia="{{$gerencia->gerencia}}" data-id="{{$gerencia->id}}" data-toggle="modal" data-target="#editarGerencia" title="editar" class="btn btn-xs btn-default"><i class="fa fa-cog"></i></a>
								<a href="<?php echo "eliminar-gerencia/".$gerencia->id; ?>" data-toggle="tooltip" title="eliminar" class="btn btn-xs btn-danger js-eliminar-registro"><i class="fa fa-times"></i></a>
							</div>
						</td>
					</tr>
					@endforeach
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
	
<!-- Modal Nueva Gerencia -->
<div class="modal fade" id="nuevaGerencia" tabindex="-1" role="dialog" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Nueva Gerencia</h4>
			</div>
			<div class="modal-body">
					<form action="{{route("nueva-gerencia")}}" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
						@csrf
						<div class="form-group">
							<label class="col-md-3 control-label" for="nombre_gerencia">Nombre Gerencia:</label>
							<div class="col-md-9">
								<input type="text" id="nombre_gerencia" name="nombre_gerencia" class="form-control" placeholder="ingrese un nombre..." required>
							</div>
						</div>
						<div class="form-group form-actions">
							<div class="col-md-9 col-md-offset-3">
								<button type="button" data-dismiss="modal" class="btn btn-sm btn-warning">Cancelar</button>
								<button type="submit" class="btn btn-sm btn-primary">Guardar</button>
							</div>
						</div>
					</form>
				</div>
		</div>
	</div>
</div>

<!-- Modal Editar Gerencia -->
<div class="modal fade" id="editarGerencia" tabindex="-1" role="dialog" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Edici&oacute;n de Gerencia</h4>
			</div>
			<div class="modal-body">
					<form action="{{route("edit-gerencia")}}" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
						@csrf
						<div class="form-group">
							<label class="col-md-3 control-label" for="nombre_gerencia">Nombre Gerencia:</label>
							<div class="col-md-9">
								<input type="text" id="nombre_gerencia_edit" name="nombre_gerencia" class="form-control" placeholder="" value="Sede Central" required>
								<input type="hidden" id="id_gerencia_edit" name="id_gerencia">
							</div>
						</div>
						<div class="form-group form-actions">
							<div class="col-md-9 col-md-offset-3">
								<button type="button" data-dismiss="modal" class="btn btn-sm btn-warning">Cancelar</button>
								<button type="submit" class="btn btn-sm btn-primary">Guardar</button>
							</div>
						</div>
					</form>
				</div>
		</div>
	</div>
</div>

@endsection