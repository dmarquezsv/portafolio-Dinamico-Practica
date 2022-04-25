<?php 


 //Incluimos las consultas generales
include_once '../../bd/Conexion.php';

$salida = "";
$sql = "";
$result ="";

if (isset($_POST['consulta'])) {

	$dato = $_POST['consulta'];
	$sql = "SELECT COUNT(`IDUser`) AS 'Correo' FROM user_portafolio WHERE Correo  = '".$dato."' ";
	$stmt =  Conexion::conectar()->prepare($sql);
	if($stmt->execute()){

		if ($stmt->rowCount()>0){

			while ($item2=$stmt->fetch()){
				$result = $item2['Correo'] ;
			}

			
			if ($result == 1) {
				$salida.="<br><div class='alert alert-warning' role='alert'>
				El Usuario ya existe
				</div> <input type='hidden' value='".$result."' id='validez'>";
			}else
			{
				$salida.="";
			}



		}

		
	}else{
		$salida.="Problemas consulta";
	}

	echo $salida;
	
	
}

if (isset($_POST['editProyecto'])) {

	$dato = $_POST['editProyecto'];
	$sql = "SELECT * FROM `proyectos_portafolio` WHERE `IDProyectos` = '".$dato."' ";
	$stmt =  Conexion::conectar()->prepare($sql);
	if($stmt->execute()){

		if ($stmt->rowCount()>0){

			while ($item2=$stmt->fetch()){
				
				$salida.="

				<div class='form-group'>
				<label for='exampleInputEmail1'>Titulo</label>
				<input type='text' class='form-control' placeholder='Titulo' required='true' name='titulo' value='".$item2['Titulo']."' >
				</div>

				<div class='form-group'>
				<label for='exampleInputEmail1'>Descripción</label>
				<textarea name='' class='form-control'>".$item2['Descripcion']."</textarea>
				</div>
		         
		         <label>Fecha Inicio</label>
				<div class='input-group date dpYears' data-date-viewmode='years' data-date-format='dd-mm-yyyy' >
				<input type='text' class='form-control' placeholder='03-10-2018' aria-label='Right Icon' aria-describedby='dp-ig' name='FechaInicio' required value='".$item2['FechaRealizacion']."'>
				<div class='input-group-append'>
				<button id='dp-ig' class='btn btn-outline-secondary' type='button'><i class='fa fa-calendar f1'></i></button>
				</div>
				</div>
	
				<label>Fecha FechaFinalización</label>
				<div class='input-group date dpYears' data-date-viewmode='years' data-date-format='dd-mm-yyyy' >
				<input type='text' class='form-control' placeholder='03-10-2018' aria-label='Right Icon' aria-describedby='dp-ig' name='FechaInicio' required value='".$item2['FechaFinalizacion']."'>
				<div class='input-group-append'>
				<button id='dp-ig' class='btn btn-outline-secondary' type='button'><i class='fa fa-calendar f1'></i></button>
				</div>
				</div>

               
				<div class='form-group'>
				<label for='exampleInputEmail1'>Califación</label>
				<select name='tipo' class='form-control' required name='tipo'>
				<option value=".$item2['TipoProgramacion']." selected  >".$item2['TipoProgramacion']."</option>
				<option value='Desarrollo web'>Desarrollo web</option>
				<option value='Desarrollo desktop'>Desarrollo desktop</option>
				<option value='Desarrollo cmd'>Desarrollo cmd</option>

				</select>
				</div>


				<div class='form-group'>
				<label for='exampleInputEmail1'>Empresa encargado</label>
				<input type='text' class='form-control' placeholder='Titulo' required='true' name='titulo' value='".$item2['EmpresaCargo']."' >
				</div>


				<div class='form-group'>
				
				<label for='exampleInputEmail1'>Califación</label>
				<select name='tipo' class='form-control' required name='tipo'>
				<option value=".$item2['Sastifacion']." selected  >".$item2['Sastifacion']."</option>
				<option value='1'>1</option>
				<option value='2'>2</option>
				<option value='3'>3</option>
				<option value='4'>4</option>
				<option value='5'>5</option>
				</select>
				</div>

				<div class='form-group'>
				<label for='exampleInputEmail1'>Url Youtube</label>
				<input type='text' class='form-control' placeholder='Titulo' required='true' name='titulo' value='".$item2['urlvideo']."' >
				</div>

				<div class='form-group'>
				<label for='exampleInputEmail1'>Url de la web</label>
				<input type='text' class='form-control' placeholder='Titulo' required='true' name='titulo' value='".$item2['urlweb']."' >
				</div>

				<div class='form-group'>
				<label for='exampleInputEmail1'>Titulo</label>
				<label for='exampleInputEmail1'>Califación</label>
				<select name='tipo' class='form-control' required name='tipo'>
				<option value=".$item2['estado']." selected> ".$item2['estado']." </option>
				<option value='Activo'>Activo </option>
				<option value='Pendiente'>Pendiente</option>
				<option value='Finalizado'>Finalizado</option>
				<option value='Pausa'>Pausa</option
				</select>
				</div>

			

				";
			}

			
			


		}

		
	}else{
		$salida.="Problemas consulta";
	}

	echo $salida;
	
	
}



?>