<?php  require_once('includes/_headersec.php'); ?>
<?php include('./pages/_barleft.php') ?>
<?php include('./pages/_content_values.php') ?>

<?php 
if(isset($_GET['delete']) and !empty($_GET['delete'])){
  $delete=htmlspecialchars($_GET['delete']);
  $myqwery=$db->prepare("DELETE FROM region where id=:id");
  $myqwery->execute(array(
    'id'=>$delete
  ));
}

?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

              
    
          <div class="row">

            <div class="col-lg-12">

              <!-- Default Card Example -->
              <div class="card mb-4">
                <div class="card-header"style="color:black; font-family:candara; font-weight:   bold;">
                   Nouvelle Region
                </div>
                <div class="card-body">
                  <form action="" method="POST">
                   
                     
                    <div class="form-group row">
                      
                      <div class="col-sm-12">
                        <input type="text" class="form-control" name="designation" id="exampleLastName" placeholder="Nouvelle region" style="font-family: candara; color:black">
                      </div>
                    </div> 
                    <button class="btn btn btn-user btn-block" name="btninscrit" style="background-color:rgb(46,57,61); color:white;">
                  Nouvelle Region
                </button>
                <hr>
              </form>
                <?php
                 //exit(var_dump(isset($_POST['btninscrit'])));
                if (isset($_POST['btninscrit'])) {
                 $designation = $_POST['designation'];
                 if ($designation) {
                 $myqwery=$db->prepare("INSERT INTO region (designation) VALUES(:designation)");
                 $myqwery->execute(array(
                  'designation'=> $designation
                
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
            <th style="color:black; font-family:candara;">Designation</th>
            <th colspan="2" class="text-center" style="color:black; font-family:candara;">action</th>
          </tr>
        </thead>
        <tbody>
         <!-- selectionner les donnes de la base puis les affichees dans la table -->
        <?php 
         $myqwery=$db->prepare("SELECT * FROM region   ");
         $myqwery->execute();
         foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
        ?>
          <tr>
            <td class="text-black" style="color:black; font-family:candara;"><?=$token->id;?> </td>
            <td style="color:black; font-family:candara;"><?=$token->designation;?></span></td>
             <!-- ajouter les boutons modifier et supprimer et les passes en paramettre pour supprimer et modifier -->
              <!-- ajouter les boutons modifier et supprimer et les passes en paramettre pour supprimer et modifier -->
            <td class="text-center"><a href="modification/_updateUser.php?Edit=<?=$token->id;?>"><i class="fas fa-edit"style="color:black;" title="Voulz-vous vraiment modifiez un utilisateur?"></i></a></td> <td class="text-center " ><a href="?delete=<?=$token->id;?>" ><i class="fas fa-trash" style="color:black;" title="Voulz-vous vraiment supprimez un utilisateur?"></i><a></td>
          </tr>
         <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php require_once('mains/footer.php'); ?>