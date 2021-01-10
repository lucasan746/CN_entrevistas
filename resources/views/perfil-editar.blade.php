@extends('master')
@section('content')
<!-- Page content -->
<div id="page-content">
    <div class="content-header">
        <div class="header-section">
				<div class="row">
					<div class="col-md-9">
						<h1><strong>Usuario:</strong> Editar</h1>
					</div>
					<div class="col-md-3 text-right">
						<a href="/perfil-listado" class="btn btn-primary">Volver al Listado</a>
					</div>
				</div>
			</div>
    </div>
    
    <div class="block full" data-jsfiles="['form_perfil.js']">

        <form id="form-validation" action="" method="POST" class="form-horizontal">
            <div class="row">
                <div class="col-md-6">
					<div class="form-group">
                        <label class="col-md-4 control-label" for="dni">DNI</label>
                        <div class="col-md-6">
                            <input type="number" name="inputs[dni]" class="form-control" value="dni" placeholder="" required min="100000" max="99999999">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="nombre">Nombre</label>
                        <div class="col-md-6">
                            <input type="text" name="inputs[nombre]" class="form-control" value="nombre" required placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="apellido">Apellido</label>
                        <div class="col-md-6">
                            <input type="text" name="inputs[apellido]" class="form-control" value="apellido" placeholder="" required>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="col-md-4 control-label" for="usuario">Nombre de Usuario</label>
                        <div class="col-md-6">
                            <input type="number" name="inputs[dni]" class="form-control" value="dni" placeholder="" required min="100000" max="99999999">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="col-md-4 control-label" for="perfil_usuario">Tipo Perfil</label>
                        <div class="col-md-6">
                            <select name="perfil_usuario"  id='perfil_usuario' class="select-single-chosen">
								<option value="Administrador">Administrador</option>
								<option value="Gerencia">Gerencia</option>
								<option value="Operador">Operador</option>
                            </select>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="col-md-4 control-label" for="email">Email</label>
                        <div class="col-md-6">
                            <input type="email" name="inputs[email]" class="form-control" value="email" placeholder="">
                        </div>
                    </div>
					<fieldset>
						<legend><i class="fa fa-angle-right"></i> Cambio de contrase&ntilde;a</legend>
						<div class="form-group">
                        	<label class="col-md-4 control-label" for="email">Contrase&ntilde;a</label>
							<div class="col-md-6">
								<input type="password" id="password-usuario" name="password-usuario" class="form-control" placeholder="Ingresar...">
							</div>
                    	</div>
						<div class="form-group">
                        	<label class="col-md-4 control-label" for="email">Reingresar Contrase&ntilde;a</label>
							<div class="col-md-6">
								<input type="password" id="password-usuario-validacion" name="password-usuario-validacion" class="form-control" placeholder="Ingresar...">
							</div>
                    	</div>
					</fieldset>
					
					<div class="form-group">
                        <label class="col-md-4 control-label" for="fecha_nacimiento">Fecha de nacimiento</label>
                        <div class="col-md-6">
                            <input type="text" name="inputs[fecha_nacimiento]" class="form-control input-datepicker" value="fecha_nacimiento" placeholder="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="telefono">Tel&eacute;fono</label>
                        <div class="col-md-6">
                            <input type="tel" name="inputs[telefono]" class="form-control" value="telefono" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="telefono_alternativo">Tel&eacute;fono alternativo</label>
                        <div class="col-md-6">
                            <input type="tel" name="inputs[telefono_alternativo]" class="form-control" value="telefono_alternativo" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="telefono_movil">Tel&eacute;fono celular</label>
                        <div class="col-md-6">
                            <input type="tel" name="inputs[telefono_movil]" class="form-control" value="telefono_movil" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="domicilio">Domicilio</label>
                        <div class="col-md-6">
                            <input type="text" name="inputs[domicilio]" class="form-control" value="domicilio" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="id_pais">Pa&iacute;s</label>
                        <div class="col-md-6">
                            <select name="inputs[id_pais]" id='id_pais' class="select-single-chosen" data-placeholder='Seleccione...'>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="id_pais">Provincia</label>
                        <div class="col-md-6">
                            <select name="inputs[id_provincia]" id='id_provincia' class="select-single-chosen" data-placeholder='Seleccione...'>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="id_pais">Ciudad</label>
                        <div class="col-md-6">
                            <select name="inputs[id_ciudad]"  id='id_ciudad' class="select-single-chosen" data-placeholder='Seleccione...'>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="origen">Origen</label>
                        <div class="col-md-6">
                            <select name="inputs[origen]" class="select-single-chosen" required>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="estado">Estado</label>
                        <div class="col-md-6">
                            <label class="switch switch-success">
                                <input type="checkbox" name="inputs[activo]" value="1" checked>
								<span></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group form-actions">
                    <div class="col-md-6 col-md-offset-2">
                        <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-times"></i> Cancelar</button>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Guardar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- END Page Content -->
@endsection
