<?php 



  //Incluimos las consultas generales
include_once '../bd/Conexion.php';
include_once '../main/ConfigConsultas.php';

 

 class ModelosProyectos 
 {
 	

 	public function MostrarProyectos()
 	{
 		$stmt = ConfigConsultas::ejecutar_consulta_tablas("proyectos_portafolio");
 		while ($item=$stmt->fetch())
 		{
 			echo "<tr>
 			<td>".$item['IDProyectos']."</td>
 			<td>".$item['Titulo']."</td>
 			<td>".$item['TipoProgramacion']."</td>
 			<td>".$item['FechaPublicacion']."</td>
 			<td>".$item['estado']."</td>
 			<td><a href='DetallesProyecto.php?id=".$item['IDProyectos']."' class='btn btn-warning btn-icon-split'>Detalles</a></td>
 			<td><a href='javascript:void(0)' data-toggle='modal' data-target='#exampleModal' class='btn btn-danger btn-icon-split' id='btnEditar'>Eliminar</a></td>
 			</tr>";

 		}
 	}


 	public function MostarDetalles($id){

 		$sql="SELECT * FROM `proyectos_portafolio` WHERE `IDProyectos` = ?";
 		$stmt = ConfigConsultas::ejecutar_consulta_simple_Where($sql ,$id);

 		return $stmt;
 	}


 	public function MostrarRecursos($id){

 		$sql="SELECT * FROM `recursos_proyectos` WHERE IDProyectos = ? ORDER BY `Tipo` DESC ";
 		$stmt = ConfigConsultas::ejecutar_consulta_simple_Where($sql ,$id);
 		

 		   while ($item2=$stmt->fetch())
                { 
                	if ($item2['Tipo'] == "img") {
                	  
                	  echo "<tr>
                    <td>".$item2['IDRecusos']."</td>
                    <td><center><img src='../img/recurosProyectos/".$item2['comprobantes1']."' alt='img comprobantes' class='img-fluid' style='width: 25%; height:100px;  '></center></td>
                    <td>".$item2['comprobantes1']."</td>
                    <td>".$item2['Tipo']."</td>
                    <td><a href='javascript:void(0)' data-toggle='modal' data-target='#exampleModal5' class='btn btn-danger btn-icon-split' id='btnEditar'>Eliminar</a></td>
                    </tr>";
	
                	}else{
                		echo "<tr>
                    <td>".$item2['IDRecusos']."</td>
                    <td><a href='../documentos/recurosProyectos/".$item2['comprobantes1']."' title='recuros de Proyectos' target='_blank'>".$item2['nombre'].".pdf</a></td>
                    <td>".$item2['comprobantes1']."</td>
                    <td>".$item2['Tipo']."</td>
                    <td><a href='javascript:void(0)' data-toggle='modal' data-target='#exampleModal5' class='btn btn-danger btn-icon-split' id='btnEditar'>Eliminar</a></td>
                    </tr>";

                	}
                  
                    
                  
                }
 		
 		}




        public function EliminarRecuros(){

            if (isset($_POST['Eliminar'])) {
                $id = $_POST['idrecursos'];
                $Tipo = $_POST['tipo'];
                $archivo = $_POST['nombreRecurso'];
                $stmt = ConfigConsultas::ejecutar_consulta_eliminar("recursos_proyectos" , "IDRecusos");
                
                if ($stmt->execute(array($id))) {

                  if($Tipo == "doc"){
                     $destino = "../documentos/recurosProyectos/".$archivo;

                     unlink($destino); 
                 }else if($Tipo == "img") {
                  $destino = "../img/recurosProyectos/".$archivo;
                  
                  unlink($destino); 
              }      

              $_SESSION['alertas'] = "Eliminado";

          }else{
            $_SESSION['alertas'] = "Fallo";
        }

        return $archivo;
    }

}



 






 	
 }




 ?>