<?php 

 //Incluimos la conexion con la bases de datos 
include_once '../bd/Conexion.php';
$conexion = new Conexion();
if (isset($_POST['btn_validar'])) {

    //Abrimos Sesiones para los mensajes a mostrar
	session_start();

	$email = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
	$password = (isset($_POST['password'])) ? $_POST['password'] : '';

	try {


		 $sql = "SELECT  `estado` , `IDUser`, `Nombre` , `img` , Password , Correo FROM user_portafolio WHERE Correo = ? ";
		 $stmt =$conexion->conectar()->prepare($sql);

		 if($stmt-> execute(array($email))){

		 	//Si ejecuta la consulta con exito extraemos la informacion
		 	//Encotnrar información	
				while ($item=$stmt->fetch()){
	        	$id = $item['IDUser'];
	        	$name = $item['Nombre'];
	        	$img = $item['img'];
	        	$correo = $item['Correo'];
	        	$contasena = $item['Password'];
	        	$status = $item['estado'];
	        	 	  	
	        } 

	        if ($email == $correo  && password_verify($password, $contasena)) {
	        	

	        	if ($status == 0) {
	        		
	        		$_SESSION['ValidaEntrada'] = 'token';
	        		header('Location: ../login.php');
	        	}else
	        	{
	        		$_SESSION['iduser'] = $id; 
	        		$_SESSION['nombre'] = $name;
	        		$_SESSION['imguser'] = $img;
	        		$_SESSION['ms1'] = "Correcto";
	        		header('Location: ../Dashboard/index.php');
	        	}


	        }else{

	        	$_SESSION['ValidaEntrada'] = 'NoExiste';
	        	header('Location: ../login.php');
	        }

		 }else
		 {   
		 	//Para validar si ya fallo la contrasena o email y asi mantener el correo en el input
		 	$_SESSION['ValidaEntrada'] = 'conexion';
		 	header('Location: ../login.php');
		 	exit;
		 }

		}catch (PDOException $e) {
			die("El error de Conexión es :".$e->getMessage());
		}

	}




?>