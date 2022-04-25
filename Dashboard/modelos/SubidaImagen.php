<?php 


 //Incluimos las consultas generales
include_once '../../bd/Conexion.php';

session_start();

if (isset($_POST['SubirImg'])) {

	$id = $_POST['idimg'];
	$imgname = $_POST['imgname'];
	$opcion = $_POST['opcion'];  

	// Opcion 1 BannerSecundario del Proyecto
	// Opcion 2 BannerPrincipal del proyecto	

	if($_FILES["imgusu"]["error"]>0){

		$_SESSION['alertas'] = "SubidaImg";
		$_SESSION['ms'] = "No has selecciona el archivo";

		if($opcion == 1 || $opcion == 2 || $opcion == 3 ){

			header("Location: ../DetallesProyecto.php?id=".$id);
		}

	}else
	{
		if($imgname == "bannerSecundario.png")
		{
			$destino = "../../img/bannerProyectos/".$imgname;
			unlink($destino);
		}
		else if($imgname == "bannerProyecto.png"){

			$destino = "../../img/bannerProyectos/".$imgname;
			unlink($destino);	
		}else if($imgname == "Nuevo.png"){

			$destino="";
		}

			 //Si entra aqui es porqueno tenemos ningun error
		$tipoimg = array("image/jpg","image/png","image/jpeg");


 			//verifica con la funcion in_array si el tipo de la imagen es igual a algun tipo de dato en la variable $tipoimg
		if(in_array($_FILES["imgusu"]["type"], $tipoimg)){

            //hacemos referencia a la ruta donde guardaremos la imagen
			$rutaimg = "";
			if($opcion == 1 || $opcion == 2){
				$rutaimg = '../../img/bannerProyectos/';
			}else if($opcion == 3){
				$rutaimg = '../../img/recurosProyectos/';
			}
			

            //guardamos la extencion de la imagen
			$extensionimg = explode("/",$_FILES["imgusu"]["type"]);

            //se genera un numero de 5 cifras para renombrar la imagen
            //esto es opcional porque esto lo utilice para mis imagenes
			$d = "";
			if($opcion == 1 ){
				$d="0".$id;
			}else if($opcion == 2){
				$d="00".$id;
			}else if($opcion ==3){

				$n1=mt_rand(1,9);
				$n2=mt_rand(1,9);
				$n3=mt_rand(1,9);
				$n4=mt_rand(1,9);
				
			   //Generamos el id con el año y 4 numeros random
				$idimg=$id."".$n1."".$n2."".$n3."".$n4;

				$d=$idimg;
			}

            //en la variable $nombreimg concatenamos toda la ruta y el nombre de la imagen para
            //que no se escriba si hay otra imagen con el mismo nombre en esa ruta
			$nombreimg = $rutaimg . "img" .$d . "." . $extensionimg[1];

            //guardamos solo el nombre de la imagen con su extencion
			$img = "img" . $d . "." . $extensionimg[1];

            //verificamos si existe la carpeta /img y si no existe se crea
			if(!file_exists($rutaimg)){
				mkdir($rutaimg);
			}

            //verificamos si existe una imagen con 
			if(!file_exists($nombreimg)){               
                //guardando el nombre de la imagen en la base de datos



                //copiano la imagen con la funcion @move_uploaded_file()
                //y como parametros le pasamos la imagen que subio el usuario
                //y como segundo parametro toda la ruta hasta con el nombre de la imagen para que la guarde
				$resultadoimg = @move_uploaded_file($_FILES["imgusu"]["tmp_name"], $nombreimg);



				if($imgname == "bannerSecundario.png"){

					try {

						$sql= "UPDATE `proyectos_portafolio` SET `banner2` = ? WHERE IDProyectos = ? ";
						$stmt =  Conexion::conectar()->prepare($sql);
						
						if($stmt->execute(array($img , $id))){
							$_SESSION['alertas'] = "actualizar";
						}else{
							$_SESSION['alertas'] = "Fallo";
						}
					}
					catch (PDOException $e) {
						die("El error de Conexión es :".$e->getMessage());
					}
				}else if($imgname == "bannerProyecto.png"){

					try {

						$sql= "UPDATE `proyectos_portafolio` SET `banner` = ? WHERE IDProyectos = ? ";
						$stmt =  Conexion::conectar()->prepare($sql);
						
						if($stmt->execute(array($img , $id))){
							$_SESSION['alertas'] = "actualizar";
						}else{
							$_SESSION['alertas'] = "Fallo";
						}
					}
					catch (PDOException $e) {
						die("El error de Conexión es :".$e->getMessage());
					}
				}else if ($imgname == "Nuevo.png"){


					$sql = "INSERT INTO `recursos_proyectos` (`IDProyectos`, `nombre`, `comprobantes1`, `Tipo`) VALUES (:IDProyectos, 'img', :comprobantes1, 'img') ";
					$stmt =  Conexion::conectar()->prepare($sql);
					$stmt->bindParam(':IDProyectos', $id , PDO::PARAM_STR);
					$stmt->bindParam(':comprobantes1', $img , PDO::PARAM_STR);
					if ($stmt->execute()) {
						$_SESSION['alertas'] = "Nuevo";
						header("Location: ../DetallesProyecto.php?id=".$id);
					}
					else{
						$_SESSION['alertas'] = "Fallo";
					}


				}	


				if($opcion == 1 || $opcion == 2 || $opcion == 3  ){

					header("Location: ../DetallesProyecto.php?id=".$id);
				}

				
			}else{

				$_SESSION['alertas'] = "SubidaImg";
				$_SESSION['ms'] = "existe una imagen con el mismo nombre generado";

				if($opcion == 1 || $opcion == 2 || $opcion == 3 ){

					header("Location: ../DetallesProyecto.php?id=".$id);
				}

                //entra a este else si existe una imagen con el mismo nombre generado
			}
		}else{


			$_SESSION['alertas'] = "SubidaImg";
			$_SESSION['ms'] = "No se pude cambiar la imagen ya que no esta con una extencion valida";

			if($opcion == 1 || $opcion == 2 || $opcion == 3 ){

				header("Location: ../DetallesProyecto.php?id=".$id);
			}

			

		}


	}

}




?>