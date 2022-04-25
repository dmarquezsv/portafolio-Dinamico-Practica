

<?php 

include_once 'modelos/ModelosProyectos.php';
$conexion = new ModelosProyectos();
$stmt= $conexion->MostarDetalles($_GET['id']);
  
  while ($item=$stmt->fetch())
        {
          $Titulo = $item['Titulo'];
          $descripcion = $item['Descripcion'];
          $imgbanner = $item['banner'];
          $publicado = $item['FechaPublicacion'];
          $FechaIniciado = $item['FechaRealizacion'];
          $FechaFinalizado = $item['FechaFinalizacion'];
          $TipoDesarrolo = $item['TipoProgramacion'];
          $empresa = $item['EmpresaCargo'];
          $sastifacion = $item['Sastifacion'];
          $urlyotube = $item['urlvideo'];
          $urlweb = $item['urlweb'];
          $estado = $item['estado'];
          $visitas = $item['vistas'];
          $banner2 = $item['banner2'];

        }


include_once 'templates/cabecera.php';
?>
<title>Dashbord | Inicio</title>
<?php include_once 'templates/estilos.php'; 
include_once 'templates/MenuHorizontal.php';?>

<?php  $conexion->EliminarRecuros(); 
        

?>



         <!--page title-->
         <div class="page-title mb-4 d-flex align-items-center">
            <div class="mr-auto">
                <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Detalles del Proyecto</h4>
                <nav aria-label="breadcrumb" class="d-inline-block ">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item active"><a href="Proyectos.php">Proyectos</a></li>

                    </ol>
                </nav>
            </div>
        </div>
        <!--/page title-->

 <h1 style="text-align: center; font-family: 'Arial';">Detalles del proyecto</h1>
 <br>
  
           <!--main content wrapper-->
    <div class="content-wrapper">

        <!--profile banner-->
        <div class="profile-banner" style="background-image: url('assets/img/profile-banner.jpg')">
            <div class="row ">
                <div class="col-md-6 ml-auto text-lg-right">

                    <div class="text-right">
                        <div class="dropdown mb-5">
                            <a href="#" class="btn btn-transparent text-light dropdown-hover p-0" data-toggle="dropdown">
                                <i class=" vl_ellipsis-fill-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                <a class="dropdown-item" href="#" id="example"> Edit</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal7"> Delete</a>
                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#exampleModal" >Banner Principal</a>
                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#exampleModal3" >Banner Secundario</a>
                         
                            </div>
                        </div>
                    </div>

                    <div class="profile-follower-info">
                        <div class="d-inline-block px-4 text-left text-light ">
                            <strong class="f14 d-block" ><?php echo $visitas ?></strong>
                            <p>Visitas</p>
                        </div>
                        <div class="d-inline-block px-4 text-left text-light">
                            <strong class="f14 d-block"><?php echo $publicado ?></strong>
                            <p>Publicado</p>
                        </div>
                        <div class="d-inline-block px-4 text-left text-light">
                            <strong class="f14 d-block"><?php echo $estado ?></strong>
                            <p>Estado</p>
                        </div>
                    </div>

                    <div class="mt-4">
                      
                    </div>
                </div>
            </div>
        </div>
        <!--/profile banner-->


       



       <div class="container">
         
       
        <div class="row">
            <div class="col-xl-6 col-md-12">
                <div class="row">
                  <h4>Banner Principal</h4>
                   <center>
                    <img src="../img/bannerProyectos/<?php echo $banner2 ?>"  class="img-fluid" alt="img del banner" style="width: 50%;">
                </center>

            </div>
        </div>

        <div class="col-xl-6 col-md-12">
            <div class="row">
              <h4>Video de Youtube</h4>

                 
                 <?php if($urlyotube == null || $urlyotube == ""){
                  echo "<img src='../img/default/videonodisponible.png' alt='video no disponible por el momento' class='img-fluid'>";
                    echo "El Usuario no ha subido el video";
                 }
                 else{
                    
                    echo $urlyotube;
                   
                 } 
                 ?>
                

                <!-- termina-->
            </div>
        </div>
    </div>
    </div>

    <br>

    <div class="row">
        <div class="col-12">
            <div class="card card-shadow mb-4 p-5">
                <div class="card-body">
                   <div class="row py-4">
                       <div class="col-sm-8">
                        <center>
                          <h4>Banner Secundario</h4>
                           <img src="../img/bannerProyectos/<?php echo $imgbanner ?>" srcset="../img/bannerProyectos/<?php echo $imgbanner ?>" alt="log del banner" class="img-fluid" style="width: 40%;" />
                       </center>
          
                       <h1 class="text-info weight300 my-5"><?php echo $Titulo ?></h1>
                       <p style="text-align: justify;"><?php echo $descripcion ?></p>

                       <!-- Button trigger modal -->
                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4" style="margin-right: 10px;">
                          Nuevo Recurso
                      </button>

                      

                   </div>
                   <div class="col-sm-4">
                       <address class="mb-5">
                           <strong>Fecha Iniciada</strong>
                           <br> <span class="text-muted"><?php echo $FechaIniciado ?></span><br>
                           <strong>Fecha Finzalizada</strong>
                           <br> <span class="text-muted"><?php echo $FechaFinalizado ?></span>
                       </address>

                       <address>
                           <strong>Tipo de Proyecto</strong>
                           <br> <span class="text-muted"><?php echo  $TipoDesarrolo ?></span><br>
                           <strong>Empresa Encargada</strong>
                           <br> <span class="text-muted"><?php echo $empresa ?></span><br>
                       </address>

                       <address>
                           <strong>Sastifación</strong>
                           <?php 

                            if ($sastifacion == 1) {
                               echo "<i class='fa fa-star text-warning'></i>";
                               echo "<i class='fa fa-star-o text-warning'></i>";
                               echo "<i class='fa fa-star-o text-warning'></i>";
                               echo "<i class='fa fa-star-o text-warning'></i>";
                               echo "<i class='fa fa-star-o text-warning'></i>";
                            }else if($sastifacion == 2){
                              echo "<i class='fa fa-star text-warning'></i>";
                              echo "<i class='fa fa-star text-warning'></i>";
                              echo "<i class='fa fa-star-o text-warning'></i>";
                              echo "<i class='fa fa-star-o text-warning'></i>";
                              echo "<i class='fa fa-star-o text-warning'></i>";

                            }else if($sastifacion == 3){
                              echo "<i class='fa fa-star text-warning'></i>";
                              echo "<i class='fa fa-star text-warning'></i>";
                              echo "<i class='fa fa-star text-warning'></i>";
                              echo "<i class='fa fa-star-o text-warning'></i>";
                              echo "<i class='fa fa-star-o text-warning'></i>";

                            }else if($sastifacion == 4){
                              echo "<i class='fa fa-star text-warning'></i>";
                              echo "<i class='fa fa-star text-warning'></i>";
                              echo "<i class='fa fa-star text-warning'></i>";
                              echo "<i class='fa fa-star text-warning'></i>";
                              echo "<i class='fa fa-star-o text-warning'></i>";
                            }else if($sastifacion == 5){

                              echo "<i class='fa fa-star text-warning'></i>";
                              echo "<i class='fa fa-star text-warning'></i>";
                              echo "<i class='fa fa-star text-warning'></i>";
                              echo "<i class='fa fa-star text-warning'></i>";
                              echo "<i class='fa fa-star text-warning'></i>";

                            }

                            ?>
                         
                       </address>

                          
                         <address >
                           <strong>Sitio Web</strong>
                          <br>
                           <?php if($urlweb == null || $urlweb == ""){ 
                              echo "<button type='button' disabled class='btn btn-primary'>No disponible</button>";
                          }else{
                              echo "<a href='$urlweb>' class='btn btn-primary'>Sitio Web</a>";
                          }

                          ?>
                       </address>

                       
                   </div>
               </div>

               <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table  id="data_table"  class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Comprobante</th>
                                    <th scope="col">Archivo</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Opción</th>
                                </tr>
                            </thead>
                            <tbody class="text-muted">
                <?php $stmt2= $conexion->MostrarRecursos($_GET['id']); ?>

                            </tbody>
                        </table>

                    </div>
                </div>
           </div>
        </div>
    </div>
 
