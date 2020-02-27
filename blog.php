<?php
/* ini_set('display_errors', '1');
date_default_timezone_set('America/Mexico_City');
echo date('Y-m-d H:i:s');*/
include_once("Connection/Connection.php");
include_once("functions/functions.php"); 
$server = 'https://'.$_SERVER['SERVER_NAME'];
$Contenido = $_GET['Contenido'];
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Medico Hematologo Cuautla Morelos</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Especialista Medico Internista y Hematologo" />
	<meta name="keywords" content="Medico, Hematologo, Cuautla, Morelos, Cancer, Medicina, Caridad, Donacion
	" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="icon" href="<?php echo $server;?>/images/icono.ico" >

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	
	<link rel="stylesheet" href="<?php echo $server;?>/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo $server;?>/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo $server;?>/css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="<?php echo $server;?>/css/superfish.css">

	<link rel="stylesheet" href="<?php echo $server;?>/css/style.css">


	<!-- Modernizr JS -->
	<script src="<?php echo $server;?>/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<?php 
		include('modulos/header_top.php');
		?>
		<?php 
		include('modulos/menu.php'); 
		?>
		
		

		<?php 
		include('modulos/banner.php');
        ?>
        
            <?php
            include('modulos/info_blog.php');
            ?>
		
		<!-- fh5co-blog-section -->
		
			<?php include ('modulos/final.php');?>
		
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="<?php echo $server;?>/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo $server;?>/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo $server;?>/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo $server;?>/js/jquery.waypoints.min.js"></script>
	<script src="<?php echo $server;?>/js/sticky.js"></script>

	<!-- Stellar -->
	<script src="<?php echo $server;?>/js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="<?php echo $server;?>/js/hoverIntent.js"></script>
	<script src="<?php echo $server;?>/js/superfish.js"></script>
	
	<!-- Main JS -->
	<script src="<?php echo $server;?>/js/main.js"></script>

	</body>
</html>

