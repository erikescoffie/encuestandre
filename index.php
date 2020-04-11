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
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
          <span class="login100-form-title-1">
            ENCUESTA
          </span>
        </div>

        <form class="login100-form validate-form" action="encuestasalida.php" method="POST">
          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Nombre</span>
            <input class="input100" type="text" name="nombrePers" placeholder="Escribe tu nombre">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18">
            <span class="label-input100">Jefe directo</span>
            <input class="input100" type="text" name="jefeDirecto" placeholder="Escribe el nombre de tu jefe directo">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input10 validate-input m-b-18">
            <span class="label-input10">Empresa</span>
            <div class="form-group">
            <select class="form-control" id="empresa" name="empresa"></select>
          </div>
          </div>

          <div class="wrap-input10 validate-input m-b-18">
            <span class="label-input10">Gerencia</span>
            <div class="form-group">
            <select class="form-control" id="gerencia" name="gerencia"></select>
          </div>
          </div>

          <!-- <div class="wrap-input10 validate-input m-b-18">
            <span class="label-input10">Departamento</span>
            <div class="form-group">
            <select class="form-control" id="departamento" name="departamento"></select>
          </div>
          </div> -->

          <div class="wrap-input10 validate-input m-b-18">
            <span class="label-input10">Puesto</span>
            <div class="form-group">
            <select class="form-control" id="puestos"></select>
          </div>
          </div>

          <div class="validate-input m-b-18">
            <span class="label-input100">Antigüedad</span>
            <label class="btn btn-secondary">
                <input type="radio" required name="antiguedad" value="0 a 1 mes"> 0 a 1 mes
            </label>
            <label class="btn btn-secondary">
                <input type="radio" required name="antiguedad" value="1 a 3 meses"> 1 a 3 meses
            </label>
            <label class="btn btn-secondary">
                <input type="radio" required name="antiguedad" value="4 a 12 meses"> 4 a 12 meses
            </label>
            <label class="btn btn-secondary">
                <input type="radio" required name="antiguedad" value="1 a 2 años"> 1 a 2 años
            </label>
            <label class="btn btn-secondary">
                <input type="radio" required name="antiguedad" value="Más de 2 años"> Más de 2 años
            </label> <br><br>
          </div> 

          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Siguiente
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
<!--===============================================================================================-->
  
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
  <script src="js/funciones.js"></script>
  <link href="js/bootstrap.js">
</body>
</html>