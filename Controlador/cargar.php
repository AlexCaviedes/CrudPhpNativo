<?php 

	function cargar(){
		$consultas=new Consultas();
		$filas=$consultas->cargarDatos();

		echo "<table>
				<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Correo</th>
				<th>Teléfono</th>
				</tr>";
		foreach ($filas as $fila) {
			echo "<tr>";
			echo "<td>".$fila['idUsuario']."</td>";
			echo "<td>".$fila['nombre']."</td>";
			echo "<td>".$fila['apellido']."</td>";
			echo "<td>".$fila['correo']."</td>";
			echo "<td>".$fila['telefono']."</td>";
			echo "<td><a href='../Controlador/eliminar.php?idUsuario=".$fila['idUsuario']."'>Eliminar</a></td>";
			echo "<td><a href='../Controlador/modificar.php?idUsuario=".$fila['idUsuario']."'>Modificar</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}

	function buscar($nombre){
		$consultas=new Consultas();
		$filas=$consultas->buscarClientes($nombre);

		if(isset($filas)){
				echo "<table>
				<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Correo</th>
				<th>Teléfono</th>
				</tr>";
		foreach ($filas as $fila) {
			echo "<tr>";
			echo "<td>".$fila['idUsuario']."</td>";
			echo "<td>".$fila['nombre']."</td>";
			echo "<td>".$fila['apellido']."</td>";
			echo "<td>".$fila['correo']."</td>";
			echo "<td>".$fila['telefono']."</td>";
			echo "<td><a href='../Controlador/eliminar.php?idUsuario=".$fila['idUsuario']."'>Eliminar</a></td>";
			echo "<td><a href='../Controlador/modificar.php?idUsuario=".$fila['idUsuario']."'>Modificar</a></td>";
			echo "</tr>";
		}
		echo "</table>";
		}	
	}
 ?>

