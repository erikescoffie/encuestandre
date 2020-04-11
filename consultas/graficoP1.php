<?php 


  include 'conectar.php';
  $anio = 2020;
  $mes = 1;
  // echo '<pre>'; print_r($_POST); echo '</pre>';
  $anio = $_POST['anio'];
  $mes = $_POST['mes'];

  $sumTA = 0;
  $sumA = 0;
  $sumD = 0;
  $sumTD = 0;

  for($i=1; $i <= 9; $i++) {    
    $resulta = $conexion->query("SELECT COUNT(p".$i.") FROM `encuestasalidares` WHERE p".$i." = 'TA' AND YEAR(date) = ".$anio." AND MONTH(date) = ".$mes."");
    $row = $resulta->fetch_row();
    // printf("La pregunta #" .$i. " total de TA es %s.\n", $row[0]);
    // echo "<br>";
    $sumTA +=(int)$row[0];
    $resulta->close();
  }

  for($i=1; $i <= 9; $i++) {    
    $resulta = $conexion->query("SELECT COUNT(p".$i.") FROM `encuestasalidares` WHERE p".$i." = 'A' AND YEAR(date) = ".$anio." AND MONTH(date) = ".$mes."");
    $row = $resulta->fetch_row();
    // printf("La pregunta #" .$i. " total de A es %s.\n", $row[0]);
    // echo "<br>";
    $sumA +=(int)$row[0];
    $resulta->close();
  }

  for($i=1; $i <= 9; $i++) {    
    $resulta = $conexion->query("SELECT COUNT(p".$i.") FROM `encuestasalidares` WHERE p".$i." = 'D' AND YEAR(date) = ".$anio." AND MONTH(date) = ".$mes."");
    $row = $resulta->fetch_row();
    // printf("La pregunta #" .$i. " total de A es %s.\n", $row[0]);
    // echo "<br>";
    $sumD +=(int)$row[0];
    $resulta->close();
  }

  for($i=1; $i <= 9; $i++) {    
    $resulta = $conexion->query("SELECT COUNT(p".$i.") FROM `encuestasalidares` WHERE p".$i." = 'TD' AND YEAR(date) = ".$anio." AND MONTH(date) = ".$mes."");
    $row = $resulta->fetch_row();
    // printf("La pregunta #" .$i. " total de TD es %s.\n", $row[0]);
    // echo "<br>";
    $sumTD +=(int)$row[0];
    $resulta->close();
  }

  
    $sumpDs = 0;
    include 'conectar.php';
    $resulta = $conexion->query("SELECT COUNT(`pDiez`) FROM `encuestasalidares` WHERE pDiez = 'SI' AND YEAR(date) = ".$anio." AND MONTH(date) = ".$mes."");
    $rowS = $resulta->fetch_row();
    // echo $rowS[0];
    // echo "<br>";
    $sumpDs +=(int)$rowS[0];
    $resulta->close();
  

    $sumpDn = 0;
    include 'conectar.php';
    $resulta = $conexion->query("SELECT COUNT(`pDiez`) FROM `encuestasalidares` WHERE pDiez = 'NO' AND YEAR(date) = ".$anio." AND MONTH(date) = ".$mes."");
    $rowN = $resulta->fetch_row();
    // echo $rowN[0];
    // echo "<br>";
    $sumpDn +=(int)$rowN[0];
    $resulta->close();

    $nueva = $sumpDs + $sumpDn;
    
    $p10s = ($sumpDs / $nueva) * 100;
    $p10n = ($sumpDn / $nueva) * 100;

    $sumpOs = 0;
    include 'conectar.php';
    $resulta = $conexion->query("SELECT COUNT(`pOnce`) FROM `encuestasalidares` WHERE pOnce = 'SI' AND YEAR(date) = ".$anio." AND MONTH(date) = ".$mes."");
    $rowDiezS = $resulta->fetch_row();
    //echo $rowDiezS[0];
    //echo "<br>";
    $sumpOs +=(int)$rowDiezS[0];
    $resulta->close();
  

    $sumpOn = 0;
    include 'conectar.php';
    $resulta = $conexion->query("SELECT COUNT(`pOnce`) FROM `encuestasalidares` WHERE pOnce = 'NO' AND YEAR(date) = ".$anio." AND MONTH(date) = ".$mes."");
    $rowDiezN = $resulta->fetch_row();
    //echo $rowDiezN[0];
    //echo "<br>";
    $sumpOn +=(int)$rowDiezN[0];
    $resulta->close();

    $nuevaO = $sumpOs + $sumpOn;

    $p11s = ($sumpOs / $nueva) * 100;
    $p11n = ($sumpOn / $nueva) * 100;
    
    //echo $p10s. "<br>";
    //echo $p10n. "<br>";
    //echo $p11s. "<br>";
    //echo $p11n. "<br>";  
  //echo "Para TA "; echo $sumTA; echo "<br>";
  //echo "Para A "; echo $sumA; echo "<br>";
  //echo "Para D "; echo $sumD; echo "<br>";
  //echo "Para TD "; echo $sumTD; echo "<br>";

  $suma = $sumTA + $sumA + $sumD + $sumTD;
  //echo "Total "; echo $suma; echo "<br>";

  $promTA = ($sumTA / $suma) * 100;
  $promA = ($sumA / $suma) * 100;
  $promD = ($sumD / $suma) * 100;
  $promTD = ($sumTD / $suma) * 100;

  //echo $promTA; echo "<br>";
  //echo $promA; echo "<br>";
  //echo $promD; echo "<br>";
  //echo $promTD; echo "<br>";


    
    $resultaT = $conexion->query("SELECT COUNT(`idEncuesta`) FROM `encuestasalidares`");
    $rowT = $resultaT->fetch_row();
    //echo $rowT[0];
    //echo "<br>";
    $resultaT->close();

    // Hacer el indicador 
    $indicador = ((($sumTA)*(1))+(($sumA)*(.75))+(($sumD)*(.5))+(($sumTD)*(.25))+(($rowS[0] + $rowDiezS[0])*(1))+(($rowN[0] + $rowDiezN[0])*(.5)));

    //$indicador = ((($rowN[0] + $rowDiezN[0])));
    $resIndicador = ($indicador / $rowT[0]);
    //echo $indicador;
    //echo round($resIndicador,2);
    

      $sql = "SELECT COUNT(`pDoce`) AS 'pDoce' FROM `encuestasalidares` WHERE pDoce = 'Mejor sueldo y prestaciones' AND YEAR(date) = ".$anio." AND MONTH(date) = ".$mes."";
      $resultado = mysqli_query($conexion, $sql);
      $pDoc = $resultado->fetch_array(MYSQLI_NUM);
      
      $sql2 = "SELECT COUNT(`pDoce`) AS 'pDoce' FROM `encuestasalidares` WHERE pDoce = 'Horario de trabajo' AND YEAR(date) = ".$anio." AND MONTH(date) = ".$mes."";
      $resultado2 = mysqli_query($conexion, $sql2);
      $pDoc2 = $resultado2->fetch_array(MYSQLI_NUM); 

      $sql3 = "SELECT COUNT(`pDoce`) AS 'pDoce' FROM `encuestasalidares` WHERE pDoce = 'Ambiente laboral con compañeros' AND YEAR(date) = ".$anio." AND MONTH(date) = ".$mes."";
      $resultado3 = mysqli_query($conexion, $sql3);
      $pDoc3 = $resultado3->fetch_array(MYSQLI_NUM); 

      $sql4 = "SELECT COUNT(`pDoce`) AS 'pDoce' FROM `encuestasalidares` WHERE pDoce = 'Desacuerdo con Jefe' AND YEAR(date) = ".$anio." AND MONTH(date) = ".$mes."";
      $resultado4 = mysqli_query($conexion, $sql4);
      $pDoc4 = $resultado4->fetch_array(MYSQLI_NUM); 

      $sql5 = "SELECT COUNT(`pDoce`) AS 'pDoce' FROM `encuestasalidares` WHERE pDoce = 'Jubilación' AND YEAR(date) = ".$anio." AND MONTH(date) = ".$mes."";
      $resultado5 = mysqli_query($conexion, $sql5);
      $pDoc5 = $resultado5->fetch_array(MYSQLI_NUM); 

      $sql6 = "SELECT COUNT(`pDoce`) AS 'pDoce' FROM `encuestasalidares` WHERE pDoce = 'Falta de ascenso' AND YEAR(date) = ".$anio." AND MONTH(date) = ".$mes."";
      $resultado6 = mysqli_query($conexion, $sql6);
      $pDoc6 = $resultado6->fetch_array(MYSQLI_NUM); 

      $sql7 = "SELECT COUNT(`pDoce`) AS 'pDoce' FROM `encuestasalidares` WHERE pDoce = 'Continuar estudios' AND YEAR(date) = ".$anio." AND MONTH(date) = ".$mes."";
      $resultado7 = mysqli_query($conexion, $sql7);
      $pDoc7 = $resultado7->fetch_array(MYSQLI_NUM); 

      $sql8 = "SELECT COUNT(`pDoce`) AS 'pDoce' FROM `encuestasalidares` WHERE pDoce = 'Terminación de contrato' AND YEAR(date) = ".$anio." AND MONTH(date) = ".$mes."";
      $resultado8 = mysqli_query($conexion, $sql8);
      $pDoc8 = $resultado8->fetch_array(MYSQLI_NUM); 

      $sql9 = "SELECT COUNT(`pDoce`) AS 'pDoce' FROM `encuestasalidares` WHERE pDoce = 'Razones familiares y/o salud' AND YEAR(date) = ".$anio." AND MONTH(date) = ".$mes."";
      $resultado9 = mysqli_query($conexion, $sql9);
      $pDoc9 = $resultado9->fetch_array(MYSQLI_NUM); 

      $sql10 = "SELECT COUNT(`pDoce`) AS 'pDoce' FROM `encuestasalidares` WHERE pDoce = 'Otro' AND YEAR(date) = ".$anio." AND MONTH(date) = ".$mes."";
      $resultado10 = mysqli_query($conexion, $sql10);
      $pDoc10 = $resultado10->fetch_array(MYSQLI_NUM); 

      $totalpD = 0;
      $totalpD = $pDoc[0] + $pDoc2[0] + $pDoc3[0] + $pDoc4[0] + $pDoc5[0] + $pDoc6[0] + $pDoc7[0] + $pDoc8[0] + $pDoc9[0] + $pDoc10[0];
      //echo $totalpD;

      $prom1 = ($pDoc[0] / $totalpD) * 100;
      $prom2 = ($pDoc2[0] / $totalpD) * 100;
      $prom3 = ($pDoc3[0] / $totalpD) * 100;
      $prom4 = ($pDoc4[0] / $totalpD) * 100;
      $prom5 = ($pDoc5[0] / $totalpD) * 100;
      $prom6 = ($pDoc6[0] / $totalpD) * 100;
      $prom7 = ($pDoc7[0] / $totalpD) * 100;
      $prom8 = ($pDoc8[0] / $totalpD) * 100;
      $prom9 = ($pDoc9[0] / $totalpD) * 100;
      $prom10 = ($pDoc10[0] / $totalpD) * 100;
    ?>