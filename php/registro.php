<?php 

	require_once "conexion.php";
	$conexion=conexion();

		$CantidadGasto=$_POST['CantidadGasto'];
		$ConceptoGasto=$_POST['ConceptoGasto'];
		$Fecha=$_POST['Fecha']
		$usuario=$_POST['usuario'];
		$password=sha1($_POST['password']);

		if(buscaRepetido($usuario,$password,$conexion)==1){
			echo 2;
		}else{
			$sql="INSERT into usuarios (CantidadGasto,ConceptoGasto,Fecha,usuario,password)
				values ('$CantidadGasto','$ConceptoGasto','Fecha','$usuario','$password')";
			echo $result=mysqli_query($conexion,$sql);
		}


		function buscaRepetido($user,$pass,$conexion){
			$sql="SELECT * from usuarios 
				where usuario='$user' and password='$pass'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}

 ?>