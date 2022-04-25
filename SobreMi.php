<?php 
      include_once 'templates/head.php'; 
?>
<title>Portafolio | Daniel Márquez</title>
<?php 
      include_once 'templates/styles.php';
      include_once 'templates/menu.php';
 ?>

  <!-- start banner Area -->
			<section class="relative about-banner">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
							Sobre Mi		
							</h1>	
				<p class="text-white link-nav"><a href="index.php">Inicio </a>  <span class="lnr lnr-arrow-right"></span><a href="SobreMi.php">Experiencia profesionales</a> </p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->



			<!-- Start home-about Area -->
			<section class="home-about-area section-gap">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 home-about-left">
							<img class="img-fluid" src="img/perfilNuevo2.png" alt="" width="400px" >
						</div>
						<div class="col-lg-5 col-md-6 home-about-right">
							<h6>Sobre Mi</h6>
							<h1 class="text-uppercase">Detalles personales</h1>
							<p style="text-align: justify;">
								AQUI VA EL CODIGO PHP
							</p>
							
						</div>
						<div class="col-lg-12 pt-60">
							<h2 class="pt-30">Conociminetos Técnicos</h2><br>	
						</div>
					</div>
					<div class="row skillbar-wraps">					
						<div class="col-lg-6 skill-left">
							<h3>Desarrollo Web</h3>
							<div class="single-skill">
								<p>
									Desarrollo de php 75%
								</p>
								<div class="skill" data-width="75"></div>
							</div>																											
						</div>
						<div class="col-lg-6 skill-right">
								<h3>Desarrollo Software</h3>
							<div class="single-skill">
								<p>
									MYSQL Y SQL Server 60%
								</p>
								<div class="skill" data-width="60"></div>
							</div>								
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->

			<!-- Start timeline Area -->
			<section class="timeline pb-120">
            <div class="text-center">
                <div class="menu-content pb-70">
                    <div class="title text-center">
                        <h1 class="mb-10">EXPERIENCIA LABORAL</h1>
                        <p>Registro campo labora</p>
                    </div>
                </div>
            </div>				
			  <ul>
			    <li>
			      <div class="content">
			        <h4>
			        	<img class="img-fluid mx-auto d-block mb-30" src="img/Exp1.png" width="70px" alt="">
			          <time>Programa Oportunidades Fundación Gloria De Kriete</time>
			        </h4>
			        <p><b>Desempeñó:</b>Creación de sistema web en desarrollo de PHP Y MYSQL</p>
			        <p><b>Logros:</b>Pasante</p>
			      </div>
			    </li>
			    <li>
			      <div class="content">
			        <h4>
			          <time>FUNDAHMER Fundación Hermano Mercedes Ruiz </time>
			        </h4>
			        <p> Instructor en diseño web</p>
			      </div>
			    </li>
			 
			  
			  </ul>
			</section>		

			<!-- End timeline Area -->	


 <?php 
     	include_once 'templates/footer.php';
 		include_once 'templates/script.php';
  ?>