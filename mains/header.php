<?php require_once('./admin/model/database.php');?>
<!doctype html>
<html lang="en">
   <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Congo First Choice est une industrie oeuvrant dans l’ingénierie humaine qui produit les meilleurs commerciaux pour aider les entreprises à mieux commercialiser leurs produits et services. Congo First Choice s’occupe de la formation, le recrutement, l’étude du marché et la commercialisation de différents produits et services fourni par ses partenaires.Congo First Choice offre une possibilité aux commerciaux de se perfectionner en vente en bénéficiant de l’expérience et l’expertise de ses formateurs qui ont fait leur preuve en tant vendeurs brillaants.">
    <meta name="" author="firstchoice">
    <meta name="keyword" content="congo, commerciaux, First-Choice, formation, ventes, offre de formation, offre, emploi, inscription,entreprise,production,produits et services,formateurs,vendeurs brillaants">
    <!-- Shareable -->
    <meta property="og:title" content="" />
    <meta property="og:title" content="https://www.congofirstchoice.com" />
    <meta property="og:type" content="firstchoice" />
    <meta property="og:url" content="https://www.congofirstchoice.com" />
    <meta property="og:image" content="assets/images/logof.png" />
     <script src="assets/demo/demos.js"></script>
     <link href="assets/demo/demos.css" rel="stylesheet"/>
     <script src="assets/lib/typed.js" type="text/javascript"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
     <link rel="stylesheet" type="text/css" href="assets/css/font-awesome/css/font-awesome.min.css">
 
    <!-- hors connexion -->

    <!-- fontawason -->
   <!--  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome/css/font-awesome.min.css"> -->
    <link href="assets/css/google-font.css" rel="stylesheet">

     <link rel="shortcut icon" href="assets/images/logof.png">


    <title>First-Choice</title>
  </head>
  <!--  <script type="text/javascript">        
        if (window.location.protocol != "https:") {
           window.location.protocol = "https";
        }
          </script>  
      <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-XXXXX-Y', 'auto');
      ga('send', 'pageview');
      </script> -->
  <style type="text/css">
      /* ==========================================
    FOR DEMO PURPOSE
  ========================================== */


.text-small {
  font-size: 0.9rem;
}

a {
  color: inherit;
  text-decoration: none;
  transition: all 0.3s;
}

a:hover, a:focus {
  text-decoration: none;
}

.form-control {
  background: #212529;
  border-color: #545454;
}

.form-control:focus {
  background: #212529;
}

footer {
  background: #212529;
}
 #map {
     height: 400px;
  
     margin:2rem auto;
     }




/* ==========================================
    CUSTOM UTILS CLASSES
  ========================================== */

  @media only screen and (max-width: 500px ){
    .md{
      display: none;
    }
  }
  body, html {
    height: 100%;
  }
  </style>
  <body >
     <!-- <body style="background-image:url('assets/images/ground1.png');"> -->
  
      <div class="col-md-12 col-sm-12 md" style="background-color: rgb(2,4,104); font-weight:bold;padding:5px;">
        <div class="container">
          <div class="row" style="">
          <div class="col-md-3">
            <a href="https://www.facebook.com/First-Choice-100760638956198/" style="font-family:candara;font-weight:bold;color:white;"><i class="fa fa-facebook"></i> facebook </a>
          </div>
          <div class="col-md-3">
            <a href="mailto:
info@congofirstchoice.com"style="font-family:candara;font-weight:bold;color:white;"><i class="fa fa-envelope"></i> info@congofirstchoice.com </a>
          </div>
          <div class="col-md-3">
           <a href="https://twitter.com/ezechiel_kawede"style="font-family:candara;font-weight:bold;color:white;"><i class="fa fa-twitter"></i> Twitter</a>
          </div> 
           <div class="col-md-3">
           <a href="#"style="font-family:candara;font-weight:bold;color:white;"><i class="fa fa-phone"></i> +243977743843</a>
          </div>
        </div>
        </div>
      </div>
	 

  	<nav class="navbar navbar-expand-lg " style="background-color: white;"  >
	  <a class="navbar-brand" href="accueil">
	  	<img src="assets/images/logof.png" style="width:250px; ">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon" style=" border:1px solid black; border-radius:5px;background-color: rgb(2,4,104);" ></span>

	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding:10px;">
	    <ul class="navbar-nav ml-auto" >
	      <li class="nav-item active">
  	        <a class="nav-link" href="accueil" style="font-family:candara;color: rgb(2,4,104);font-weight: bold;font-size:18px;">Accueil <span class="sr-only"></span></a>
  	      </li>
          <li class="nav-item active">
            <a class="nav-link" href="about" style="font-family:candara;color: rgb(2,4,104);font-weight: bold;font-size:18px;">A propos <span class="sr-only"></span></a>
          </li>
	         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="font-family:candara;color: rgb(2,4,104);font-weight: bold;font-size:18px;">
              Formations
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="formation" style="background-color:rgb(2,4,104);color:white;font-weight: bold;" >Techniques des ventes</a>
              <a class="dropdown-item" href="formation" style="font-weight: bold;color:rgb(2,4,104); ">Anglais Intermediares</a>
            </div>
          </li>
      
             <li class="nav-item active">
            <a class="nav-link" href="contact"style="font-family:candara;color: rgb(2,4,104);font-weight: bold;font-size:18px;">Contact <span class="sr-only"></span></a>
          </li>

	    </ul>
	    <form class="form-inline my-2 my-lg-0">
         <button class="btn btn-search1 my-2 my-sm-0 mr-1" type="submit"style="color: white;"><i class="fa fa-user " ></i><a href="inscription"> S'inscription</a></button>    
        <!-- <button class="btn btn-search1 my-2 my-sm-0 " type="submit"><i class="fa fa-globe "></i><a href="emploi"> Offres d'emploi </a></button> -->
	    </form>
	  </div>
	</nav>