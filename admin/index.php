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

     <link rel="shortcut icon" href="assets/images/logof.png">

    <title>Dashboar</title>
  </head>

  <body>
  <div class="container-fluid ">
   
  <div class="row">

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <div class="sidenav-header-inner text-center"><img class="img-fluid rounded-circle avatar mb-3" src="img/avatar-7.jpg" alt="person">
          <h2 class="h5 text-white text-uppercase mb-0">Nathan Andrews</h2>
          <p class="text-sm mb-0 text-muted">Web Developer</p>
        </div>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="single" style="color:black; font-family:candara; font-weight:bold;">
              <i class='bx bxs-home-circle' ></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="newuser" style="color:black; font-family:candara; ">
              <i class="fa fa-users"></i>
            <i class='bx bxs-user' ></i>  Utilisateur
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="animateur"style="color:black; font-family:candara; ">
            <i class='bx bxs-user-plus' ></i> Animateur
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="photographe"style="color:black; font-family:candara;">
            <i class='bx bxs-user-plus' ></i> Photographe
            </a>
          </li> 
           <li class="nav-item">
            <a class="nav-link" href="decorateur"style="color:black; font-family:candara;">
            <i class='bx bxs-user-voice' ></i> Decorateurs
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="salle"style="color:black; font-family:candara;">
            <i class='bx bxs-home-smile'></i> Salle
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="commande"style="color:black; font-family:candara;">
            <i class='bx bxs-printer'></i> liste commandes
            </a>
          </li>
      </div>
        </ul>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5"> Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
           <p><input type="email" class="form-control" placeholder="Search"></p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
               <i class="fa fa-users mr-2"></i>
               <span>12</span>
              <p class="card-text" style="font-size:13px;font-family:candara;">
            photographes</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
             <div class="card-body">
               <i class="fa fa-users mr-2"></i>
               <span>12</span>
              <p class="card-text" style="font-size:13px;font-family:candara;">
            photographes</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
             <div class="card-body">
               <i class="fa fa-users mr-2"></i>
               <span>12</span>
              <p class="card-text" style="font-size:13px;font-family:candara;">
            photographes</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
             <div class="card-body">
               <i class="fa fa-users mr-2"></i>
               <span>12</span>
              <p class="card-text" style="font-size:13px;font-family:candara;">
            photographes</p>
            </div>
          </div>
        </div>
      </div>
      <br>
      <a href="salle" class="btn btn-primary" data-toggle="modal" data-target="#momModal">Ajouter</a>


  
    </main>
  </div>
</div>	
      <div class="modal fade" id="momModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Mon Modal</h4>
              <button type="button" class="close" data-dismiss="modal">X</button>
            </div>
             <div class="modal-body">
             <p>mamamama</p>
             </div> 
             <div class="modal-footer">
             <button type="button" class="close" data-dismiss="modal">fermer</button>
             </div>    
          </div>
        </div>
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