<?php
//Incluimos la conexion de la base de datos
include_once '../bd/Conexion.php';
setlocale(LC_ALL,"es_ES");
setlocale(LC_TIME, "spanish");
date_default_timezone_set ("America/El_Salvador");
include_once '../main/ConfigConsultas.php';
$conexion = new ConfigConsultas();

include_once 'templates/cabecera.php';
?>
<title>Dashbord | Inicio</title>
<?php include_once 'templates/estilos.php'; 
include_once 'templates/MenuHorizontal.php';?>



<br>
<!--page title-->
<div class="page-title mb-4 d-flex align-items-center">
	<div class="mr-auto">
		<h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Panel Principal</h4>
		<nav aria-label="breadcrumb" class="d-inline-block ">
			<ol class="breadcrumb p-0">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			</ol>
		</nav>
	</div>
</div>
<!--/page title-->


<?php 
$Nombre = explode(" ", $name);
$today = getdate();
$hora=$today["hours"];
if ($hora<6) {
	echo("<h3>Hoy has madrugado mucho... " . $Nombre[0] . "</h3>");
}elseif($hora<12){
	echo("<h3> Buenos días, ".$Nombre[0] . "</h3>");
}elseif($hora<=18){
	echo("<h3>Buenas Tardes, ".$Nombre[0] . "</h3>");
}else{ echo("<h3>Buenas noches, " . $Nombre[0] . "</h3>"); } 

?>

<hr> 
<br>

<div class="row">
    <div class="col-xl-6 col-md-12">
        <div class="row">
            <div class=" col-sm-6">
                <div class="card card-shadow mb-4">
                    <div class="card-body">
                        <div class="media d-flex align-items-center">
                            <div class="mr-4 rounded-circle bg-warning sr-icon-box bubble-shadow-small">
                                <i class="vl_user-male"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="text-uppercase mb-0 weight500 text-dark"></h4>
                                <span class="text-muted">visitas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-sm-6">
                <div class="card card-shadow mb-4">
                    <div class="card-body">
                        <div class="media d-flex align-items-center">
                            <div class="mr-4 rounded-circle bg-purple sr-icon-box bubble-shadow-small">
                               <i class="fa fa-folder-open" aria-hidden="true"></i>
                           </div>
                           <div class="media-body">
                            <h4 class="text-uppercase mb-0 weight500 text-dark"><?php echo $conexion->ejecutar_consulta_conteo("proyectos_portafolio" , "IDProyectos"); ?></h4>
                            <span class="text-muted">Proyectos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-sm-6">
            <div class="card card-shadow mb-4">
                <div class="card-body">
                    <div class="media d-flex align-items-center">
                        <div class="mr-4 rounded-circle bg-danger sr-icon-box bubble-shadow-small">
                         <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                     </div>
                     <div class="media-body">
                        <h4 class="text-uppercase mb-0 weight500 text-dark"><?php echo  $conexion->ejecutar_consulta_conteo("certificaciones" , "IDCertificaciones"); ?></h4>
                        <span class="text-muted">Certificaciones</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" col-sm-6">
        <div class="card card-shadow mb-4">
            <div class="card-body">
                <div class="media d-flex align-items-center">
                    <div class="mr-4 rounded-circle bg-purple-light sr-icon-box bubble-shadow-small">
                        <i class="fa fa-info" aria-hidden="true"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="text-uppercase mb-0 weight500 text-dark"><?php echo  $conexion->ejecutar_consulta_conteo("notificaciones" , "IDNotificacion"); ?></h4>
                        <span class="text-muted">notificaciones </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class=" col-sm-6">
        <div class="card card-shadow mb-4">
            <div class="card-body">
                <div class="media d-flex align-items-center">
                    <div class="mr-4 rounded-circle bg-success sr-icon-box bubble-shadow-small">
                     <i class="icon-badge"></i>
                 </div>
                 <div class="media-body">
                    <h4 class="text-uppercase mb-0 weight500 text-dark"><?php echo  $conexion->ejecutar_consulta_conteo("conocimientos_personales" , "IDConocimientos"); ?></h4>
                    <span class="text-muted">Desarrollo Software</span>
                </div>
            </div>
        </div>
    </div>
</div>


<div class=" col-sm-6">
    <div class="card card-shadow mb-4">
        <div class="card-body">
            <div class="media d-flex align-items-center">
                <div class="mr-4 rounded-circle bg-info sr-icon-box bubble-shadow-small">
                    <i class="fa fa-building-o" aria-hidden="true"></i>
                </div>
                <div class="media-body">
                    <h4 class="text-uppercase mb-0 weight500 text-dark"><?php echo  $conexion->ejecutar_consulta_conteo("experiencia_personal" , "IDExperiencia"); ?></h4>
                    <span class="text-muted">Experiencia Laboral </span>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
