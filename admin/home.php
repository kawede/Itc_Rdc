
<?php 
require_once('includes/_headersec.php');
require('./pages/_barleft.php');
require('./pages/_content_values.php');
 ?>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
             <?php
                 //exit(var_dump(isset($_POST['btninscrit'])));
                if (isset($_POST['btninscritgalerie'])) {
                 $titre = $_POST['titre'];
                 $image=Image_Compreser::Compreser(300);
                 if ($image) {
                   # code...
                 if ($titre) {
                 $myqwery=$db->prepare("INSERT INTO galerie (titre,image) VALUES(:titre,:image)");
                 $myqwery->execute(array(
                  'titre'=> $titre,
                  'image'=> $image
                 ));
                 
                 if ($myqwery){
                 echo '<b class="text-danger text-center alert alert-success"><i class="fa fa-check" aria-hidden="true"></i>  Enregistrement reusi </b>';
                 }  
                
                 else {
                   echo'érreur';
                 }
                }
                 else{
                 echo '<br><br/><br/><br/><br/><h3 style="color:red;">Veuillez remplir tous les champs.</h3>';
                  }
                 } 
              }
               ?> 

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4"  >
            <h3 class="h3 mb-0-800" style=" font-family:  candara; color:  black; font-weight:bold;">Tableau de bord</h3>

            <?php 
                if(isset($_SESSION['uservisiteur']['niveau'])){
                  if($_SESSION['uservisiteur']['niveau'] === '1'){ 
            ?> 
            <a href="sign_training" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"  style="font-weight:bold;"> Liste des inscrits</a> 
                <a href="#" data-toggle="modal" data-target="#logoutModal12ww3" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"  style="font-weight:bold;"> Galeries</a>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-toggle="modal" data-target="#logoutModal12" style="font-weight:bold;"><i class="fas fa-download fa-sm text-white-50"></i> Annonce</a>
             <?php   
                }
              }
            ?> 
          </div>

          <!-- Content Row -->
          <div class="row">
     
   
      <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                  
                    <div class="col mr-2">
                      <div  style=" font-family:  candara; color:  black; font-weight:bold;">Utilisateurs</div>
                      <div class="h5 mb-0 font-weight-bold "style=" font-family:  candara; color:  black; font-weight:bold;"><?php echo(comptUtiLISATEUR($db)) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div style=" font-family:  candara; color:  black; font-weight:bold;">Cours</div>
                      <div class="h5 mb-0 font-weight-bold "style=" font-family:  candara; color:  black; font-weight:bold;"><?php echo(comptCour($db)) ?> </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users color-black fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
               <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div  style=" font-family:  candara; color:  black; font-weight:bold;">Programmes</div>
                      <div class="h5 mb-0 font-weight-bold "style=" font-family:  candara; color:  black; font-weight:bold;"><?php echo(comptprogramme($db)); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users color-black fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            
             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div  style=" font-family:  candara; color:  black; font-weight:bold;">Formations</div>
                      <div class="h5 mb-0 font-weight-bold "style=" font-family:  candara; color:  black; font-weight:bold;"><?php echo(countfomateur($db)); ?>
                         
                      </div>

                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users color-black fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         
            
          

       
          </div>

          
        </div>
        <!-- /.container-fluid -->

      </div>
      <div class="container-fluid">
        <div class="row">
         
            <div class="col-md-4">
               <?php 
             $myqwery=$db->prepare("SELECT _admin._id, _admin._nom,_admin._email, _admin.linkdn, _admin.image,role._name FROM _admin INNER JOIN role ON _admin._idrole= role._id ORDER BY _id Asc limit 1 ");
             $myqwery->execute();
             foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
            ?>
            <img src="images/<?= $token->image;?>" class="img-thumbnail" alt="Sample Article"></td>
            <span style="color:black;font-family:candara;"><?=$token->_nom; ?></span><br>
            <span style="color:blue;font-family:candara;"><?=$token->_email; ?></span>

             <?php endforeach ?>
            </div>
       

          <div class="col-md-8">
        
              <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-family: candara; color:red;font-weight: bold;">
          Annonce 1
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <?php 
         $myqwery=$db->prepare("SELECT *FROM annonce ORDER BY date  DESC limit 1");
         $myqwery->execute();
         foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
        ?>
      <div class="card-body" style="font-family: candara; color:black; text-align: justify;">
        <span style="float:right;color:red;font-weight: bold;font-size:15px;font-family: tahoma;"><?=$token->date;?> </span><br>
        <?=$token->annonce;?> 
      </div>
         <?php endforeach ?>
    </div>
  </div>
      <?php 
         $myqwery=$db->prepare("SELECT *FROM annonce ORDER BY date  ASC limit 3");
         $myqwery->execute();
         foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
        ?>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1" style="font-family: candara; color:red;font-weight: bold;">
           <?=$token->id_proprietaire;?> 
        </button>
      </h2>
    </div>
    <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body"  style="font-family: candara; color:black; text-align: justify;">
         <?=$token->annonce;?> 
      </div>
    </div>
  </div>
   <?php endforeach ?>
  
