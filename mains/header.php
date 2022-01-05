<?php
 require_once('./admin/includes/_base.php');
 require_once('./admin/includes/_functions.php');

?>
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
    <meta property="og:url" content="https://www.itc-Rdc.com" />
    <meta property="og:image" content="assets/images/logoitcpng.png" />
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

     <link rel="shortcut icon" href="assets/images/logoitc.jpg">


    <title>ITC-RDC</title>
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
    .imgCar
    {
      width: 200px;
    }
  }
  body, html {
    height: 100%;
  }

  .scrolling-active
  {
    background-color: red;
  }

   .scrolling-active .navbar a
  {
    background-color: blue;
  }
  .scrolling-active .navbar 
  {
    height: 6.6rem;
  }
  </style>
  <body  style="background-image:url('assets/images/us.png'">
     <!-- <body style="background-image:url('assets/images/ground1.png');"> -->
  
      <div class="col-md-12 col-sm-12 md" style="background-color: rgb(10,74,145);padding:5px;">
        <div class="container">
          <div class="row" style="">
          <div class="col-md-8">
            <a href="mailto:info@itcrd.org" style="font-family:candara;color:white;"><i class="fa fa-envelope"></i>  ongitcrdc@gmail.com </a>
            
            <a href="#"style="font-family:candara;color:white;" class="ml-4"><i class="fa fa-phone"></i> +243991571461 </a>
          
           <a href="https://twitter.com/ezechiel_kawede"  class="ml-4" style="font-family:candara;color:white;"><i class="fa fa-clock-o"></i> Lundi - Samedi 8H - 16H | Samedi 8H - 12H</a>
          </div> 
           <div class="col-md-3" style="background-color: rgb(200,0,0);">
              
                <a href="sign_training" class="scrollto ml-4" style="color:white;">
                <span class="fa fa-file"></span>
                <span>Demande de formation</span>
              </a>
          </div>
        </div>
        </div>
      </div>
      <!-- <div class="col-md-12 col-sm-12 md" style="background-color:white;padding:5px;">
        <div class="container">
          <marquee direction="left"><span style="font-size:50px; color:black; font-weight:bold;">INTERNATIONAL TRAINING CENTER</span></marquee>
        </div>
      </div> -->
	 
  <marquee direction="left"><span style="font-size:50px; color: rgb(2,4,104); font-weight:bold;">INTERNATIONAL TRAINING CENTER</span></marquee>
  	<nav class="navbar navbar-expand-lg " style="background-color: white; background-image:url('assets/images/berb.jfif')"  >

	  <a class="navbar-brand" href="accueil">
	  	<img src="assets/images/logoitc.jpg" style="width:250px; ">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon" style=" border:1px solid black; border-radius:5px;background-color: rgb(2,4,104);" ></span>

	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding:10px;">

	    <ul class="navbar-nav ml-auto" >
        
	      <li class="nav-item active">
  	        <a class="nav-link" href="accueil" style="font-family:candara;color: rgb(2,4,104);font-size:20px;font-weight:bold;">Accueil <span class="sr-only"></span></a>
  	      </li>
          <li class="nav-item active">
            <a class="nav-link" href="formation" style="font-family:candara;color: rgb(2,4,104);font-size:20px; font-weight:bold; ">Nos programmes <span class="sr-only"></span></a>
          </li>
            <li class="nav-item active">
            <a class="nav-link" href="about"style="font-family:candara;color: rgb(2,4,104);font-size:20px;font-weight:bold;">A propos de nous <span class="sr-only"></span></a>
          </li>
             <li class="nav-item active">
            <a class="nav-link" href="contact"style="font-family:candara;color: rgb(2,4,104);font-size:20px;font-weight:bold;">Contact <span class="sr-only"></span></a>
          </li>
	         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="font-family:candara;color: rgb(2,4,104);font-size:20px;font-weight:bold;">
              Infos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="galeries" style="color:rgb(2,4,104);font-weight:bold;" >Galerie</a>
              <a class="dropdown-item" href="project" style="font-weight: bold;color:rgb(2,4,104); ">Nos projets</a>
            </div>
          </li>
      

	    </ul>
	    <form class="form-inline my-2 my-lg-0">
         <a href="sign_training"><button type="button" class="btn btn-light" style="border:1px solid black;">Demande de formation</button> </a> 
        <!-- <button class="btn btn-search1 my-2 my-sm-0 " type="submit"><i class="fa fa-globe "></i><a href="emploi"> Offres d'emploi </a></button> -->
	    </form>

	  </div>

	</nav>
  <script type="text/javascript">
    window.addEventListener('scroll', function(){
      let navbar = document.querySelector(".navbar");
      let windowPosition = window.scrollY > 0;
      navbar.classList.toggle('scrolling-active', windowPosition);

    })
  </script>
