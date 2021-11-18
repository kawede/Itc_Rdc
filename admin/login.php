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
   
    <link rel="stylesheet" href="assets/css/bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
     <link rel="stylesheet" type="text/css" href="assets/css/font-awesome/css/font-awesome.min.css">
 
    <!-- hors connexion -->

    <!-- fontawason -->
   <!--  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome/css/font-awesome.min.css"> -->
    <link href="assets/css/google-font.css" rel="stylesheet">

     <link rel="shortcut icon" href="assets/images/logo.png">

    <title>Login</title>
  </head>
 

   <div class="container mt-4" >
     <div class="col-md-12">
       <div class="row">
        <div class="col-md-3"></div>
         <div class="col-md-6 p-5 card " style=";margin-top:100px;">
         
            <form  class="mt-2" method="POST" autocomplete="off" action="" id="my_form">
                <h3 class="text-center"><i class="fa fa-user"></i> Se connecter</h3>
          <div class="col-md-12 form-group message"></div>
                <div class="col-md-12 form-group">
                  <input type="text" name="name1" id="name"class="form-control bg-white" placeholder="nom " >
                  <span class="text-danger" id="error_name"></span>
                </div>
              <div class="col-md-12 form-group" >
                 <input type="password" class="form-control bg-white" placeholder="mot de passe *" name="pwd" id="pwd">
                 <span class="text-danger" id="error_pwd"></span>
              </div>
              
              
              <div class="col-md-12 form-group">
                <button type="submit" class="btn btn-primary btn-block" style="background-color: rgb(2,4,104); font-family: candara; border:1px solid rgb(2,4,104);">
                  <i class="fa fa-sign-in mr-1"></i> Se Connecter
                </button>
              </div>
          </form>
         </div>
         <div class="col-md-3"></div>
       </div>
     </div>
   </div>

 
</div>
   <script src="assets/js/Event.js"></script>
  
    <script src="assets/css/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
  </body>
</html>