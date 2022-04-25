<?php 

include_once '../../bd/Conexion.php';
include_once '../../main/ConfigConsultas.php';

if (isset($_POST['btnAgregar'])) {

	$id = $_POST['id'];
	$titulo = $_POST['Titutlo'];
	$descrip = $_POST['Descripcion'];
	$tipo = $_POST['tipo'];
	$fechaini =$_POST['FechaInicio'];
	$fechafin=$_POST['FechaFin'];
	$empesa = $_POST['empresa'];
	$sastifacion =$_POST['estrellas'];
	$urlYoutube = $_POST['urlYoutube'];
	$urlweb = $_POST['urlWeb'];
	$estado = $_POST['estado'];

	try {

		$sql = "INSERT INTO `proyectos_portafolio` (`IDUser`, `Titulo`, `Descripcion`, `FechaRealizacion`, `FechaFinalizacion`, `TipoProgramacion`, `EmpresaCargo`, `Sastifacion`, `urlvideo`, `urlweb`, `estado`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
		$stmt =  Conexion::conectar()->prepare($sql);

		if ($stmt->execute(array($id,$titulo, $descrip  , $fechaini ,$fechafin , $tipo , $empesa , $sastifacion , $urlYoutube , $urlweb ,$estado ))) {
			$_SESSION['alertas'] = "Nuevo";
			header('Location: ../Proyectos.php');


		}
		else{
			$_SESSION['alertas'] = "Fallo";
			header('Location: ../NuevoProyecto.php');
		}

	}	catch (PDOException $e) {
		die("El error de Conexión es :".$e->getMessage());
	}



}

   if(isset($_POST['EliminarProyecto'])){
  
   			$id =$_POST['idproyecto'];

         $sql="SELECT * FROM `recursos_proyectos` WHERE IDProyectos = ?";
        $stmt = ConfigConsultas::ejecutar_consulta_simple_Where($sql ,$id);

        while ($item2=$stmt->fetch()){

           if($item2['Tipo'] == "doc"){
               $destino = "../documentos/recurosProyectos/".$item2['comprobantes1'];

               unlink($destino); 
           }else if($item2['Tipo'] == "img") {
              $destino = "../img/recurosProyectos/".$item2['comprobantes1'];

              unlink($destino); 
          }       
                    
        }

        $stmt2 = ConfigConsultas::ejecutar_consulta_eliminar("recursos_proyectos" , "IDProyectos");
        $stmt2->execute(array($id));

        $stmt3 = ConfigConsultas::ejecutar_consulta_eliminar("proyectos_portafolio" , "IDProyectos");
        $stmt3->execute(array($id));

        $_SESSION['alertas'] = "Eliminado";
        
          header('Location: ../Proyectos.php');


       }



?>