</div>


</div>

</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Subir Banner Principal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="POST" action="modelos/SubidaImagen.php" enctype="multipart/form-data">
        <label>Seleeciona la img correspodiente</label>
        <input type="file" name="imgusu" id="imgusu" class="form-control" accept="image/*" required />
         <input type="text" name="idimg" value="<?php echo $_GET['id']?>">
         <input type="text" name="imgname" value="<?php echo $banner2 ?>">
         <input type="text" name="opcion" value="1" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="SubirImg" value="Subir Imagen"  class="btn btn-primary">
        </form>  
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Subir Banner Secundario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="modelos/SubidaImagen.php" enctype="multipart/form-data">
        <label>Seleeciona la img correspodiente</label>
        <input type="file" name="imgusu" id="imgusu" class="form-control" accept="image/*" required />
         <input type="text" name="idimg" value="<?php echo $_GET['id']?>">
         <input type="text" name="imgname" value="<?php echo $imgbanner ?>">
         <input type="text" name="opcion" value="2" >

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="SubirImg" value="Subir Imagen"  class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Elimiar el recurso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Seguro desea eleiminar el recurso ?</p>
        <form action="" method="POST" accept-charset="utf-8">
          
             <input type="text" name="idrecursos" id="idrecursos" >
           <input type="text" name="nombreRecurso"  id="nombreRecurso" >
           <input type="text" name="tipo" id="TipoArc" >

       
       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="Eliminar" value="Elimiar Recurso" class="btn btn-primary">
         </form>
      </div>
    </div>
  </div>
