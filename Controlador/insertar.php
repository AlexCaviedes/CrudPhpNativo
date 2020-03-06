<?php 
	
	require_once ('../Modelo/class.conexion.php');
	require_once ('../Modelo/class.consultas.php');

	$mensaje=null;

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];

	if(strlen($nombre) > 0 && strlen($apellido) > 0 && strlen($telefono) > 0 && strlen($correo) > 0){
		$consultas = new Consultas();
		$mensaje = $consultas->insertarDatos($nombre, $apellido, $telefono, $correo);
		echo "</br><a href='../Vista/insertar.html'>Nuevo cliente</a></br>";
		echo "</br><a href='../Vista/verClientes.php'>Clientes afiliados</a></br>";
	}else{
		echo "Por favor llene los campos";
		echo "</br><a href='../Vista/insertar.html'>Nuevo cliente</a></br>";
	}
	echo $mensaje;
 ?>