</div>    
            </div>
          
        </div>

      </div>
      <!-- End of Main Content -->
       <div class="modal fade" id="logoutModal12ww3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"  style="color:black; font-weight: bold; font-family:candara;">Nouvelle Galerie</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
                  
             
          <div class="form-group row">
            <div class="col-sm-12 mb-3 mb-sm-0">
             <form action="" method="post" enctype="multipart/form-data">
              
                    <input type="text"style="color:black; font-family: candara;" class="form-control" name="titre"  id="exampleFirstName" placeholder="Titre du cour" >
                </div>
              </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="file" style="color:black; font-family: candara;" class="form-control" required="" rows="9" name="image" placeholder="" >
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn btn-user btn-block" name="btninscritgalerie" style="background-color:rgb(46,57,61); color:white;">
                  Nouvelle activité
                </button>
              </form>
        </div>
      </div>
    </div>
  </div>



  
  


    <?php include('mains/footer.php') ; ?>
    <div class="modal fade" id="logoutModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"  style="color:black; font-weight: bold; font-family:candara;">Nouvelle annonce</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
                <?php
                 //exit(var_dump(isset($_POST['btninscrit'])));
                if (isset($_POST['btninscrit1'])) {
                 $annonce = $_POST['annonce'];
                 $id_proprietaire  = $_POST['id_proprietaire'];
                 if ($annonce && $id_proprietaire) {
                 $myqwery=$db->prepare("INSERT INTO annonce (annonce,id_proprietaire) VALUES(:annonce,:id_proprietaire)");
                 $myqwery->execute(array(
                  'annonce'=> $annonce,
                  'id_proprietaire'=> $id_proprietaire
                
                 ));
                 
                 if ($myqwery){
                 // echo '<b class="text-danger text-center alert alert-success"><i class="fa fa-check" aria-hidden="true"></i>  Enregistrement reusi </b>';
                 }  
                
                 else {
                   echo'érreur';
                 }
                }
                 else{
                 echo '<br><br/><br/><br/><br/><h3 style="color:red;">Veuillez remplir tous les champs.</h3>';
                  }
                 } 
              
               ?>  
             
          <div class="form-group row">
            <div class="col-sm-12 mb-3 mb-sm-0">
             <form action="" method="post" enctype="multipart/form-data">
               <div class="form-group row">
                <div class="col-sm-12">
                  <textarea type="text" class="form-control" name="annonce" id="exampleLastName" placeholder="Description" style="font-family: candara; color:black" rows="5"></textarea>
                </div>
              </div>
              <div class="form-group row">
                      <div class="col-sm-12">
                        <input type="text" class="form-control" name="id_proprietaire" id="exampleLastName" placeholder="Titre" style="font-family: candara; color:black; display: none" value="<?php echo $_SESSION['uservisiteur']['user_nom']; ?>">
                      </div>
                    </div>
              <div class="modal-footer">
                <button class="btn btn-primary btn-block" name="btninscrit1" >
                 Publier
                </button>
              </form>
        </div>
      </div>
    </div>
  </div>

 