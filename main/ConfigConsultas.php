
<?php 
	


	//Esta clases sirvira para crear diferentes consultas
	class ConfigConsultas{

		public function ejecutar_consulta_conteo($tabla , $campo)
		{

			try {

				$sql = "SELECT COUNT($campo) AS 'Total' FROM " . $tabla ;
				$respuesta = Conexion::conectar()->prepare($sql);
				$respuesta->execute();
				while ($item=$respuesta->fetch()){
					$Total =  $item['Total'];
				}


				if (!$respuesta->execute()) {
					die("El error de Conexión es ejecutar_consulta_conteo");
				}

			} catch (PDOException $e) {
				die("El error de Conexión es :".$e->getMessage());
			}

			return $Total;
		}
	  //Fin de la funcion consulta


		public function ejecutar_consulta_tablas($tabla)
		{

			try {

				$sql = "SELECT * FROM " . $tabla;
				$respuesta = Conexion::conectar()->prepare($sql);
				if (!$respuesta->execute()) {
					die("El error de Conexión es ejecutar_consulta_tabla");
				}

			} catch (PDOException $e) {
				die("El error de Conexión es :".$e->getMessage());
			}

			return $respuesta;
		}
	  //Fin de la funcion consulta



		public function ejecutar_consulta_eliminar($tabla,$campo)
		{

			try {

				$sql = "DELETE FROM $tabla WHERE $campo = ?";
				$respuesta = Conexion::conectar()->prepare($sql);

			} catch (PDOException $e) {
				die("El error de Conexión es :".$e->getMessage());
			}

			return $respuesta;
		}
	  //Fin de la funcion consulta


		
		public function ejecutar_consulta_simple_Where($consulta, $condicion)
		{

			try {

				$respuesta = Conexion::conectar()->prepare($consulta);
				$respuesta-> execute(array($condicion));
				return $respuesta;
			}
			catch  (PDOException $e) {
				
				die("El error de consulta es :".$e->getMessage());
			}
		}









		public function GeneradorContrasena(){

			$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz1234567890";
			$password = "";
  						 //Reconstruimos la contraseña segun la longitud que se quiera
			for($i=0;$i <= 10 ;$i++) {
     					 //obtenemos un caracter aleatorio escogido de la cadena de caracteres
				$password .= substr($str,rand(0,62),1);
			}

			return $password;
		}

		function generar_token_seguro($longitud)
		{
			if ($longitud < 4) {
				$longitud = 4;
			}

			return bin2hex(random_bytes(($longitud - ($longitud % 2)) / 2));
		}


		public function GeneradorMensaje($email , $nombre , $clave , $Token) {

			$to = $email;
			$from = "daniel.marquez@oportunidades.org.sv";
			$name = $nombre;
			$subject ="Equipo de Mundo Empleo";
			
			$cmessage ="Te saluda Daniel Márquez quiero darte  la noticia que te he inscrito a una plataforma para forma parte de mi equipo de emprendimiento llamado MarSoftWeb. Pero ante comenzar necesito verificar tu correo. Para acceder dirigite al siguiente url http://localhost/danielmarquez.ga/verificacion.php?id=$email&token=$Token&pass=$clave \n\n Este correo electrónico ha sido generado automáticamente, por favor no responda a este correo.";

			$headers = "From: $from";
			$headers = "From: " . $from . "\r\n";
			$headers .= "Reply-To: ". $from . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

			$subject = "Soporte Técnico MarSoftWeb";

			$logo = 'http://www.danielmarquez.ga/img/logo.png';
			$link = 'localhost/danielmarquez.ga/';

			$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
			$body .= "<table style='width: 100%;'>";
			$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
			$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
			$body .= "</td></tr></thead><tbody><tr>";
			$body .= "<td style='border:none;'><strong>Hola:</strong> {$name}</td>";
			$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
			$body .= "</tr>";
			$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
			$body .= "<tr><td></td></tr>";
			$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
			$body .= "</tbody></table>";
			$body .= "</body></html>";

			$send = mail($to, $subject, $body, $headers);
		}




	}// Fin de la class


 ?>