</div>
<div class="col-xl-6 col-md-12">
    <div class="card card-shadow mb-4 bg-purple text-light">
        <div class="card-body pb-0">
            <div class="row">
                
                
               
               <div class="card-body">
                <div class=" widget-action-link">
                    <div class="dropdown">
                        <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                            <i class=" vl_ellipsis-fill-h" style="color: black;"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                            <a class="dropdown-item" href="#"> Edit</a>
                            <a class="dropdown-item" href="#"> Delete</a>
                            <a class="dropdown-item" href="#"> Settings</a>
                        </div>
                    </div>
                </div>

                

                <div class="text-center">
                    <div class="mt-4 mb-3">
                        <img class="rounded-circle" src="../img/user/<?php echo $img ?>" width="85" alt=""/>
                    </div>
                    <h5 class="text-uppercase mb-0"><?php echo $name; ?></h5>
                    <p class="text-white mb-0">Portafolio Dinamico</p>
                    <p class="text-white mb-0">MarSoftWeb</p>
                    <br>
                    
                    <div class="mb-2">
                        <a href="#" class="btn btn-sm btn-pill btn-warning pl-4 pr-4">Usuarios</a>
                        <a href="#" class="btn btn-sm btn-pill btn-danger  pl-4 pr-4">Mensajes</a>
                    </div>
                </div>

            </div>


            <!-- termina-->
        </div>
    </div>
</div>
</div>
</div>


<div class="row">
    <div class="col-xl-6">
        <div class="card card-shadow mb-4">
            <div class="row no-gutters">
                <div class="col-5 basic-gradient-alt weather-radius text-center position-relative">
                    <div class="weather-shade">
                        <img src="assets/img/weather-rain-bg.svg" alt="">
                    </div>
                    <div class="card-body mt-5 pt-5">
                     

                    </div>
                    <div class="card-footer bg-transparent border-0 text-light mt-3 pt-5">
                        <h3 class="weight300">Calendario</h3>
                    </div>
                </div>
                <div class="col-7">
                    <div class="card-body pt-5">
                        <h3 class="text-uppercase"><?php setlocale(LC_TIME, "spanish");
                        echo strftime("%A, %d");?> <br>
                        <span class="weight300 text-muted"><?php
                        setlocale(LC_TIME, "spanish");
                        echo strftime("%B");
                        
                        ?></span>
                    </h3>
                    <div class="f50 weight300 text-primary pt-5 pb-5">
                        <?php
                        setlocale(LC_TIME, "spanish");
                        echo strftime("%Y");
                        
                        ?>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="col-xl-6">
    <div class="card card-shadow mb-4">
        <div class="card-header border-0">
            <div class="custom-title-wrap bar-danger">
                <div class="custom-title">Activity Monitor</div>
                <div class=" widget-action-link">
                    <a href="#" class="btn btn-transparent text-secondary p-0 text-muted">
                        View All
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
           <div class="chat-wrap" style="height: 280px">
            <ul class="list-unstyled base-timeline">
                <li class="time-dot-primary">
                    <div class="base-timeline-info">
                        <a href="#">John123</a> Successfully purchased item#26
                    </div>
                    <small class="text-muted">
                        28 mins ago
                    </small>
                </li>
                <li class="time-dot-danger">
                    <div class="base-timeline-info">
                        <a href="#" class="text-danger">Farnandez</a> placed the order for accessories
                    </div>
                    <small class="text-muted">
                        2 days ago
                    </small>
                </li>
                <li class="time-dot-purple">
                    <div class="base-timeline-info">
                        User <a href="#" class="text-purple">Lisa Maria</a> checked out from the market
                    </div>
                    <small class="text-muted">
                        12 mins ago
                    </small>
                </li>
                <li class="time-dot-turquoise">
                    <div class="base-timeline-info">
                        <a href="#" class="text-info">Charlie Johnson  </a> joined DashLab last week. Congrats to him
                    </div>
                    <small class="text-muted">
                        3 days ago
                    </small>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>


<div class="row">
    <div class="col-xl-6 col-md-6">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    <div class="custom-title">Activades Realizadas Proyectos</div>
                </div>
            </div>
            <div class="card-body">
                <div class="chat-wrap" style="height: 280px">
                  <ul class="list-unstyled base-timeline">
                     
                    
                    <li class="time-dot-primary">
                        <div class="base-timeline-info">
                            <a href="#" style="text-align: justify;">Se agreado un nuevo proyecto. <br>Tiutlo: </a> 
                        </div>
                        <small class="text-muted">
                         Fecha Publicación: 
                     </small>
                 </li>
                 
                 
             </ul>
         </div>
     </div>
 </div>
</div>
<div class="col-xl-6 col-md-6">
    <div class="card card-shadow mb-4">
        <div class="card-header border-0">
            <div class="custom-title-wrap bar-success">
                <div class="custom-title">Activades Realizadas Certificaciones</div>
            </div>
        </div>
        <div class="card-body">
            <div class="chat-wrap" style="height: 280px">
                <ul class="list-unstyled base-timeline">
                    
                    
                    <li class="time-dot-danger">
                        <div class="base-timeline-info">
                            <a href="#" style="text-align: justify;">Se agreado una certificación. <br>Tiutlo:</a> 
                        </div>
                        <small class="text-muted">
                         Fecha Publicación: 
                     </small>
                 </li>
                 
                 
             </ul>
         </div>
     </div>
     
 </div>
</div>	
</div>




<?php 
include_once 'templates/footer.php';
include_once 'templates/MenuVertical.php';
include_once 'templates/script.php';
?>