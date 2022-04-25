<?php 
	
session_start();
$iduser = $_SESSION['iduser'];
$name = $_SESSION['nombre'];
$img = $_SESSION['imguser'];
error_reporting(0);
  if ($iduser == null || $iduser = "") {
  	header("Location: ../login.php");
  	die();
  }

 ?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/dashlab-v1.3/layout-top-nav.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Feb 2019 05:41:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="../img/logos/logo_menu.png">