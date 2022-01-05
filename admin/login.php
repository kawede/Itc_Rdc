<?php 
require_once('includes/_headersec.php');
$USER=new Users($db);
?>
<?php   
    $output = '';
    if(isset($_POST['_email']) && isset($_POST['_motpasse'])){
        $state = $USER->onSignin(trim($_POST['_email']), ($_POST['_motpasse']), '_admin');
        if(is_array($state)){
            $status = (int) $state['status'];
            switch ($status) {
                case 200:
                    $output = "user granted";
                    ?>
                    <script>
                        window.location.replace('home.php');
                        // alert(200)
                    </script>
                    <?php
                    // 
                    // header("location : httts://google.com");
                    // 
                    break;
                case 500: 
                    $output = "serveur error";
                    break;
                case 405:
                    $output = "unknow user";
                    break;
                default:
                    $output = "serveur error";
                    break;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body class="bg-gradient">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-lg-12" >
                <div class="p-5">
                  <div class="text-center">
                    <i class="fa fa-user" style="font-size:30px;color:black;"></i>
                  </div>
                  <br>
                   <?php
                        if (isset($output)) {
                            echo "<div style='color: red; font-weight: bold' class='pt-2 col-lg-12 text-center'> $output  </div>";
                        }
                    ?>
                  <form action="" method="POST">
                    
                    <div class="form-group">
                      <input type="email" class="form-control" name="_email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Saisir une adresse email" required=""  style="color:black;font-family:candara;">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="_motpasse" id="exampleInputPassword" placeholder="Saisir le mot de passe" required=""  style="color:black;font-family:candara;" >
                    </div>
                    <div class="form-group">
                      
                    </div>
                    <button class="btn btn- btn-user btn-block" name="btnlogin" style="background-color:rgb(46,57,61); color:white;">
                      Se connecter                 
                    </button>
                             
                    <hr>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
