<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="description"            content="Registro de Oportunidades DCN">
        <meta name="keywords"               content="Registro de Oportunidades DCN">
        <meta name="robots"                 content="Index,Follow">
        <meta name="date"                   content="Febrero 15, 2018"/>
        <meta name="language"               content="es">
        <meta name="theme-color"            content="#000000">
	<title>HPE Simplivity - Intel</title>
	<link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/logo_favicon.ico">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>metric.css?v=<?php echo time();?>">
	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
</head>
<body>
	<div class="header">
		<div class="header-container">
			<div class="header-container--left">
				<img src="<?php echo RUTA_IMG?>logo/hpe-intel.png">
			</div>
			<div class="header-container--right">
				<p>Si tiene Intel&reg;, tiene una productividad poderosa</p>
			</div>
		</div>
	</div>
	<section id="home">
		<div class="js-fondo"></div>
		<div class="js-container">
			<div class="js-home js-flex">
				<div class="js-contenido">
					<h2>HPE Simplivity: Entrenamiento Técnico para Partners</h2>
					<p>Taller ofrecido por HPE con el patrocinio de Intel®</p>
				</div>
			</div>
		</div>
	</section>
	<section id="register" class="js-section">
		<div class="js-container row">
			<form>
				<div class="row">
					<div class="col-sm-6 col-md-4 js-option">
						<div class="js-input js-select col">
							<select class="selectpicker error" id="selCiudad" name="celCiudad" onchange="cambiarLugar()" aria-invalid="true">
								<option >--Seleccione ciudad--</option>
			  					<option value="CDMX">CDMX, 13 de Setiembre 2018</option>
			  					<option value="Mérida">Mérida, 5 de Setiembre 2018</option>
			  					<option value="Guadalajara">Guadalajara, 15 de Agosto 2018</option>
			  					<option value="Monterrey">Monterrey, 22 de Agosto 2018</option>
		 						<option value="León">León, 29 de Agosto 2018</option>
							</select>	
							<label id="selCiudad-error" class="error" for="selCiudad" style="display:none;"></label>	
						</div>
					</div>
				</div>
				<div id ="evento" class="row contenidoEvento">
					<div id="cardEvento" class="mdlCard">
						<h2 id="lug"><a id="ulug" href=""></a></h2>
						<p id="dir"></p>
						<a href="#" data-toggle="modal" data-target="#modalMap">Ver mapa</a>
					</div>
					<h2 class="title-agenda">Agenda</h2>
					<div class="tableResponsive">
						<table class="table">
							<tbody>
								<tr>
									<td style="color: #ff8300 " >8:30 - 9:00</td>
									<td>Registro</td>
								</tr>
								<tr>
									<td style="color: #ff8300">9:00 - 9:15</td>
									<td><strong>Bienvenida</strong></td>
								</tr>
								<tr>
									<td style="color: #ff8300">9:15 - 9:45</td>
									<td><strong>Path de Certificación (Catálogo de cursos y track de Certificación)</strong></td>
								</tr>
								<tr>
									<td style="color: #ff8300">9:45 - 10:15</td>
									<td><strong>Maqueta Switching y Movilidad</strong></td>
								</tr>
								<tr>
									<td style="color: #ff8300">10:15 - 10:30</td>
									<td>Break</td>
								</tr>
								<tr>
									<td style="color: #ff8300">10:30 - 10:45</td>
									<td><strong>Plática Comercial (Portafolio de Soluciones y Oportunidad Comercial)</strong></td>
								</tr>
								<tr>
									<td style="color: #ff8300">10:45 - 11:00</td>
									<td><strong>Demo Aruba Central como NOC<strong></td>
								</tr>
								<tr>
									<td style="color: #ff8300">11:00 - 11:15</td>
									<td><strong>Práctica de Registro Aruba/HPE en vivo</strong></td>
								</tr>
								<tr>
									<td style="color: #ff8300">11:15 - 11:30</td>
									<td>Comida</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="js-title">
					<h2>Regístrese completando el siguiente formulario</h2>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="js-input">
							<label for="text">Nombre*</label>
							<input type="text" class="form-control" placeholder="" aria-describedby="sizing-addon1">
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="js-input">
							<label for="text">Apellido*</label>
							<input type="text" class="form-control" placeholder="" aria-describedby="sizing-addon1">
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="js-input">
							<label for="text">Email*</label>
							<input type="text" class="form-control" placeholder="" aria-describedby="sizing-addon1">
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="js-input">
							<label for="text">Telefono*</label>
							<input type="text" class="form-control" placeholder="" aria-describedby="sizing-addon1">
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="js-input">
							<label for="text">Nombre de Canal*</label>
							<input type="text" class="form-control" placeholder="" aria-describedby="sizing-addon1">
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="js-input">
							<label for="text">Cargo*</label>
							<input type="text" class="form-control" placeholder="" aria-describedby="sizing-addon1">
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="js-input">
							<label for="text">Pais*</label>
							<input type="text" class="form-control" placeholder="" aria-describedby="sizing-addon1">
						</div>
					</div>
				</div>
				<div class="js-section--button text-left">
					<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button">Enviar</button>
				</div>
				</div>
			</form>
		</div>
	</section>
	<footer class="js-section">
		<div class="js-container text-center">
			<p>Intel y el logotipo de Intel son marcas comerciales de la Corporación Intel o sus filiales en los Estados Unidos o en otros países</p>
			<p>©2018 Copyright Hewlett Packard Enterprise Development LP</p>
		</div>
	</footer>

<!-- /.modal -->	 
<div class="modal fade" id="modalMap" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="google-maps">
      	<iframe id="map" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
	
	
</body>
	<script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jsindex.js?v=<?php echo time();?>"></script>
</html>