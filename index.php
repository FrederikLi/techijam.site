<?php

    session_start();

    include("Global.php");


    $page = isset($_GET['page']) ? $_GET['page'] : '';

    if($page == '' || $page == ' ' || $page == null)
    {
        $page = 'home';
    }
    if(($page != 'terms' && $page != 'contact') && ($_SESSION['login'] != true))
    {          
        $page = 'login';
    }


    include("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Techijam.site</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
<link rel="icon" href="img/core-img/favicon.ico">
	
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<!-- Photogallery --> 
<link href="css/photogallery.min.css" rel="stylesheet">

</head>
	
<body id="page-<?php echo $page; ?>">
	
	<!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
	
    <div class="super_container">
        <?php include("pages/header.php"); ?>
        <?php include("pages/" . $page . ".php"); ?>
        <?php include("pages/footer.php"); ?>
    </div>

	<!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
	<script src="js/photogallery.js"></script>
	<script>
      $(document).ready(function(){
        $('ul.first').bsPhotoGallery({
          "classes" : "col-xl-3 col-lg-2 col-md-4 col-sm-4",
          "hasModal" : true,
          "shortText" : false  
        });
      });
    </script>

    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
	
</body>

</html>
