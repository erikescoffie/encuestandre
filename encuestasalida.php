<!DOCTYPE html>
<html lang="es">
<head>
	<title>Encuesta</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="js/bootstrap.js">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						PROSER
					</span>
				</div>
				

				<div class="instrucciones">
					<h6>Selecciona la respuesta que consideres mas adecuada a su punto de vista.</h6>
				</div>
				
				<form action="insert/insertDatos.php" method="POST" accept-charset="utf-8">
				<div class="cuerpo"> 
					
					<input style="display: none;" type="text" name="nombrePers" value="<?php echo $_POST['nombrePers'] ?>">
					<input style="display: none;" type="text" name="departamento" value="<?php echo $_POST['departamento'] ?>">
					<input style="display: none;" type="text" name="jefeDirecto" value="<?php echo $_POST['jefeDirecto'] ?>">
					<input style="display: none;" type="text" name="empresa" value="<?php echo $_POST['empresa'] ?>">
					<input style="display: none;" type="text" name="gerencia" value="<?php echo $_POST['gerencia'] ?>">
					<input style="display: none;" type="text" name="antiguedad" value="<?php echo $_POST['antiguedad'] ?>">

					<div>
						<span>1. ¿Recibí inducción corporativa al ser contratado?</span><br><br>
					</div>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pUno" value="TA"> Totalmente de acuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pUno" value="A"> De acuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pUno" value="D"> Desacuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pUno" value="TD"> Totalmente en desacuerdo
					</label> <br><br>

					<div>
						<span>2. ¿Me enseñaron inicialmente las funciones y tareas que tenía que realizar?</span><br><br>
					</div>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pDos" value="TA"> Totalmente de acuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pDos" value="A"> De acuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pDos" value="D"> Desacuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pDos" value="TD"> Totalmente en desacuerdo
					</label> <br><br>

					<div>
						<span>3. ¿Recibí la capacitación y el adiestramiento adecuado para realizar mis tareas en mi puesto de trabajo?</span><br><br>
					</div>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pTres" value="TA"> Totalmente de acuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pTres" value="A"> De acuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pTres" value="D"> Desacuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pTres" value="TD"> Totalmente en desacuerdo
					</label> <br><br>

					<div>
						<span>4. ¿Se me asigno una persona a la que me pudiera dirigir en caso de dudas con respecto a mis actividades?</span><br><br>
					</div>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pCuatro" value="TA"> Totalmente de acuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pCuatro" value="A"> De acuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pCuatro" value="D"> Desacuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pCuatro" value="TD"> Totalmente en desacuerdo
					</label> <br><br>

					<div>
						<span>5. ¿Me sentí a gusto con mis compañeros de trabajo?</span><br><br>
					</div>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pCinco" value="TA"> Totalmente de acuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pCinco" value="A"> De acuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pCinco" value="D"> Desacuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pCinco" value="TD"> Totalmente en desacuerdo
					</label> <br><br>

					<div>
						<span>6. ¿El trabajo que desempeñé me permitió aprender y superarme?</span><br><br>
					</div>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pSeis" value="TA"> Totalmente de acuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pSeis" value="A"> De acuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pSeis" value="D"> Desacuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pSeis" value="TD"> Totalmente en desacuerdo
					</label> <br><br>

					<div>
						<span>7. ¿Considera que la relación con su jefe fue buena?</span><br><br>
					</div>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pSiete" value="TA"> Totalmente de acuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pSiete" value="A"> De acuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pSiete" value="D"> Desacuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pSiete" value="TD"> Totalmente en desacuerdo
					</label> <br><br>

					<div>
						<span>8. ¿Su jefe directo lo orientaba, motivaba y reconocía su esfuerzo?</span><br><br>
					</div>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pOcho" value="TA"> Totalmente de acuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pOcho" value="A"> De acuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pOcho" value="D"> Desacuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pOcho" value="TD"> Totalmente en desacuerdo
					</label> <br><br>

					<div>
						<span>9. ¿El salario y las prestaciones que recibia eran de acuerdo al puesto que desempeñaba?</span><br><br>
					</div>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pNueve" value="TA"> Totalmente de acuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pNueve" value="A"> De acuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pNueve" value="D"> Desacuerdo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pNueve" value="TD"> Totalmente en desacuerdo
					</label> <br><br>

					<div>
						<span>10. ¿Recomendaría a Grupo Próser como un lugar bueno para trabajar?</span><br><br>
					</div>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pDiez" value="SI"> Si
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pDiez" value="NO"> No
					</label> <br><br>

					<div>
						<span>11. ¿Volvería a laborar con Grupo Proser?</span><br><br>
					</div>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pOnce" value="SI"> Si
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pOnce" value="NO"> No
					</label><br><br>

					<div>
						<span>12. La razón principal por la que se está terminando la relación de trabajo es:</span><br><br>
					</div>
					
					<label class="btn btn-secondary">
					    <input type="radio" required name="pDoce" value="Mejor sueldo y prestaciones"> Mejor sueldo y prestaciones
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pDoce" value="Horario de trabajo"> Horario de trabajo
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pDoce" value="Ambiente laboral con compañeros"> Ambiente laboral con compañeros
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pDoce" value="Desacuerdo con Jefe"> Desacuerdo con Jefe
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pDoce" value="Jubilación"> Jubilación
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pDoce" value="Falta de ascenso"> Falta de ascenso
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pDoce" value="Continuar estudios"> Continuar estudios
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pDoce" value="Terminación de contrato"> Terminación de contrato
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pDoce" value="Razones familiares y/o salud"> Razones familiares y/o salud
					</label>

					<label class="btn btn-secondary">
					    <input type="radio" required name="pDoce" value="Otro"> Otro
					</label>

					<!-- <div>
						<span>13. Comentario:</span><br><br>
					</div>

				   <textarea id="" border='1px' rows="10" name="pTrece"></textarea> <br><br> -->
						<br><br><br><br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Siguiente
						</button>
					</div>
				</form>
				</div><br><br>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>