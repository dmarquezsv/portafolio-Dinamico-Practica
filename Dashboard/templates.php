<?php 
    
    include_once 'modelos/ModelosUsuario.php';
    $conexion  = new ModelosUsuario();

 ?>

<?php 
include_once 'templates/cabecera.php';
?>
<title>Dashbord | Inicio</title>
<?php include_once 'templates/estilos.php'; 
include_once 'templates/MenuHorizontal.php';?>





         <!--page title-->
         <div class="page-title mb-4 d-flex align-items-center">
            <div class="mr-auto">
                <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Panel Usuarios</h4>
                <nav aria-label="breadcrumb" class="d-inline-block ">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item active"><a href="Usuario">Nuevos Usuarios</a></li>

                    </ol>
                </nav>
            </div>
        </div>
        <!--/page title-->


        <div class="row">
            <div class="col-xl-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-primary">
                            <div class="custom-title"><button type="button" class="btn btn-purple" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar Usuario</button>

                            
                            </div>
                        </div>
                    </div>
                    <div class="card-body- pt-3 pb-4">
                        <div class="table-responsive">
                            <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                                <thead>
                                    <tr>
                                       <th>ID</th>
                                     <th>Nombre</th>
                                     <th>Correo</th>
                                     <th>estado</th>
                                     <th>Fecha Registro</th>
                                     <th>Opción 1</th>
                                     <th>Opción 2</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                     <th>ID</th>
                                     <th>Nombre</th>
                                     <th>Correo</th>
                                     <th>estado</th>
                                     <th>Fecha Registro</th>
                                     <th>Opción 1</th>
                                     <th>Opción 2</th>
                                 </tr>
                             </tfoot>
                             <tbody>
                              
                             
                          

                            </tbody>
                        </table>
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
        <h5 class="modal-title" id="exampleModalLabel">Eliminar el usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <p>Seguro que desea eliminar</p>
          <input type="text" name="" id="nombreuser" class="form-control"  disabled="true">
          <input type="hidden" name="iduser" id="iduser">
          

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          <input type="submit" name="Eliminar" value="Eliminar" class="btn btn-danger">
        </div>
      </form>
    </div>
  </div>
</div>
</div>











<?php 
	  include_once 'templates/footer.php';
	  include_once 'templates/MenuVertical.php';
	  include_once 'templates/script.php';
    include_once 'templates/alertas.php';

 ?>










