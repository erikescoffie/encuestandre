<?php 

include ("../conectar.php");

$nombrePers=$_POST['nombrePers'];
$departamento=$_POST['departamento'];
$empresa=$_POST['empresa'];
$jefeDirecto=$_POST['jefeDirecto'];
$gerencia=$_POST['gerencia'];
$antiguedad=$_POST['antiguedad'];
$pUno=$_POST['pUno'];
$pDos=$_POST['pDos'];
$pTres=$_POST['pTres'];
$pCuatro=$_POST['pCuatro'];
$pCinco=$_POST['pCinco'];
$pSeis=$_POST['pSeis'];
$pSiete=$_POST['pSiete'];
$pOcho=$_POST['pOcho'];
$pNueve=$_POST['pNueve'];
$pDiez=$_POST['pDiez'];
$pOnce=$_POST['pOnce'];
$pDoce=$_POST['pDoce'];

$consulta="INSERT INTO `encuestasalidares`(`nombrePers`, `departamento`, `empresa`, `jefeDirecto`, `gerencia`, `antiguedad`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `pDiez`, `pOnce`, `pDoce`, `date`) VALUES ('$nombrePers','$departamento', '$empresa', '$jefeDirecto','$gerencia','$antiguedad','$pUno','$pDos','$pTres','$pCuatro','$pCinco','$pSeis','$pSiete','$pOcho','$pNueve','$pDiez','$pOnce','$pDoce',TIME(NOW()))";
                          
$resultado = $conexion -> query($consulta) || die ("Ha occurrido un error al guardar los datos");

if($resultado)
  {
    header('Location: ../encuestafin.html');
}
?>