<?php 
	require_once ('../Modelo/class.conexion.php');
	require_once ('../Modelo/class.consultas.php');
	require_once('../Controlador/cargar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Nuestros Clientes</h1>
	<div>
		<form method="get">
			<input type="text" name="buscar">
			<input type="submit" value="Buscar cliente">
		</form>
	</div>
	<?php

		if(isset($_GET['buscar'])){
			buscar($_GET['buscar']);
		}else{
			cargar(); 
		}
	 ?>
	 <a href="insertar.html">Crear nuevo cliente</a>
</body>
</html>
