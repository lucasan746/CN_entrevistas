<?php require_once("_header.php"); ?>

	<!-- Page content -->
	<div id="page-content">
		<!-- Inicio Header // Nueva entrevista -->
		<div class="content-header">
			<div class="header-section">
				<div class="row">
					<div class="col-md-9">
						<h1><strong>Entrevistas:</strong> Nueva</h1>
					</div>
					<div class="col-md-3 text-right">
						<a href="entrevistas-listado.php" class="btn btn-primary">Volver al listado</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Fin Header -->

	
		<!-- Clickable Wizard Block -->
		<div class="block">
			<!-- Inicio: Titulo -->
			<div class="block-title">
				<h2><strong>Nueva</strong> Entrevista</h2>
			</div>
			<!-- Fin: Titulo -->

			<!-- Clickable Wizard Content -->
			<form id="clickable-wizard" action="#" method="post" class="form-horizontal form-bordered">
				<!-- First Step -->
				<div id="clickable-first" class="step">
					<!-- Step Info -->
					<div class="form-group">
						<div class="col-xs-12">
							<ul class="nav nav-pills nav-justified clickable-steps">
								<li class="active"><a href="javascript:void(0)" data-gotostep="clickable-first"><strong>1. Prospecto</strong></a></li>
								<li><a href="javascript:void(0)" data-gotostep="clickable-second"><strong>2. Acompa&ntilde;ante</strong></a></li>
								<li><a href="javascript:void(0)" data-gotostep="clickable-third"><strong>3. Entrevista</strong></a></li>
							</ul>
						</div>
					</div>
					<!-- END Step Info -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="dni_prospecto">Documento</label>
						<div class="col-md-5">
							<input type="text" id="dni_prospecto" name="dni_prospecto" class="form-control" placeholder="Ingresar documento..." required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="nombre_prospecto">Nombre</label>
						<div class="col-md-5">
							<input type="text" id="nombre_prospecto" name="nombre_prospecto" class="form-control" value="Javier" readonly required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="apellido_prospecto">Apellido</label>
						<div class="col-md-5">
							<input type="text" id="apellido_prospecto" name="apellido_prospecto" class="form-control" value="Filippis" readonly required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="nacimiento_prospecto">Fecha de Nacimiento</label>
						<div class="col-md-2">
							<input type="text" id="nacimiento_prospecto" name="nacimiento_prospecto" class="form-control" value="01/01/1980" readonly required>
						</div>
						<label class="col-md-1 control-label" for="edad_prospecto">Edad</label>
						<div class="col-md-2">
							<input type="text" id="edad_prospecto" name="edad_prospecto" class="form-control" value="40 a&ntilde;os" readonly required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="apellido_prospecto">ID Prospecto</label>
						<div class="col-md-5">
							<input type="text" id="apellido_prospecto" name="apellido_prospecto" class="form-control" value="0123456" readonly required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="ecivil_prospecto">Estado Civil</label>
						<div class="col-md-2">
							<select id="ecivil_prospecto" name="ecivil_prospecto" class="select-chosen" data-placeholder="Seleccionar..">
								<option value="casado">Casado</option>         
								<option value="soltero">Soltero</option>
								<option value="otros">Otros</option>
							</select>
						</div>
						<label class="col-md-1 control-label" for="profesion_prospecto">Profesi&oacute;n</label>
						<div class="col-md-2">
							<input type="text" id="profesion_prospecto" name="profesion_prospecto" class="form-control" value="" placeholder="Ingresar...">
						</div>
						
					</div>
					
					<!-- Inicio: Medios de contacto Prospecto -->
					<div class="form-group">
						<div class="col-md-12">
							<h4><i class="fa fa-angle-right"></i> Medios de Contacto</h4>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="celular_prospecto">Celular</label>
						<div class="col-md-2">
							<input type="text" id="celular_prospecto" name="celular_prospecto" class="form-control" value="" placeholder="Ingresar..." required>
						</div>
						<label class="col-md-1 control-label" for="celalternativo_prospecto">Cel. Alt.</label>
						<div class="col-md-2">
							<input type="text" id="celalternativo" name="celalternativo" class="form-control" value="" placeholder="Ingresar...">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="telefono_prospecto">Tel&eacute;fono</label>
						<div class="col-md-2">
							<input type="text" id="telefono_prospecto" name="telefono_prospecto" class="form-control" value="" placeholder="Ingresar..." required>
						</div>
						<label class="col-md-1 control-label" for="telalternativo_prospecto">Tel. Alt.</label>
						<div class="col-md-2">
							<input type="text" id="telalternativo" name="telalternativo" class="form-control" value="" placeholder="Ingresar...">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="email_prospecto">Email</label>
						<div class="col-md-2">
							<input type="text" id="email_prospecto" name="email_prospecto" class="form-control" value="" placeholder="Ingresar..." required>
						</div>
						<label class="col-md-1 control-label" for="mailalternativo_prospecto">Email. Alt.</label>
						<div class="col-md-2">
							<input type="text" id="mailalternativo" name="mailalternativo" class="form-control" value="" placeholder="Ingresar...">
						</div>
					</div>
					<!-- Fin: Medios de Contacto Prospecto -->	
					
					<!-- Inicio: Medios de contacto Prospecto -->
					<div class="form-group">
						<div class="col-md-12">
							<h4><i class="fa fa-angle-right"></i> Domicilio</h4>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="celular_prospecto">Calle / Nº / Piso / Dpto</label>
						<div class="col-md-5">
							<input type="text" id="celular_prospecto" name="celular_prospecto" class="form-control" value="" placeholder="Ingresar..." required>
						</div>
						
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="telefono_prospecto">Localidad</label>
						<div class="col-md-2">
							<input type="text" id="telefono_prospecto" name="telefono_prospecto" class="form-control" value="" placeholder="Ingresar..." required>
						</div>
						<label class="col-md-1 control-label" for="telalternativo_prospecto">Cod. Postal</label>
						<div class="col-md-2">
							<input type="text" id="telalternativo" name="telalternativo" class="form-control" value="" placeholder="Ingresar...">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="email_prospecto">Pa&iacute;s</label>
						<div class="col-md-2">
							<input type="text" id="email_prospecto" name="email_prospecto" class="form-control" value="" placeholder="Ingresar..." required>
						</div>
						<label class="col-md-1 control-label" for="mailalternativo_prospecto">Provincia</label>
						<div class="col-md-2">
							<input type="text" id="mailalternativo" name="mailalternativo" class="form-control" value="" placeholder="Ingresar...">
						</div>
					</div>
					<!-- Fin: Medios de Contacto Prospecto -->		
				</div>
				<!-- END First Step -->

				<!-- Second Step -->
				<div id="clickable-second" class="step">
					<!-- Step Info -->
					<div class="form-group">
						<div class="col-xs-12">
							<ul class="nav nav-pills nav-justified clickable-steps">
								<li><a href="javascript:void(0)" data-gotostep="clickable-first"><i class="fa fa-check"></i> <strong>1. Prospecto</strong></a></li>
								<li class="active"><a href="javascript:void(0)" data-gotostep="clickable-second"><strong>2. Acompa&ntilde;ante</strong></a></li>
								<li><a href="javascript:void(0)" data-gotostep="clickable-third"><strong>3. Entrevista</strong></a></li>
							</ul>
						</div>
					</div>
					<!-- END Step Info -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="dni_prospecto">Documento</label>
						<div class="col-md-5">
							<input type="text" id="dni_prospecto" name="dni_prospecto" class="form-control" placeholder="Ingresar documento..." required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="nombre_prospecto">Nombre</label>
						<div class="col-md-5">
							<input type="text" id="nombre_prospecto" name="nombre_prospecto" class="form-control" value="Javier" readonly required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="apellido_prospecto">Apellido</label>
						<div class="col-md-5">
							<input type="text" id="apellido_prospecto" name="apellido_prospecto" class="form-control" value="Filippis" readonly required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="nacimiento_prospecto">Fecha de Nacimiento</label>
						<div class="col-md-2">
							<input type="text" id="nacimiento_prospecto" name="nacimiento_prospecto" class="form-control" value="01/01/1980" readonly required>
						</div>
						<label class="col-md-1 control-label" for="edad_prospecto">Edad</label>
						<div class="col-md-2">
							<input type="text" id="edad_prospecto" name="edad_prospecto" class="form-control" value="40 a&ntilde;os" readonly required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="apellido_prospecto">ID Prospecto</label>
						<div class="col-md-5">
							<input type="text" id="apellido_prospecto" name="apellido_prospecto" class="form-control" value="0123456" readonly required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="ecivil_prospecto">Estado Civil</label>
						<div class="col-md-2">
							<select id="ecivil_prospecto" name="ecivil_prospecto" class="select-chosen" data-placeholder="Seleccionar..">
								<option value="casado">Casado</option>         
								<option value="soltero">Soltero</option>
								<option value="otros">Otros</option>
							</select>
						</div>
						<label class="col-md-1 control-label" for="profesion_prospecto">Profesi&oacute;n</label>
						<div class="col-md-2">
							<input type="text" id="profesion_prospecto" name="profesion_prospecto" class="form-control" value="" placeholder="Ingresar...">
						</div>
						
					</div>
					
					<!-- Inicio: Medios de contacto Prospecto -->
					<div class="form-group">
						<div class="col-md-12">
							<h4><i class="fa fa-angle-right"></i> Medios de Contacto</h4>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="celular_prospecto">Celular</label>
						<div class="col-md-2">
							<input type="text" id="celular_prospecto" name="celular_prospecto" class="form-control" value="" placeholder="Ingresar..." required>
						</div>
						<label class="col-md-1 control-label" for="celalternativo_prospecto">Cel. Alt.</label>
						<div class="col-md-2">
							<input type="text" id="celalternativo" name="celalternativo" class="form-control" value="" placeholder="Ingresar...">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="telefono_prospecto">Tel&eacute;fono</label>
						<div class="col-md-2">
							<input type="text" id="telefono_prospecto" name="telefono_prospecto" class="form-control" value="" placeholder="Ingresar..." required>
						</div>
						<label class="col-md-1 control-label" for="telalternativo_prospecto">Tel. Alt.</label>
						<div class="col-md-2">
							<input type="text" id="telalternativo" name="telalternativo" class="form-control" value="" placeholder="Ingresar...">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="email_prospecto">Email</label>
						<div class="col-md-2">
							<input type="text" id="email_prospecto" name="email_prospecto" class="form-control" value="" placeholder="Ingresar..." required>
						</div>
						<label class="col-md-1 control-label" for="mailalternativo_prospecto">Email. Alt.</label>
						<div class="col-md-2">
							<input type="text" id="mailalternativo" name="mailalternativo" class="form-control" value="" placeholder="Ingresar...">
						</div>
					</div>
					<!-- Fin: Medios de Contacto Prospecto -->	
					
					<!-- Inicio: Medios de contacto Prospecto -->
					<div class="form-group">
						<div class="col-md-12">
							<h4><i class="fa fa-angle-right"></i> Domicilio</h4>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="celular_prospecto">Calle / Nº / Piso / Dpto</label>
						<div class="col-md-5">
							<input type="text" id="celular_prospecto" name="celular_prospecto" class="form-control" value="" placeholder="Ingresar..." required>
						</div>
						
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="telefono_prospecto">Localidad</label>
						<div class="col-md-2">
							<input type="text" id="telefono_prospecto" name="telefono_prospecto" class="form-control" value="" placeholder="Ingresar..." required>
						</div>
						<label class="col-md-1 control-label" for="telalternativo_prospecto">Cod. Postal</label>
						<div class="col-md-2">
							<input type="text" id="telalternativo" name="telalternativo" class="form-control" value="" placeholder="Ingresar...">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="email_prospecto">Pa&iacute;s</label>
						<div class="col-md-2">
							<input type="text" id="email_prospecto" name="email_prospecto" class="form-control" value="" placeholder="Ingresar..." required>
						</div>
						<label class="col-md-1 control-label" for="mailalternativo_prospecto">Provincia</label>
						<div class="col-md-2">
							<input type="text" id="mailalternativo" name="mailalternativo" class="form-control" value="" placeholder="Ingresar...">
						</div>
					</div>
					<!-- Fin: Medios de Contacto Prospecto -->	
				</div>
				<!-- END Second Step -->

				<!-- Third Step -->
				<div id="clickable-third" class="step">
					<!-- Step Info -->
					<div class="form-group">
						<div class="col-xs-12">
							<ul class="nav nav-pills nav-justified clickable-steps">
								<li><a href="javascript:void(0)" data-gotostep="clickable-first"><i class="fa fa-check"></i> <strong>1. Prospecto</strong></a></li>
								<li><a href="javascript:void(0)" data-gotostep="clickable-second"><i class="fa fa-check"></i> <strong>2. Acompa&ntilde;ante</strong></a></li>
								<li class="active"><a href="javascript:void(0)" data-gotostep="clickable-third"><strong>3. Entrevista</strong></a></li>
							</ul>
						</div>
					</div>
					<!-- END Step Info -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="email_prospecto">Es Cliente?</label>
						<div class="col-md-2">
							<input type="text" id="email_prospecto" name="email_prospecto" class="form-control" value="" placeholder="Ingresar..." required>
						</div>
						<label class="col-md-1 control-label" for="mailalternativo_prospecto">Nº de Cliente</label>
						<div class="col-md-2">
							<input type="text" id="mailalternativo" name="mailalternativo" class="form-control" value="" placeholder="Ingresar...">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="email_prospecto">Referente</label>
						<div class="col-md-2">
							<input type="text" id="email_prospecto" name="email_prospecto" class="form-control" value="" placeholder="Ingresar..." required>
						</div>
						<label class="col-md-1 control-label" for="mailalternativo_prospecto">Procedencia</label>
						<div class="col-md-2">
							<input type="text" id="mailalternativo" name="mailalternativo" class="form-control" value="" placeholder="Ingresar...">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="email_prospecto">OPC</label>
						<div class="col-md-2">
							<input type="text" id="email_prospecto" name="email_prospecto" class="form-control" value="" placeholder="Ingresar..." required>
						</div>
						<label class="col-md-1 control-label" for="mailalternativo_prospecto">Liner</label>
						<div class="col-md-2">
							<input type="text" id="mailalternativo" name="mailalternativo" class="form-control" value="" placeholder="Ingresar...">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="email_prospecto">Fecha</label>
						<div class="col-md-2">
							<input type="text" id="email_prospecto" name="email_prospecto" class="form-control" value="" placeholder="Ingresar..." required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="example-clickable-bio">Comentarios</label>
						<div class="col-md-5">
							<textarea id="example-clickable-bio" name="example-clickable-bio" rows="6" class="form-control" placeholder="Ingresar..."></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-4"></div>
						<div class="col-md-2"></div>
						<div class="col-md-6"><button type="button" class="btn btn-primary">Emitir Certificado y guardar entrevista</button></div>
					</div>
				
				</div>
				<!-- END Third Step -->

				<!-- Form Buttons -->
				<div class="form-group form-actions">
					<div class="col-md-8 col-md-offset-4">
						<button type="reset" class="btn btn-sm btn-warning" id="back4">Anterior</button>
						<button type="submit" class="btn btn-sm btn-primary" id="next4">Siguiente</button>
					</div>
				</div>
				<!-- END Form Buttons -->
			</form>
			<!-- END Clickable Wizard Content -->
		</div>
		<!-- END Clickable Wizard Block -->

		<!-- Terms Modal -->
		<div id="modal-terms" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3 class="modal-title"><i class="gi gi-pen"></i> Service Terms</h3>
					</div>
					<div class="modal-body">
						<h4 class="sub-header">1.1 | General</h4>
						<p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<h4 class="sub-header">1.2 | Account</h4>
						<p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<h4 class="sub-header">1.3 | Service</h4>
						<p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<h4 class="sub-header">1.4 | Payments</h4>
						<p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Ok, I've read them!</button>
					</div>
				</div>
			</div>
		</div>
		<!-- END Terms Modal -->
	</div>
	<!-- END Page Content -->

