<?php 


// Datos para conectar a la base de datos
const Servidor = "localhost";
const BaseDeDatos = "portafolio";
const Usuario = "root";
const Pass = "";
const SGBD = "mysql:host=".Servidor.";dbname=".BaseDeDatos .";charset=UTF8";




class Conexion 
{
	
		  //Funcion Conectar
	public function conectar(){
		
		try {
			
			$con = new PDO(SGBD,Usuario,Pass);
			
		} catch (PDOException $e) {
			die("El error de Conexión es :".$e->getMessage());
		}

		return $con;
	}
	      //Fin de la funcion conectar

	

		}//Final de la class conexion


		?>