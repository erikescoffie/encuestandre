<!DOCTYPE html>
<html>
<head>
    <title>Resulltados</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>

    
    <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="js/bootstrap.js">
</head>
<style type="text/css">

  #contenedor {
    display: flex;
    justify-content: center;
  }

 .chart-containe {
    display: flex;
    justify-content: center;
    width: 100%;
  }

 .chart-containe article{
    width: 33%;
    border: 1px #021D49 dotted;
    margin: 5px;
  }

  .img-fluid {
    max-width:300px;
    max-height: 100px;
  } 

  .d-flex {
    padding: 10px;
  }

  .pregunta {
    padding: 10px;
    height: 50px;
  } 

  .estilo {
    background-color: #021D49;
    color: white;
  }

  .imagen {
    padding: 20px;
    margin-right: 20px;
  }

  #completo {
    margin: 5px;
    border: 1px #021D49 dotted;
  }
  
  @media print {
    #completo {
      margin-top: 180px;
      border: 1px #021D49 dotted;
    }

  @media only screen and (max-width: 720px) {
      .chart-containe {
        flex-direction: column;
        width: 95%;
      }

      .chart-containe article{
        width: 100%;
      }
    }
  }

</style>

<body>

<div class="d-flex justify-content-between align-items-center estilo">
  <h1 class="align-middle">Resultados de las encuestas de salida realizadas</h1 class="pregunta align-middle">
  <img src="images/logoproser.jpg" class="rounded float-right img-fluid imagen">
</div>

<div>
  <form id="fechas" accept-charset="utf-8">
      <select name="anio" id="anio">
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
      </select>

      <select name="mes" id="mes">
        <option value="1">Enero</option>
        <option value="2">Febrero</option>
        <option value="3">Marzo</option>
        <option value="4">Abril</option>
        <option value="5">Mayo</option>
        <option value="6">Junio</option>
        <option value="7">Julio</option>
        <option value="8">Agosto</option>
        <option value="9">Septiembre</option>
        <option value="10">Octubre</option>
        <option value="11">Noviembre</option>
        <option value="12">Diciembre</option>
      </select>

      <button type="submit" id="consultar">Enviar</button>
    </form>
</div>


  
<div id="contenedor">
  <div class="chart-containe">

    <div id="tableDatatable">
      <?php include 'prueba.html'; ?>  
    </div> 

  <?php 
    
    include 'consultas/graficoGerencia.php';
    include 'consultas/graficoDepas.php';
    include 'consultas/graficoP1.php';
    // include 'consultas/graficoP12.php';
  ?>

  <div class="chart-container">
    <article>
      <h2 class="pregunta align-middle">Resultado indicador: <b> <?php echo round($resIndicador,2); ?> </b> </h2>
    </article>
  </div>


  

    
<!-- GERENCIA -->
<!-- <script>
var ctx = document.getElementById("viewGerencia").getContext('2d');
var viewGerencia = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ["Finanzas", "Proyectos", "Soporte Estrategico", "Concretos", "Obra Edificación", "Obra Vias Terrestres", "Obra Construcción Hotelera"],
        datasets: [{
            data: [
              <?php echo $row ['0']; ?>, 
              <?php echo $row2 ['0']; ?>,
              <?php echo $row3 ['0']; ?>,
              <?php echo $row4 ['0']; ?>,
              <?php echo $row5 ['0']; ?>,
              <?php echo $row6 ['0']; ?>,
              <?php echo $row7 ['0']; ?>],
            backgroundColor: [
              '#021D49',
              '#0868ac',
              '#2b8cbe',
              '#4eb3d3',
              '#7bccc4',
              '#a8ddb5',
              '#ccebc5'
            ]
        }]
    }
});
</script>
 DEPARTAMENTO 
<script>
var ctx = document.getElementById("viewDepa").getContext('2d');
var viewDepa = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ["RRHH", "FINANZAS", "COMPRAS", "TI"],
        datasets: [{
            data: [
              <?php echo $fila ['0']; ?>, 
              <?php echo $fila2 ['0']; ?>,
              <?php echo $fila3 ['0']; ?>,
              <?php echo $fila4 ['0']; ?>],
            backgroundColor: [
                '#021D49',
                '#0868ac',
                '#2b8cbe',
                '#4eb3d3'
            ]
        }]
  } 
});
</script>
 PREGUNTA 1 -->