<!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
<div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header text-center">
				<h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
			</div>
			<!-- END Modal Header -->

			<!-- Modal Body -->
			<div class="modal-body">
				<form action="index.html" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
					<fieldset>
						<legend>Vital Info</legend>
						<div class="form-group">
							<label class="col-md-4 control-label">Username</label>
							<div class="col-md-8">
								<p class="form-control-static">Admin</p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label" for="user-settings-email">Email</label>
							<div class="col-md-8">
								<input type="email" id="user-settings-email" name="user-settings-email" class="form-control" value="admin@example.com">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label" for="user-settings-notifications">Email Notifications</label>
							<div class="col-md-8">
								<label class="switch switch-primary">
									<input type="checkbox" id="user-settings-notifications" name="user-settings-notifications" value="1" checked>
									<span></span>
								</label>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Password Update</legend>
						<div class="form-group">
							<label class="col-md-4 control-label" for="user-settings-password">New Password</label>
							<div class="col-md-8">
								<input type="password" id="user-settings-password" name="user-settings-password" class="form-control" placeholder="Please choose a complex one..">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label" for="user-settings-repassword">Confirm New Password</label>
							<div class="col-md-8">
								<input type="password" id="user-settings-repassword" name="user-settings-repassword" class="form-control" placeholder="..and confirm it!">
							</div>
						</div>
					</fieldset>
					<div class="form-group form-actions">
						<div class="col-xs-12 text-right">
							<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
						</div>
					</div>
				</form>
			</div>
			<!-- END Modal Body -->
		</div>
	</div>
</div>
<!-- END User Settings -->

<?php include ('_footer.php'); ?>
