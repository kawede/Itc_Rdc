<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

     <link rel="shortcut icon" href="assets/images/logo.png">

    <title>Contact</title>
  </head>
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
  <body>
  
      <div class="col-md-12 col-sm-12 md" style="background-color: rgb(2,4,104); font-weight:bold;padding:5px;">
        <div class="container">
          <div class="row" style="">
          <div class="col-md-3">
            <a href="#" style="font-family:candara;font-weight:bold;color:white;"><i class="fa fa-facebook"></i> facebook </a>
          </div>
          <div class="col-md-3">
            <a href="#"style="font-family:candara;font-weight:bold;color:white;"><i class="fa fa-youtube"></i>Youtube </a>
          </div>
          <div class="col-md-3">
           <a href="#"style="font-family:candara;font-weight:bold;color:white;"><i class="fa fa-twitter"></i> Twitter</a>
          </div> 
           <div class="col-md-3">
           <a href="#"style="font-family:candara;font-weight:bold;color:white;"><i class="fa fa-phone"></i> +243977743843</a>
          </div>
        </div>
        </div>
      </div>
   

    <nav class="navbar navbar-expand-lg " style="background-color: white;"  >
    <a class="navbar-brand" href="#">
      <img src="assets/images/logof.png" style="width:250px; ">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding:10px;">
      <ul class="navbar-nav ml-auto" >
        <li class="nav-item active">
            <a class="nav-link" href="index.php" style="font-family:candara;color: rgb(2,4,104);font-weight: bold;font-size:18px;">Accueil <span class="sr-only"></span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="about.php" style="font-family:candara;color: rgb(2,4,104);font-weight: bold;font-size:18px;">A propos <span class="sr-only"></span></a>
          </li>
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="font-family:candara;color: rgb(2,4,104);font-weight: bold;font-size:18px;">
              Formations
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="blog.php" style="background-color:red;" >Anglais de Base</a>
              <a class="dropdown-item" href="#">Anglais Intermediares</a>
              <div class="dropdown-item">Anglais Avancé</div>
              <a class="dropdown-item" href="#">Cours</a>
            </div>
          </li>
      
             <li class="nav-item active">
            <a class="nav-link" href="contact.php"style="font-family:candara;color: rgb(2,4,104);font-weight: bold;font-size:18px;">Contact <span class="sr-only"></span></a>
          </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
         <button class="btn btn-search1 my-2 my-sm-0 mr-1" type="submit"><i class="fa fa-user "></i> S'inscription</button>    
        <button class="btn btn-search1 my-2 my-sm-0 " type="submit"><i class="fa fa-globe "></i></button>
      </form>
    </div>
  </nav><br>
   <!-- Class container here -->
   <div class="container">
     <div class="col-md-12">
       <div class="row">
         <div class="col-md-12">
            <div id="map">

          </div>
          <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
          <script src="assets/js/map.js"></script> 
            <script>
              (function($){

                  function populateLang() {
                    if (typeof localStorage !== 'undefined') {
                      var locale = localStorage.getItem('locale');
                      if (!locale) {
                        locale = 'FR'
                      }
                      $('.current-locale').html(locale)
                      doGTranslate('en|' + locale);
                    }
                  }

                  $(document).on('change', '.lang-selector, .mobile-lang-selector', function() {
                    var selectedLanguage = $(this).val();
                      doGTranslate('en|' + selectedLanguage);
                      if (typeof localStorage !== 'undefined') {
                        localStorage.setItem('locale',selectedLanguage);
                        populateLang();
                      }
                  })

                  populateLang();

              })(jQuery);
        </script>
         </div>
       </div>
     </div>
   </div>
   <div class="container">
     <div class="col-md-12">
       <div class="row">
         <div class="col-md-8 " >
            <h3 class="mt-2 text-center">Nous Contact</h3>
            <p class="text-center">Veuillez nous laisser un message electronique ou contactez-nous à travers nos informations de contact.</p>
            <div class="form">
                <div class="col-md-12 form-group">
              <input type="text" name="" class="form-control bg-white" placeholder="Entrer votre nome">
            </div>
              <div class="col-md-12 form-group" >
                 <input type="email" class="form-control bg-white" placeholder="votre email" name="">
              </div>
              <div class="col-md-12 form-group">
                 <input type="email" class="form-control bg-white" placeholder="votre email" name="">
              </div>
              <div class="col-md-12 form-group">
                <textarea class="form-control bg-white" cols="30" placeholder="Message *" ></textarea>
              </div>
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary btn-block" style="background-color: rgb(2,4,104); font-family: candara; border:1px solid rgb(2,4,104);">
                <i class="fa fa-send mr-1"></i> Envoyer
              </button>
            </div>
          </div>
         </div>
         <div class="col-md-4 mt-4">
              <div class="row">
                  <div class="col-md-12">
                    <h3>Nos Contacts</h3>
                     <hr>
                  </div>

                  <div class="col-md-12">
                    <i class="fa fa-clock-o mr-1" style="color: rgb(2,4,104); font-size:19px; "></i>  Ouvert 24h/24h -Lundi au samedi
                     <hr>
                  </div>

                  <div class="col-md-12">
                    <i class="fa fa-phone mr-1" style="color: rgb(2,4,104); font-size:19px; "></i>  <a href="tel:+243817883541"> +243817883541 </a>
                     <hr>
                  </div>
                  <div class="col-md-12">
                    <i class="fa fa-envelope mr-1" style="color: rgb(2,4,104); font-size:19px; "></i>  <a href="mailto:info@tapandpay.com"> info@tapandpay.com </a>
                     <hr>
                  </div>

                  <div class="col-md-12">
                    <i class="fa fa-map-marker mr-1" style="color: rgb(2,4,104); font-size:19px; "></i>  Situé sur le Boulevard Kanyamuhanga, la rue Vanny Bishweka, numero 20, au-dessus de SMICO, 2eme étage, Commune de Goma
                     <hr>
                  </div>
                </div>
         </div>
       </div>
     </div>
   </div>
   <footer class="w-100 py-4 flex-shrink-0" style="background-color: rgb(2,4,104); ">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <img src="assets/images/logof.png" style="width:250px; ">
                    <p class="small text-muted text-left">First choice est une industrie oeuvrant dans l’ingénierie humaine qui produit les meilleurs commerciaux pour aider les entreprises  à mieux commercialiser leurs produits et services</p>
                    <p class="small text-muted mb-0 text-left">&copy; Copyrights. First choice.
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-3">Nos Services</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#">Unique</a></li>
                        <li><a href="#">Performance</a></li>
                        <li><a href="#">Focus sur le marché</a></li>
                        <li><a href="#">Attractif</a></li>
                    </ul>
                </div>

               
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-3">Newsletter</h5>
                    <p class="small text-muted text-left">Soyez les premiers à recevoir les premières opportunités grace à notre messagerie directe</p>
                    <form action="#">
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" style="background-color: white; color:black">
                            <button class="btn btn-primary" id="button-addon2" type="button" style="background-color: rgb(248,148,22); border:1px solid:rgb(248,148,22)"><i class="fa fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="assets/js/map.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/css/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
  </body>
</html>