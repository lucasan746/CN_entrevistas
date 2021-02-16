<!doctype html>
    <head>
        <meta charset="utf-8">
        <title>Certificado Promocional | Club Inn</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<div id="page-content">
			<div class="block">
			<!-- Invoice Content -->
			<!-- 2 Column grid -->
			<div class="row block-section">
				<!-- Company Info -->
				<div class="col-sm-12">
					<img src="img/certificado-header-ejemplo.jpg" alt="photo" class="img-responsive">
				</div>
				<!-- END Company Info -->

			</div>
			<!-- END 2 Column grid -->

			<!-- Table -->
			<div class="table-responsive">
				<table class="table table-vcenter">
					<tbody>
						<tr>
							<td>Nombre</td>
							<td>
								<input type="text" name="nombre_prospecto" id="nombre_prospecto" class="form-control" readonly value="{{$entrevista->nombre}}">
							</td>
							<td>Apellido</td>
							<td>
								<input type="text" name="apellido_prospecto" id="apellido_prospecto" class="form-control" readonly value="{{$entrevista->apellido}}">
							</td>
							<td>DNI</td>
							<td>
								<input type="text" name="dni_prospecto" id="dni_prospecto" class="form-control" readonly value="{{$entrevista->dni}}">
							</td>
						</tr>
						<tr>
							<td>Es socio?</td>
							<td>
								<input type="text" name="es_cliente_prospecto" id="es_cliente_prospecto" class="form-control" readonly value="{{$entrevista->es_cliente}}">
							</td>
							<td>N Socio</td>
							<td>
								<input type="text" name="nro_cliente_prospecto" id="nro_cliente_prospecto" class="form-control" readonly value="<?php if($entrevista->nro_cliente != 0){ echo $entrevista->nro_cliente; } ?>">
							</td>
							<td>N Voucher</td>
							<td>
								<input type="text" name="nro_enrevista_prospecto" id="nro_entrevista_prospecto" class="form-control" readonly value="{{$entrevista->id}}">
							</td>
						</tr>
						<tr>
							<td>Domicilio</td>
							<td>
								<input type="text" name="direccion_prospecto" id="direccion_prospecto" class="form-control" readonly value="{{$entrevista->direccion}}">
							</td>
							<td>Provincia</td>
							<td>
								<input type="text" name="provincia_prospecto" id="provincia_prospecto" class="form-control" readonly value="{{$entrevista->provincia}}">
							</td>
							<td>Pais</td>
							<td>
								<input type="text" name="pais_prospecto" id="pais_prospecto" class="form-control" readonly value="{{$entrevista->pais}}">
							</td>
						</tr>
						<tr>
							<td>Celular</td>
							<td>
								<input type="text" name="celular_prospecto" id="celular_prospecto" class="form-control" readonly value="{{$entrevista->celular}}">
							</td>
							<td>Telefono</td>
							<td>
								<input type="text" name="telefono_prospecto" id="telefono_prospecto" class="form-control" readonly value="{{$entrevista->telefono}}">
							</td>
							<td>Email</td>
							<td>
								<input type="text" name="email_prospecto" id="email_prospecto" class="form-control" readonly value="{{$entrevista->email}}">
							</td>
						</tr>
						<tr>
							<td>Fecha de entrega</td>
							<td>
								<input type="text" name="fecha_entrevista_prospecto" id="fecha_entrevista_prospecto" class="form-control" readonly value="{{$entrevista->created_at}}">
							</td>
							<td>Suc. de entrega</td>
							<td>
								<input type="text" name="gerencia" id="gerencia" class="form-control" readonly>
							</td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- END Table -->

			<div class="row">
				<div class="col-md-12">
				<p class="alert alert-warning">Para reservar su estad&iacute;a envie un e-mail a cortesias@clubinn.net, indicando fecha de viaje. Ver bases y condiciones a continuaci&oacute;n</p>

				<div class="saltopagina clearfix"></div>

				<h3><strong>Certificado Promocional</strong></h3>
				<fieldset>
					<div class="form-group">
						<div class="col-md-12">
							<div>
								<ol>
									<li>El certificado es personal e instansferible para ser utilizado por el titular &uacute;nicamente. Las estad&iacute;as est&aacute;n todas sujetas a disponibilidad y la tenencia del presente certificado no garantiza la fecha solicitada hasta no ser confirmada por la central de reservas, mediante emisi&oacute;n del voucher correspondiente.</li>
									<li>Promoci&oacute;n limitada a un voucher por grupo familiar. De uso promocional y por &uacute;nica vez. Esta promoci&oacute;n no es acumulable con otras promociones ni con esta misma.</li>
									<li>El mismo cubre una estad&iacute;a de hasta 3 noches en alguno de los destinos establecidos en el anverso del presente y seg&uacute;n las restricciones establecidas por cada uno.</li>
									<li>Las estad&iacute;as solo podr&aacute;n utilizarse entre los d&iacute;as lunes y jueves en los siguientes per&iacute;odos:<br><strong>Hostal del Sol: entre el 9 de Marzo y el 3 de Diciembre de 2020, y del 15 de Marzo al 2 de Diciembre de 2021.</strong><br> <strong>Las mismas excluyen los per&iacute;odos que cubren fines de semana, fines de semana largos, semana santa, vacaciones de invierno, feriados, v&iacute;speras de feriado y temporadas altas.</strong></li>
									<li>El certificado cubre exclusivamente la estad&iacute;a para un m&aacute;ximo de hasta 4 personas en una unidad a designar a exclusivo criterio del Hotel de acuerdo a la disponibilidad en la fecha elegida.</li>
									<li>No incluye desayuno, servicios de gastronom&iacute;a, servicios de spa, cochera, ni otros servicios arancelados del complejo, lo que, de ser consimidos, debera&aacute;n ser abonados por el pasajero al momento de retirarse.</li>
									<li>Las estad&iacute;as deber&aacute;n ser solicitadas con al menos 30 d&iacute;s de anticipaci&oacute;n y con no m&aacute;s de 120 d&iacute;as a los tel&eacute;fonos o e-mail detallados en el anverso del presente. Su confirmaci&oacute;n estar&aacute; sujeta a la disponibilidad del hotel en la fecha elegida. Este certificado le ser&aacute; retenido al momento de hacer la reserva.</li>
									<li>El presente certificado no habilita a solicitar el reintegro de ninguna especie, aun si por cualquier motivo el huesped no pudiera concretar su estad&iacute;a.</li>
									<li>Al ingresar al hotel, el hu&eacute;sped deber&aacute; presentar el voucher emitido por la central de reservas, el cual le ser&aacute;enviado por e-mail.</li>
									<li>No ser&aacute; admitida mayor cantidad de pasajeros que la establecida en el voucher de ingreso. No se admiten mascotas.</li>
									<li>Una vez realizada la reserva y fijada la fecha, el periodo de la estad&iacute;a es inamovible, por lo cual, en caso que el pasajero desee cambiar la fecha de la misma, deber&aacute; hacerlo con al menos 21 d&iacute;as de anticipaci&oacute;n y abonar $1999 en concepto de canon por cambio de reserva. Con poesterioridad a dicho plazo las reservas no tendran posibilidad de cambio ni reembolso.</li>
									<li>La tenencia del presente voucher significa que usted acepta los términos y condiciones del mismo.</li>
								</ol>
							</div>
						</div>
					</div>
				</fieldset>
					</div>
			</div>

			<div class="clearfix">
				<div class="btn-group pull-right">
					<a href="javascript:void(0)" class="btn btn-default" onclick="App.pagePrint();"><i class="fa fa-print"></i> Imprimir</a>
				</div>
			</div>
			<!-- END Invoice Content -->
		</div>
		</div>
		
		<!-- Bootstrap.js, Jquery plugins and Custom JS code -->
		<script src="js/vendor/jquery.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>
	</body>
</html>