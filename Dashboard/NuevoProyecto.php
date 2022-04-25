
<?php 
include_once 'templates/cabecera.php';
?>
<title>Dashbord | Inicio</title>
<?php include_once 'templates/estilos.php'; 
include_once 'templates/MenuHorizontal.php';?>





         <!--page title-->
         <div class="page-title mb-4 d-flex align-items-center">
            <div class="mr-auto">
                <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Panel Proyectos</h4>
                <nav aria-label="breadcrumb" class="d-inline-block ">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item active"><a href="Usuario">Nuevos Proyectos</a></li>

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
                                <div class="custom-title">Formulario del proyecto</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="stepy-tab">
                                <ul id="default-titles" class="stepy-titles">
                                    <li id="default-title-0" class="current-step">
                                        <div>Datos Proyectos</div>
                                    </li>
                                    <li id="default-title-1" class="">
                                        <div>Step 2</div>
                                    </li>
                                   
                                </ul>
                            </div>
                            <form class="" id="default" method="POST" action="modelos/NuevoProyecto.php">
                                <fieldset title="Step1" class="step" id="default-step-0">
                                    <legend> </legend>

                                    <h5 class="mb-3">Información del proyecto</h5>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Titutlo Proyecto</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Nombre Proyecto" name="Titutlo" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Descripcion</label>
                                        <div class="col-sm-8">
                                             <textarea class="form-control" cols="60" rows="5" name="Descripcion" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Tipo</label>
                                        <div class="col-sm-8">
                                            <select name="tipo" class="form-control" required name="tipo">
                                                <option value="" selected disabled >Seleccione una opción</option>
                                                <option value="Desarrollo web">Desarrollo web</option>
                                                <option value="Desarrollo desktop">Desarrollo desktop</option>
                                                <option value="Desarrollo cmd">Desarrollo cmd</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Fecha Inicio</label>
                                        <div class="col-sm-8">
                                            <div class="input-group date dpYears" data-date-viewmode="years" data-date-format="dd-mm-yyyy" >
                                                <input type="text" class="form-control" placeholder="03-10-2018" aria-label="Right Icon" aria-describedby="dp-ig" name="FechaInicio" required>
                                                <div class="input-group-append">
                                                    <button id="dp-ig" class="btn btn-outline-secondary" type="button"><i class="fa fa-calendar f14"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Fecha Finalización</label>
                                        <div class="col-sm-8">
                                            <div class="input-group date dpYears" data-date-viewmode="years" data-date-format="dd-mm-yyyy" >
                                                <input type="text" class="form-control" placeholder="03-10-2018" aria-label="Right Icon" aria-describedby="dp-ig" name="FechaFin" required>
                                                <div class="input-group-append">
                                                    <button id="dp-ig" class="btn btn-outline-secondary" type="button"><i class="fa fa-calendar f14"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                <fieldset title="Step 2" class="step" id="default-step-1" >
                                    <legend> </legend>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Empresa Encargada</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Nombre Proyecto" name="empresa" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Sastifaciónn</label>
                                        <div class="col-sm-8">
                                             <select class="form-control" required name="estrellas">
                                                <option value="" selected disabled >Seleccione una opción</option>
                                                <option value="1">1 Estrella </option>
                                                <option value="2">2 Estrella</option>
                                                <option value="3">3 Estrella</option>
                                                <option value="4">4 Estrella</option>
                                                <option value="5">5 Estrella</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                   <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Url video de Youtube </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Nombre Proyecto"  name="urlYoutube">
                                        </div>
                                    </div>


                                     <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Url de la web</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Nombre Proyecto" name="urlWeb">
                                        </div>
                                    </div>


                                     <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Estado</label>
                                        <div class="col-sm-8">
                                             <select  class="form-control" required name="estado">
                                                <option value="" selected disabled >Seleccione una opción</option>
                                                <option value="Activo">Activo </option>
                                                <option value="Pendiente">Pendiente</option>
                                                <option value="Finalizado">Finalizado</option>
                                                <option value="Pausa">Pausa</option>
                                            </select>
                                        </div>
                                    </div>

                                </fieldset>
                                
                                <input type="hidden" name="id" value="<?php  echo $_SESSION['iduser'];  ?>" >

                <input type="submit" class="finish btn btn-danger" value="Finalizar" name="btnAgregar" />
                            </form>
                        </div>
                    </div>
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










