<?php 

	require_once ('../Modelo/class.conexion.php');
	require_once ('../Modelo/class.consultas.php');

	if(isset($_GET['idUsuario'])){

		$idUsuario=$_GET['idUsuario'];
		$consultas= new Consultas();
		$resultado=$consultas->eliminarCliente($idUsuario);
		echo $resultado;
	}
	

 ?>