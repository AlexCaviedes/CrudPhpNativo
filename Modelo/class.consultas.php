<?php 

	class Consultas{
		public function insertarDatos($nombre, $apellido, $correo, $telefono){
			 $modelo=new Conexion();
			 $conexion=$modelo->get_conexion();
			 $sql="insert into datospersona(nombre, apellido, correo, telefono) values(:nombre, :apellido, :correo, :telefono)";

			 $estado=$conexion->prepare($sql);
			 $estado->bindParam(':nombre', $nombre);
			 $estado->bindParam(':apellido', $apellido);
			 $estado->bindParam(':correo', $correo);
			 $estado->bindParam(':telefono', $telefono);
			 if(!$estado){
			 	return "Error al crear registro";
			 }else{
			 	$estado->execute();
			 	return "Registro creado exitosamente";
			 }
		}

		public function cargarDatos(){
			$rows =null;
			$modelo=new Conexion();
			$conexion=$modelo->get_conexion();
			$sql="select * from datospersona";
			$estado=$conexion->prepare($sql);
			$estado->execute();
			while ($result=$estado->fetch()) {
				$rows[]=$result;
			}
			return $rows;
		}

		public function eliminarCliente($idCliente){
			$modelo=new Conexion();
			$conexion=$modelo->get_conexion();
			$sql="delete from datospersona where idUsuario= :idUsuario";
			$estado=$conexion->prepare($sql);
			$estado->bindParam(':idUsuario', $idCliente);
			if(!$estado){
				return "Error al eliminar cliente";
			}else{
				$estado->execute();
				echo "</br><a href='../Vista/verClientes.php'>Ver asociados</a>  <div>Cliente eliminado correctamente</div></br>";
			}
		}

		public function buscarClientes($nombreCliente){
			$rows =null;
			$modelo=new Conexion();
			$conexion=$modelo->get_conexion();
			$nombre="%".$nombreCliente."%";
			$sql="select * from datospersona where nombre like :nombre";
			$estado=$conexion->prepare($sql);
			$estado->bindParam(":nombre",$nombre); 
			$estado->execute();
			while ($result=$estado->fetch()) {
				$rows[]=$result;
			}


			if(!$rows){
				echo "No se puedo encontrar el cliente, tal vez no está registrado en nuestra base de datos";
			}else{
				return $rows;
			}
			
		}

	}
 ?>