</div>








<!-- Modal -->
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Subir Recurso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Documentos</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Imagenes</a>
          </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <br>
           <form method="POST" action="modelos/SubirPdf.php" enctype="multipart/form-data">
            <label for="">Nombre del documento</label>
            <input type="text" name="nombreRecurso" placeholder="Nombre del recursos" required class="form-control">
            <input type="hidden" name="idpdf" value="<?php echo $_GET['id']?>">
            <label for="">Subir el documento</label>
            <input type="file" name="archivo" id="archivo" class="form-control" accept="document/*"  required />  
            <br>    
            <center><input type="submit" name="subirpdf" value="Subir Recurso" class="btn btn-primary btn-block"></center>
          </form>

          </div>

          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <br>
           <form method="POST" action="modelos/SubidaImagen.php" enctype="multipart/form-data">
            <label>Seleeciona la img correspodiente</label>
            <input type="file" name="imgusu" id="imgusu" class="form-control" accept="image/*" required />
            <input type="hidden" name="idimg" value="<?php echo $_GET['id']?>">
            <input type="hidden" name="imgname" value="Nuevo.png">
            <input type="hidden" name="opcion" value="3">
            <center><input type="submit" name="SubirImg" value="Subir Recurso" class="btn btn-primary btn-block"></center>
          </form>



          </div>
          
        </div>

       


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>







<!-- Modal -->
<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Proyecto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="status"></div>
        <div id="result"></div>

       
       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="Eliminar" value="Elimiar Recurso" class="btn btn-primary">
         </form>
      </div>
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Elimianr Proyecto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <p>Seguro desea elimiar el proyecto ?</p>
         
           

     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <form  action="modelos/NuevoProyecto.php" method="POST" accept-charset="utf-8">
        <input type="text" name="idproyecto" value="<?php echo $_GET['id']; ?>" >
        <input type="submit" name="EliminarProyecto" value="Elimiar Proyecto" class="btn btn-danger">
      </form>
    </div>
  </div>
</div>
</div>


 <input type="hidden" id="getid" value="<?php echo $_GET['id']; ?>" > 





<?php 
include_once 'templates/footer.php';
include_once 'templates/MenuVertical.php';
include_once 'templates/script.php';
include_once 'templates/alertas.php';

?>


<script type="text/javascript">
        
        window.onload=function(){
    $("table tbody tr").click(function(){
        // Tomar la captura la información  de la tabla 
        var id= $(this).find("td:eq(0)").text(); 
        document.getElementById('idrecursos').value=id;
        
        var nombre= $(this).find("td:eq(2)").text(); 
        document.getElementById('nombreRecurso').value=nombre;

        var archivo= $(this).find("td:eq(3)").text(); 
        document.getElementById('TipoArc').value=archivo;
 
        
    });    
}

</script>


<script type="text/javascript">
  

$(document).ready(function() {
  $('#example').on('click', function() {
    
    $('#exampleModal6').modal('show'); 
    id = $.trim($("#getid").val());
    

   $.ajax({
    url: 'modelos/BusquedaCampos.php' ,
    type: 'POST' ,
    dataType: 'html',
    data: {editProyecto: id  },

    beforeSend: function() {
        $('#status').text('Cargando..');
        //jQuery("#resultado").html("Déjame pensar un poco...");
      }

  })
    .done(function(response){
      $('#result').html(response);
    })
    .fail(function(request, errorType, errorMessage){
      //timeout, error, abort, parseerror
      console.log(errorType);
      alert(errorMessage);
    })
    .always(function(){
      $('#status').text('Completado');
    });
       
  }); 
});




</script>