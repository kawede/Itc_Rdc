<?php  require_once('includes/_headersec.php'); ?>
<?php include('./pages/_barleft.php') ?>
<?php include('./pages/_content_values.php') ?>

<?php 
if(isset($_GET['delete']) and !empty($_GET['delete'])){
  $delete=htmlspecialchars($_GET['delete']);
  $myqwery=$db->prepare("DELETE FROM _admin where _id=:id");
  $myqwery->execute(array(
    'id'=>$delete
  ));
}

?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
               <?php 
            if(isset($_GET['Edit']) and !empty($_GET['Edit'])):
            $Edit=htmlspecialchars($_GET['Edit']);
            $myqwery=$db->prepare("SELECT * FROM cour where id=:id");
            $myqwery->execute(array(
            'id'=>$Edit
            ));
            if ($myqwery):
            $data=$myqwery->fetchAll(PDO::FETCH_OBJ);
            ?>

              
    
          <div class="row">
                  <?php
                 //exit(var_dump(isset($_POST['btninscrit'])));
                if (isset($_POST['btninscrit'])) {       
                 $id_cour = $_POST['id_cour'];
                 $designation = $_POST['designation'];
                 $pdf=Image_Compreser::UploadDocs('documents');        
                 if ($pdf) {
                   # code...
                 if ($id_cour && $designation ) {
                 $myqwery=$db->prepare("INSERT INTO cour_pdf (id_cour,designation,pdf) VALUES(:id_cour,:designation,:pdf)");
                 $myqwery->execute(array(
                  'id_cour'=> $id_cour,
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
            <div class="col-lg-12">
              
 
          
              <div class="card mb-4">
                <div class="card-header" style="color:black; font-weight: bold; font-family:candara;">
                  Mes Cours
                </div>
                <div class="card-body">
                     <a href="cour" class="btn btn-info"  name="btninscrit" style=" color:white; font-family: candara">
                 Nouveau cour
                </a>

                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#logoutModal12"   name="btninscrit" style="float:right; color:white; font-family: candara">
                 Cour pdf
                </a> 
        <div class="card shadow mb-4">
  <div class="card-header py-3">
   
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
        <thead>
          <tr>
            <th style="color:black; font-family: candara;">id</th>
            <th style="color:black; font-family: candara;">Titre</th>
            <th style="color:black; font-family: candara;">image</th>
            <th style="color:black; font-family: candara;">Description</th>
            <th style="color:black; font-family: candara;">prix</th>
       <!--      <th style="color:black; font-family: candara;">categorie</th> -->
            <th colspan="2" class="text-center"style="color:black; font-family: candara;">action</th>
          </tr>
        </thead>
          <tbody>
            <?php 
              $myqwery=$db->prepare("SELECT * FROM cour WHERE formateur=:formateur  ");
              $myqwery->execute(array("formateur"=>$Edit));
              $datas=$myqwery->fetchAll(PDO::FETCH_OBJ);
              foreach($datas as $token): 
            ?>
            <td> 
            <tr>
              <td class="text-black"style="color:black; font-family: candara;"><?=$token->id;?> </td>
              <td><span class="badge badge-pill badge-danger"style="color:white; font-family: candara;"><?=$token->cour_title;?></span></td>
              <td class="text-center" style="color:black; font-family: candara;"><img src="images/<?= $token->image;?>" width="60%" alt="Sample Article"></td> 
              <td style="color:black; font-family: candara;"><?=$token->description;?></td>
              <td style="color:black; font-family: candara;"><?=$token->Prix;?></td>
              <td class="text-center"><a href="_updatedCour.php?Edit=<?=$token->id;?>"><i class="fas fa-edit"style="color:black;" title="Voulz-vous vraiment modifiez un utilisateur?"></i></a></td> <td class="text-center " ><a href="?delete=<?=$token->id;?>" ><i class="fas fa-trash" style="color:black;" title="Voulz-vous vraiment supprimez un utilisateur?"></i></a></td>
            </tr> 
          </tbody>
        <?php endforeach ?>
      </table>

     
     </td>
    </div>
  </div>
</div>
               
                </div>
                <hr>
              </form>
              <?php endif;?>
              <?php endif;?> 
                </div>
              </div>
            </div>
          </div>
           </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      
   <?php include('mains/footer.php') ?>
   <script>
    function getanswer()
    {
      var key_value="1234567890@#$qwertyuiopasdfghjklzxcvbQWERTYUIOPASDFGHJKLZXCVBNM";
     var pwd_length=8;
     var create_result="";
      for(var i=0; i<pwd_length; i++){
        var generate_random_number =Math.floor(Math.random()*key_value.length);

        create_result+= key_value.substring(generate_random_number,generate_random_number+1);
      }
       document.getElementById("pwd_screen").value=create_result;
    }
     
  </script>
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
              <div class="form-group row">
                      <div class="col-sm-12">
                        <label style="font-weight: bold; font-family:candara;color: black;">Mes cour</label>
                              <select  class="form-control" required="" rows="9" name="id_cour" style="color:black; " >
                                <?php
                                 $select=$db->prepare("SELECT * FROM cour WHERE formateur=:formateur ");
                                 $select->execute(array("formateur"=>$Edit));
                          while 
                            ($s = $select->fetch(PDO::FETCH_OBJ)) {
                            ?>
                            <option value="<?php echo $s->id; ?>"><?php echo $s->cour_title; ?></option>
                            <?php
                            }
                          ?>  
                        </select>  
                      </div>
                    </div>
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
                <button class="btn btn btn-user btn-block" name="btninscrit" style="background-color:rgb(46,57,61); color:white;">
                  Ajouter pdf
                </button>
              </form>
        </div>
      </div>
    </div>
  </div>
