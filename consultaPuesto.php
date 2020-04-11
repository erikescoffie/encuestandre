<?php 
	function nombrePuesto(){
		include '../conectar.php';
		$sql = "SELECT `IdPuestos`, `DescripcionPuesto` FROM `puestos` ORDER BY 'DescripcionPuesto'";
		mysqli_set_charset($conexion, "utf8");
			$result = $conexion->query($sql);
			$nomPuest = '<option value="0" disabled="true" selected="true">Seleccione su puesto</option>';
			while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
			 	$nomPuest .= "<option value='$row[IdPuestos]'>$row[DescripcionPuesto]</option>";
			}
				return $nomPuest;
			}
		echo nombrePuesto();
?>