<script>
var ctx = document.getElementById("viewP1").getContext('2d');
var viewP1 = new Chart(ctx, {
    type: 'bar',
     data: {
        labels: ["TA", "A", "D", "TD"],
        datasets: [{
            label: 'Porcentaje seleccionado',
            data: [
 

              <?php echo round($promTA,2);?>,
              <?php echo round($promA,2);?>,
              <?php echo round($promD,2);?>,
              <?php echo round($promTD,2); ?>],
            backgroundColor: [
              '#021D49',
              '#A7A8A9',
              '#021D49',
              '#A7A8A9'
            ],
            borderColor: [
              '#021D49',
              '#A7A8A9',
              '#021D49',
              '#A7A8A9'
            ],
            borderWidth: 1
        }]
      },

      options: {

        legend: {
          display: false,
        },

        scales: {
          xAxes: [{
            barThickness: 70
        }],
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
});

var options = {
  responsive: true,
  showTooltips: false,
  onAnimationComplete: function() {

    var ctx = this.chart.ctx;
    ctx.font = this.scale.font;
    ctx.fillStyle = this.scale.textColor
    ctx.textAlign = "center";
    ctx.textBaseline = "bottom";

    this.datasets.forEach(function(dataset) {
      dataset.bars.forEach(function(bar) {
        ctx.fillText(bar.value, bar.x, bar.y - 5);
      });
    })
  }
};
</script>

<script>
var ctx = document.getElementById("viewP10").getContext('2d');
var viewP10 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["SI", "NO"],
        datasets: [{
            label: 'Veces seleccionada',
            data: [
              <?php echo round($p10s,2); ?>, 
              <?php echo round($p10n,2); ?>],
            backgroundColor: [
              '#021D49',
              '#A7A8A9'
            ],
            borderColor: [
              '#021D49',
              '#A7A8A9'
            ],
            borderWidth: 1
        }]
      },

      options: {
        legend: {
          display: false,
        },

        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
});
</script>

<script>
var ctx = document.getElementById("viewP11").getContext('2d');
var viewP11 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["SI", "NO"],
        datasets: [{
           // label: 'Veces seleccionada',
            data: [
              <?php echo round($p11s,2); ?>, 
              <?php echo round($p11n,2); ?>],
            backgroundColor: [
              '#021D49',
              '#A7A8A9'
            ],
            borderColor: [
              '#021D49',
              '#A7A8A9'
            ],
            borderWidth: 1
        }]
      },

      options: {
        legend: {
          display: false,
        },

        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
});
</script>

<script>
var ctx = document.getElementById("viewP").getContext('2d');
var viewP = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: [
          "Mejor sueldo y prestaciones",
          "Horario de trabajo",
          "Ambiente laboral con compañeros",
          "Desacuerdo con Jefe",
          "Jubilación",
          "Falta de ascenso",
          "Continuar estudios",
          "Terminación de contrato",
          "Razones familiares y/o salud",
          "Otro"],
        datasets: [{
            label: 'Veces seleccionada',
            data: [
              <?php echo $prom1; ?>, 
              <?php echo $prom2; ?>, 
              <?php echo $prom3; ?>, 
              <?php echo $prom4; ?>, 
              <?php echo $prom5; ?>, 
              <?php echo $prom6; ?>, 
              <?php echo $prom7; ?>, 
              <?php echo $prom8; ?>, 
              <?php echo $prom9; ?>, 
              <?php echo $prom10; ?>],

            backgroundColor: [
              '#021D49',
              '#f7fcf0',
              '#e0f3db',
              '#ccebc5',
              '#a8ddb5',
              '#7bccc4',
              '#4eb3d3',
              '#2b8cbe',
              '#0868ac',
              '#A7A8A9'
            ]
        }]
      },

      options: {
        legend: {
          display: false,
        },

        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
});
</script>

<script>
  function beforePrintHandler () {
  for (var id in Chart.instances) {
    Chart.instances[id].resize()
  }
}
</script>

<script>

    $(document).on(click,'#consultar',function() {
            // datos = $('#fechas').serialize();

            var anio = $('#anio').val();
            var mes = $('#mes').val();

            $.ajax({
                type:"POST",
                url: 'consultas/graficoP1.php',
                data: {'anio':anio, 'mes':mes},
                success:function (data){
                console.log(data);
            }

            .fail:function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
          }
        });
        });
</script>
</body>
</html>