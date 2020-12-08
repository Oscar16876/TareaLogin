<?php 

	class crud{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT into usuarios (ConceptoGasto,CantidadGasto,Fecha)
									values ('$datos[0]',
											'$datos[1]',
											'$datos[2]')";
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatos($idjuego){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT id,
							ConceptoGasto,
							CantidadGasto,
							Fecha,
					from usuarios 
					where id='$id'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id' => $ver[0],
				'ConceptoGasto' => $ver[1],
				'CantidadGasto' => $ver[2],
				'Fecha' => $ver[3]
				);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE usuarios set ConceptoGasto='$datos[0]',
										CantidadGasto='$datos[1]',
										Fecha='$datos[2]'
						where id='$datos[3]'";
			return mysqli_query($conexion,$sql);
		}
		public function eliminar($idjuego){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from usuarios where id='$id'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>