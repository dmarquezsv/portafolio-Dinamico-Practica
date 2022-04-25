<?php session_start(); 

     if (isset($_SESSION['ms1'])) {
if ($_SESSION['ms1'] == "Correcto") {
     header("Location: Dashboard/index.php");
}
}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/dashlab-v1.3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Feb 2019 05:41:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="img/logos/logo.png">

    <title>Login</title>

    <!--web fonts-->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!--bootstrap styles-->
    <link href="Dashboard/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--icon font-->
    <link href="Dashboard/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="Dashboard/assets/vendor/dashlab-icon/dashlab-icon.css" rel="stylesheet">
    <link href="Dashboard/assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="Dashboard/assets/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
    <link href="Dashboard/assets/vendor/weather-icons/css/weather-icons.min.css" rel="stylesheet">

    <!--custom scrollbar-->
    <link href="Dashboard/assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet">

    <!--jquery dropdown-->
    <link href="Dashboard/assets/vendor/jquery-dropdown-master/jquery.dropdown.css" rel="stylesheet">

    <!--jquery ui-->
    <link href="Dashboard/assets/vendor/jquery-ui/jquery-ui.min.css" rel="stylesheet">

    <!--iCheck-->
    <link href="Dashboard/assets/vendor/icheck/skins/all.css" rel="stylesheet">

    <!--custom styles-->
    <link href="Dashboard/assets/css/main.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="plugin/sweetalert/sweetalert2.css">
 
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/html5shiv.js"></script>
    <script src="assets/vendor/respond.min.js"></script>
<![endif]-->



</head>

<body class="login-bg">
    
    <div class="container">
        <div class="row">
            <div class="col-xl-12 d-lg-flex align-items-center">
                <!--login form-->
                <div class="login-form">
                    <h4 class="text-uppercase text-purple text-center mb-5">Login</h4>

                    <form action="main/ValidarLogueo.php" id="formLogin" method="POST">
                        <div class="form-group">
            <input type='email' class='form-control' id='usuario' name='usuario' placeholder='Ingrese su correo'  required="true">
                        </div>
                        <div class="form-group mb-4">
           <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña"  required="true">
                        </div>

                        <div class="form-group clearfix">
                            <input type="submit" name="btn_validar" id="btn_validar" value="Iniciar Sesión" class="btn btn-purple  btn-block">
                            
                        </div>
                        <hr>
                        <a href="index.php" class="btn btn-facebook text-uppercase">Regresar home</a>
                    </form>
                </div>
                <!--/login form-->

                <!--login promo-->
                <div class="login-promo basic-gradient  text-white position-relative">
                    <div class="login-promo-content text-center">
                        <a href="index.php" class="mb-4 d-block">
                            <img class="pr-3" src="img/logos/logo.png" srcset="" alt="logo" class="img-fluid" style="width: 50%; height: 50%;">
                        </a>
                        <h1 class="text-white">Daniel Márquez</h1>
                        <p>Portafolio </p>
                        
                    </div>
                </div>
                <!--/login promo-->

            </div>
        </div>
    </div>

    <!--basic scripts-->
    <script src="Dashboard/assets/vendor/jquery/jquery.min.js"></script>
    <script src="Dashboard/assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="Dashboard/assets/vendor/popper.min.js"></script>
    <script src="Dashboard/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="Dashboard/assets/vendor/jquery-dropdown-master/jquery.dropdown.js"></script>
    <script src="Dashboard/assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="Dashboard/assets/vendor/icheck/skins/icheck.min.js"></script>

    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
<![endif]-->

<!--basic scripts initialization-->
<script src="Dashboard/assets/js/scripts.js"></script>

<script type="text/javascript" src="plugin/sweetalert/sweetalert2.js"></script>
<?php 
#en casi de que haya fallado la contrasena o el usuerio manda un alert
if (isset($_SESSION['ValidaEntrada'])) {
    if($_SESSION['ValidaEntrada'] == 'conexion')
    {
      echo "<script>swal({title:'Error',text:'Problemas a realizar la consulta',type:'warning'});</script>";
      $_SESSION['ValidaEntrada'] = 'Funciona';
  }else if($_SESSION['ValidaEntrada'] == 'NoExiste')
  {
     echo "<script>swal({title:'Error',text:'Usuario o Contraseña incorrecta',type:'error'});</script>";
      $_SESSION['ValidaEntrada'] = 'Funciona';
  }else if ($_SESSION['ValidaEntrada'] == 'token') {
     
     echo "<script>swal({title:'Error',text:'No ha verificado el token en tu correo',type:'warning'});</script>";
      $_SESSION['ValidaEntrada'] = 'Funciona';
  }

}


 ?>



</body>

<!-- Mirrored from thevectorlab.net/dashlab-v1.3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Feb 2019 05:41:36 GMT -->
</html>

