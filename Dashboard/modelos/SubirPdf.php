<?php 

 //Incluimos las consultas generales
include_once '../../bd/Conexion.php';
session_start();

if (isset($_POST['subirpdf'])) {

	
	$id=$_POST['idpdf'];
	$nombreRecurso = $_POST['nombreRecurso'];

	$nombrearchivo = $id . ".pdf";
	$tipoarchivo = $_FILES["archivo"]["type"];
	$tamañoarchivo = $_FILES["archivo"]["size"];
	$rutaarchivo = $_FILES["archivo"]["tmp_name"];
	$destino = "../../documentos/recurosProyectos/";

	if ( $tamañoarchivo <= 1000000 ) {
		
		
		if(!file_exists($destino)){
			mkdir($destino);
		}


		$n1=mt_rand(1,9);
		$n2=mt_rand(1,9);
		$n3=mt_rand(1,9);
		$n4=mt_rand(1,9);

			   //Generamos el id con el año y 4 numeros random
		$codigo=$id."".$n1."".$n2."".$n3."".$n4;

		$destino .= $codigo.".pdf";

		if(copy($rutaarchivo, $destino)){

			$sql = "INSERT INTO `recursos_proyectos` (`IDProyectos`, `nombre`, `comprobantes1`, `Tipo`) VALUES (:IDProyectos, :nombre, :comprobantes1, 'doc') ";
			$stmt =  Conexion::conectar()->prepare($sql);
			$stmt->bindParam(':IDProyectos', $id , PDO::PARAM_STR);
			$stmt->bindParam(':nombre', $nombreRecurso , PDO::PARAM_STR);
			$stmt->bindParam(':comprobantes1', $nombrearchivo , PDO::PARAM_STR);
			if ($stmt->execute()) {
				$_SESSION['alertas'] = "Nuevo";
				header("Location: ../DetallesProyecto.php?id=".$id);
			}
			else{
				$_SESSION['alertas'] = "Fallo";
			}

		}else{
			echo "No se pudo guardar el documento";
		}


	}else{

		$_SESSION['alertas'] = "SubidaImg";
		$_SESSION['ms'] = "El archivo sobre pasa de los 1mb.";
		header("Location: ../DetallesProyecto.php?id=".$id);
	}





	
	

}else{
	echo "nO ESTA LLEGANDO";
}




?>