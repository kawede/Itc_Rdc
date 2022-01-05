<?php  require_once('includes/_base.php'); ?>
<?php include('./pages/_barleft.php') ?>
<?php include('./pages/_content_values.php') ?>
 <!-- Verification et suppression -->
<?php 
if(isset($_GET['delete']) and !empty($_GET['delete'])){
  $delete=htmlspecialchars($_GET['delete']);
  $myqwery=$db->prepare("DELETE FROM _eleve where _id=:id");
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
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800" style="color:black; font-family:candara;" ><i class="fas fa-user fa-sm fa-fw mr-2 text-black-400"></i> Effectuer une Modification</h1>
          </div>
          <div class="row">

            <div class="col-lg-12">
            <form action="" method="POST"> 
              <!-- Default Card Example -->
              <div class="card mb-4">
                <div class="card-header"style="color:black; font-family:candara;">
                  Effectuer une Modification
                </div>
                   <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data">

                    <div class="form-group row">
                      <div class="col-sm-12 mb-3 mb-sm-0">
                        <input type="text" class="form-control "style="color:blue; font-weight: bold; font-family:candara;" value="<?=$data[0]->cour_title?>" style="color:black; font-family:candara;"name="cour_title"  id="exampleFirstName" placeholder="Titre evenement" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-12">
                           <td><input type="file" name="image" value="<?=$data[0]->image?>"/><img src="./images/<?=$data[0]->image;?>" width="30%" height="70%" alt="Sample Article"></td>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <textarea  class="form-control"style="color:blue; font-weight: bold; font-family:candara;" required="" rows="9" name="description" placeholder="Detail de l'evenement"style="color:black; font-family:candara;" ><?=$data[0]->description?> </textarea>
                      </div>
                    </div>
                     <div class="form-group row">
                      <div class="col-sm-12">
                        <input type="text"  class="form-control"value="<?=$data[0]->Prix?>"style="color:blue; font-weight: bold; font-family:candara;" required="" style="color:black; font-family:candara;"rows="9" name="Prix" placeholder="Detail de l'evenement" >
                      </div>
                    </div>
                     <div class="form-group row">
                      <div class="col-sm-12">
                              <select  class="form-control" required="" readonly="" rows="9" name="idcategorie" style="color:black;" >
                                <?php $select=$db->query("SELECT * FROM categorie");
                          while ($s = $select->fetch(PDO::FETCH_OBJ)) {
                            ?>
                            <option value="<?php echo $s->id; ?>"><?php echo $s->designation; ?></option>
                            <?php
                            }
                          ?> 
                        </select>  
                      </div>
                    </div>
                     
                   
                    </div>
                  
                    <button class="btn btn btn-user btn-block" name="btninscrit" style="background-color:rgb(46,57,61); color:white;">
                   Mettre à Jour
                </button>
              </form>
            </div>
               </div>
                <?php endif;?>
                <?php endif;?> 

            
                 </div>
                </form>
               
                
                
                 <!-- Enregistres les donnes avec la methode prepare-->
            
                <?php
                   if(isset($_POST['btninscrit'])){
                    if (isset($_GET['Edit']) and !empty($_GET['Edit'])) {       
                    $id = $_GET['Edit'];
                    $cour_title = $_POST['cour_title'];
                     $image=Image_Compreser::Compreser(300);
                     $description = $_POST['description'];
                     $Prix = $_POST['Prix'];  
                     $idcategorie =$_POST['idcategorie'];
                 if ($cour_title && $description && $Prix && $idcategorie) {
                    $sql="UPDATE cour SET cour_title=:cour_title, image=:image, description=:description,Prix=:Prix,idcategorie=:idcategorie
                      WHERE id=:id ";
                    $myqwery=$db->prepare($sql);
                     $myqwery->execute(array(
                      'cour_title'=>$cour_title,
                      'image'=>$image,
                      'description' =>$description,
                      'Prix' =>$Prix,
                      'idcategorie' =>$idcategorie,
                      'id' =>$id

                    ));
                     if ($myqwery) {
                       echo '<script>alert("Modification reussie avec succees")</script';
                     }
                     else {
                       'data Not updated';
                     }

                   }
              }
                }
                ?>
              <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </div>
     <?php include('mains/footer.php') ?>