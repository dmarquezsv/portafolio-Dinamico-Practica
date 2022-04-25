<?php 


  //Incluimos las consultas generales
include_once '../bd/Conexion.php';
include_once '../main/ConfigConsultas.php';

   	/**
   	 * 
   	 */
   	class ModelosUsuario
   	{
   		
   		public function MostrarUsuario()
   		{
   			$stmt = ConfigConsultas::ejecutar_consulta_tablas("user_portafolio");
   			while ($item=$stmt->fetch())
   			{
   				echo "<tr>
   				<td>".$item['IDUser']."</td>
   				<td>".$item['Nombre']."</td>
   				<td>".$item['Correo']."</td>
   				<td>".$item['estado']."</td>
   				<td>".$item['FechaRegitro']."</td>
   				<td><a href='javascript:void(0)' data-toggle='modal' data-target='#exampleModal2' class='btn btn-warning btn-icon-split'>Actualizar</a></td>
   				<td><a href='javascript:void(0)' data-toggle='modal' data-target='#exampleModal' class='btn btn-danger btn-icon-split' id='btnEditar'>Eliminar</a></td>
   				</tr>";

   			}
   		}



   		public function AgregarUsuario(){

   			try {

   				if (isset($_POST['btnAgregar'])) {
   					# code...
   					$Nombre = $_POST['txtnombre'];
   					$email = strtolower($_POST['txtcorreo']);
   					$Acceso = ConfigConsultas::GeneradorContrasena();
   					$Token = ConfigConsultas::generar_token_seguro(20);
   					$Password = password_hash($Acceso, PASSWORD_DEFAULT);//Incriptamos la contraseña del usuario generado automaticamente



   					$sql = "INSERT INTO `user_portafolio`(`Nombre`,`Correo`,`Password`,`token`)VALUES(:Nombre , :Correo , :Password , :token) ";
   					$stmt =  Conexion::conectar()->prepare($sql);
   					$stmt->bindParam(':Nombre', $Nombre , PDO::PARAM_STR);
   					$stmt->bindParam(':Correo', $email , PDO::PARAM_STR);
   					$stmt->bindParam(':Password', $Password , PDO::PARAM_STR);
   					$stmt->bindParam(':token', $Token , PDO::PARAM_STR);
   					if ($stmt->execute()) {
   						$_SESSION['alertas'] = "Nuevo";
   						ConfigConsultas::GeneradorMensaje($email , $Nombre , $Acceso ,$Token );
   						

   					}
   					else{
   					$_SESSION['alertas'] = "Fallo";
   					}
   				}
   			}
   			catch (PDOException $e) {
   				die("El error de Conexión es :".$e->getMessage());
   			}


   		}



   		public function EliminarUsuario(){

   			if (isset($_POST['Eliminar'])) {
   				$id = $_POST['iduser'];
   				$stmt = ConfigConsultas::ejecutar_consulta_eliminar("user_portafolio" , "IDUser");
   				if ($stmt->execute(array($id))) {

   					$_SESSION['alertas'] = "Eliminado";
   				}else{
   					$_SESSION['alertas'] = "Fallo";
   				}
   			}

   		}




         public function ActualizarUsuario(){

            try {
               if (isset($_POST['btnActualizar'])) {
                 
                 $id = $_POST['iduser2'];
                 $Nombre = $_POST['txtnombre2'];
                 $email = strtolower($_POST['txtcorreo2']);

                 $sql = "UPDATE `user_portafolio` SET `Nombre` =  :Nombre , `Correo` = :Correo WHERE `IDUser` = :id ";
                 $stmt =  Conexion::conectar()->prepare($sql);
                 $stmt->bindParam(':Nombre', $Nombre , PDO::PARAM_STR);
                 $stmt->bindParam(':Correo', $email , PDO::PARAM_STR);
                 $stmt->bindParam(':id', $id , PDO::PARAM_STR);

                 if ($stmt->execute()) {
                  $_SESSION['alertas'] = "actualizar";
               }
               else{
                  $_SESSION['alertas'] = "Fallo";
               }
               
               }
               
            }
            catch (PDOException $e) {
               die("El error de Conexión es :".$e->getMessage());
            }


         }




   	}



   	?>