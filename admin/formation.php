<?php  require_once('includes/_headersec.php'); ?>
<?php include('./pages/_barleft.php') ?>
<?php include('./pages/_content_values.php') ?>

<?php 
if(isset($_GET['delete']) and !empty($_GET['delete'])){
  $delete=htmlspecialchars($_GET['delete']);
  $myqwery=$db->prepare("DELETE FROM cour where id=:id");
  $myqwery->execute(array(
    'id'=>$delete
  ));
}

?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row"> 
            <?php
                 //exit(var_dump(isset($_POST['btninscrit'])));
                if (isset($_POST['btninscrit1'])) {       
                 $designation = $_POST['designation'];
                 $pdf=Image_Compreser::UploadDocs('documents');        
                 if ($pdf) {
                   # code...
                 if ($designation ) {
                 $myqwery=$db->prepare("INSERT INTO cour_pdf (designation,pdf) VALUES(:designation,:pdf)");
                 $myqwery->execute(array(
                  'designation'=> $designation,
                  'pdf'=> $pdf              
                 ));
                 
                 if ($myqwery){
                 echo '<b class="text-danger text-center alert alert-success"><i class="fa fa-check" aria-hidden="true"></i>  Document ajouté </b>';
                 }  
                
                 else {
                   echo'érreur';
                 }
                }
                 else{
                 echo '<br><br/><br/><br/><br/><h3 style="color:red;">Veuillez remplir tous les champs.</h3>';
                  }
                 } else{
                  echo '<br><br/><br/><br/><br/><h3 style="color:red;">Erreur fichier.</h3>';

                 }
              } else{
                /* echo '<br><br/><br/><br/><br/><h3 style="color:red;">Veuillez remplir tous les champs.</h3>';*/
                  }
               ?>
              <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#logoutModal12"   name="btninscrit" style="float:right; color:white; font-family: candara">
                 Ajouter module 
                </a> <br>

            <div class="col-lg-12">
              <!-- Default Card Example -->
              <div class="card mb-4">
                <div class="card-header"style="color:black; font-family:candara; font-weight:   bold;">
                   Nouvelle Formation
                </div>
                <div class="card-body">
                  <form action="" method="POST" enctype="multipart/form-data">  
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <input type="text" class="form-control" name="cour_title" id="exampleLastName" placeholder="Titre" style="font-family: candara; color:black">
                      </div>
                    </div>
                     <div class="form-group row">
                      <div class="col-sm-12">
                        <input type="file" style="color:black; font-family: candara;" class="form-control" required="" rows="9" name="image" placeholder="image" >
                      </div>
                    </div> 
                     <div class="form-group row">
                      <div class="col-sm-12">
                        <textarea type="text" class="form-control" name="description" id="exampleLastName" placeholder="Description" style="font-family: candara; color:black" rows="5"></textarea>
                      </div>
                    </div>
                       <div class="form-group row">
                      <div class="col-sm-12">
                        <select  class="form-control" required=""  rows="9" name="lieu" style="color:black; font-family: candara;" >
                            <?php $select=$db->query("SELECT * FROM region ORDER BY id DESC limit 20");
                          while ($s = $select->fetch(PDO::FETCH_OBJ)) {
                            ?>
                            <option value="<?php echo $s->designation; ?>"><?php echo $s->designation; ?></option>
                            <?php
                            }
                          ?>
                      </select>  
                      </div>
                    </div>
                     <!--   <div class="form-group row">
                      <div class="col-sm-12">
                        <textarea type="number" class="form-control" name="prix" id="exampleLastName" placeholder="Description" style="font-family: candara; color:black" rows="5"></textarea>
                      </div>
                    </div> -->
                    <button class="btn btn btn-user btn-block" name="btninscrit" style="background-color:rgb(46,57,61); color:white; font-family:candara;">
                  Nouvelle Formation
                </button>
                <hr>
              </form>

                   <?php
                 //exit(var_dump(isset($_POST['btninscrit'])));
                if (isset($_POST['btninscrit'])) {
                 $cour_title = $_POST['cour_title'];
                 $image=Image_Compreser::Compreser(300);
                 $description = $_POST['description'];
                 $lieu = $_POST['lieu'];  
                 $prix = $_POST['prix'];
                 if ($image) {
                   # code...
                 if ($cour_title && $description && $lieu && $prix) {
                 $myqwery=$db->prepare("INSERT INTO cour (cour_title,image,description,lieu,prix) VALUES(:cour_title,:image,:description,:lieu,:prix)");
                 $myqwery->execute(array(
                  'cour_title'=> $cour_title,
                  'image'=> $image,
                  'description'=> $description,
                  'lieu'=> $lieu,
                  'prix'=> $prix
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
                  </form> 
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      
        <div class="card shadow mb-4">
  <div class="card-header py-3">
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
        <thead>
          <tr>
            <th style="color:black; font-family:candara;">Id</th>
            <th style="color:black; font-family:candara;">titre</th>
            <th style="color:black; font-family:candara;">Image</th>
            <th style="color:black; font-family:candara;">Description</th>
             <th style="color:black; font-family:candara;">lieu</th>
            <th colspan="2" class="text-center" style="color:black; font-family:candara;">action</th>
          </tr>
        </thead>
        <tbody>
         <!-- selectionner les donnes de la base puis les affichees dans la table -->
        <?php 
         $myqwery=$db->prepare("SELECT * FROM cour");
         $myqwery->execute();
         foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
        ?>
          <tr>
            <td class="text-black" style="color:black; font-family:candara;"><?=$token->id;?> </td>
            <td style="color:black; font-family:candara;"><?=$token->cour_title;?></span></td>
            <td class="text-center" style="color:black; font-family: candara;"><img src="images/<?= $token->image;?>" width="30%" alt="Sample Article"></td>
            <td style="color:black; font-family: candara;"><?= substr($token->description,0,100);?><a href="#">  plus...</a> </td> 
             <!-- ajouter les boutons modifier et supprimer et les passes en paramettre pour supprimer et modifier -->
              <!-- ajouter les boutons modifier et supprimer et les passes en paramettre pour supprimer et modifier -->
            <td class="text-center"><a href="updateformation?Edit=<?=$token->id;?>"><i class="fas fa-edit"style="color:black;" title="Voulz-vous vraiment modifiez un utilisateur?"></i></a></td> <td class="text-center " ><a href="?delete=<?=$token->id;?>" ><i class="fas fa-trash" style="color:black;" title="Voulz-vous vraiment supprimez un utilisateur?"></i><a></td>
          </tr>
         <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php require_once('mains/footer.php'); ?>
<div class="modal fade" id="logoutModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"  style="color:black; font-weight: bold; font-family:candara;">Nouvau cour Pdf</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
             
          <div class="form-group row">
            <div class="col-sm-12 mb-3 mb-sm-0">
             <form action="" method="post" enctype="multipart/form-data">
              
                    <input type="text"style="color:black; font-family: candara;" class="form-control" name="designation"  id="exampleFirstName" placeholder="Titre du cour" >
                </div>
              </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="file" style="color:black; font-family: candara;" class="form-control" required="" rows="9" name="doc" placeholder="" >
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn btn-user btn-block" name="btninscrit1" style="background-color:rgb(46,57,61); color:white;">
                  Ajouter Module
                </button>
              </form>
        </div>
      </div>
    </div>
  </div>

