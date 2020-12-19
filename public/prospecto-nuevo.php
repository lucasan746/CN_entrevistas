<?php require_once("_header.php"); ?>
<!-- Page content -->
<div id="page-content">
    <div class="content-header">
        <div class="header-section">
            <div class="row">
				<div class="col-md-9">
					<h1><strong>Prospectos:</strong> Nuevo</h1>
				</div>
				<div class="col-md-3 text-right">
					<a href="prospecto-listado.php" class="btn btn-primary">Ir al listado</a>
				</div>
			</div>
        </div>
    </div>
    <div class="block full" data-jsfiles="['form_prospecto.js']">
		<p class="alert alert-danger"> <i class="fa fa-exclamation-circle"></i> Por favor, complete los campos obligatorios para poder guardar y vuelva a intentarlo.</p>
		
		<p class="alert alert-success"> <i class="fa fa-exclamation-circle"></i> Los cambios se han guardado con exito! <a class="btn btn-sm btn-success" href="prospecto-listado.php">Volver al Listado</a></p>
		
        <form id="form-validation" action="/cliente/guardar" method="POST" class="form-horizontal">
            <input type="hidden" value="id_prospecto" name="id_prospecto" />
            <div class="row">
                <div class="col-md-6">
					<div class="form-group">
                        <label class="col-md-4 control-label" for="dni">DNI</label>
                        <div class="col-md-6">
                            <input type="number" name="inputs[dni]" class="form-control" value="10123456" placeholder="" required disabled >
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="nombre">Nombre</label>
                        <div class="col-md-6">
                            <input type="text" name="inputs[nombre]" class="form-control" value="nombre" required disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="apellido">Apellido</label>
                        <div class="col-md-6">
                            <input type="text" name="inputs[apellido]" class="form-control" value="apellido" required disabled>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="col-md-4 control-label" for="fecha_nacimiento">Fecha de nacimiento</label>
                        <div class="col-md-6">
                            <input type="text" name="inputs[fecha_nacimiento]" class="form-control" value="01/01/1980" required disabled>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Email</label>
                        <div class="col-md-6">
                            <input type="email" name="inputs[email]" class="form-control" value="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email_alternativo">Email alternativo</label>
                        <div class="col-md-6">
                            <input type="email" name="inputs[email_alternativo]" class="form-control" placeholder="Ingresar...">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-4 control-label" for="telefono_movil">Tel&eacute;fono celular</label>
                        <div class="col-md-6">
                            <input type="tel" name="inputs[telefono_movil]" class="form-control" value="telefono_movil" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="telefono">Tel&eacute;fono</label>
                        <div class="col-md-6">
                            <input type="tel" name="inputs[telefono]" class="form-control" value="01148259943" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="telefono_alternativo">Tel&eacute;fono alternativo</label>
                        <div class="col-md-6">
                            <input type="tel" name="inputs[telefono_alternativo]" class="form-control" placeholder="Ingresar...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="domicilio">Domicilio</label>
                        <div class="col-md-6">
                            <input type="text" name="inputs[domicilio]" class="form-control" value="domicilio" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="id_pais">Pa&iacute;s</label>
                        <div class="col-md-6">
                            <select name="inputs[id_pais]" id='id_pais' class="select-single-chosen" data-placeholder='Seleccione...' required>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="id_pais">Provincia</label>
                        <div class="col-md-6">
                            <select name="inputs[id_provincia]" id='id_provincia' class="select-single-chosen" data-placeholder='Seleccione...' required>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="id_pais">Ciudad</label>
                        <div class="col-md-6">
                            <select name="inputs[id_ciudad]"  id='id_ciudad' class="select-single-chosen" data-placeholder='Seleccione...' required>
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
<?php include ('_footer.php'); ?>
