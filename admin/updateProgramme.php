<?php  require_once('includes/_base.php'); ?>
<?php include('./pages/_barleft.php') ?>
<?php include('./pages/_content_values.php') ?>
 <!-- Verification et suppression -->
      <?php 
        if(isset($_GET['Edit']) and !empty($_GET['Edit'])):
        $Edit=htmlspecialchars($_GET['Edit']);
        $myqwery=$db->prepare("SELECT * FROM programmeITC  where id=:id");
        $myqwery->execute(array(
        'id'=>$Edit
        ));
        if ($myqwery):
        $data=$myqwery->fetchAll(PDO::FETCH_OBJ);
        ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
   
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800" style="color:black; font-family:candara;" ><i class="fas fa-user fa-sm fa-fw mr-2 text-black-400"></i> Effectuer une Modification</h1>
          </div>
          <div class="row">

            <div class="col-lg-12">
            <form action="" method="POST"> 
              <!-- Default Card Example -->
              <div class="card mb-4">
                <div class="card-header"style="color:black; font-family:candara; font-weight:   bold;">
                  Modification
                </div>
                <div class="card-body">
                  <form action="" method="POST">
                     <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="date" class="form-control" value="<?=$data[0]->datedebut?>" style="color:black; font-family: candara;" name="datedebut"  id="exampleFirstName" placeholder="Entrer le nom d'utilisateur" >
                      </div>
                      <div class="col-sm-6">
                        <input type="date" style="color:black; font-family: candara;" class="form-control " name="dateFin"  id="exampleSecondName" value="<?=$data[0]->dateFin?>" placeholder="Email" >
                      </div>
                    </div>
                     <div class="form-group row">
                      <div class="col-sm-12">
                        <input type="text" name="designation" style="color:black; font-family: candara;" class="form-control" required="" rows="9" name="Titre du programme" placeholder="Titre du programme" value="<?=$data[0]->designation?>" >
                      </div>
                    </div>
                       <div class="form-group row">
                      <div class="col-sm-12">
                        <select  class="form-control" required=""  rows="9" name="region" style="color:black; font-family: candara;" >
                            <?php $select=$db->query("SELECT * FROM region ORDER BY id DESC limit 20");
                          while ($s = $select->fetch(PDO::FETCH_OBJ)) {
                            ?>
                            <option value="<?php echo $s->id; ?>"><?php echo $s->designation; ?></option>
                            <?php
                            }
                          ?>
                      </select>  
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="time" class="form-control" style="color:black; font-family: candara;" name="HeureD"  id="exampleFirstName" placeholder="Entrer le nom d'utilisateur"value="<?=$data[0]->HeureD?>" >
                      </div>
                      <div class="col-sm-6">
                        <input type="time" class="form-control " name="HeureFin" style="color:black; font-family: candara;" id="exampleSecondName" placeholder="Email" value="<?=$data[0]->HeureFin?>" >
                      </div>
                    </div>
                     <div class="form-group row">
                      <div class="col-sm-12">
                        <textarea  style="color:black; font-family: candara;" class="form-control" required="" rows="9" name="description" placeholder="Description du programme" ><?=$data[0]->description?></textarea>
                      </div>
                    </div>
                    
                    <button class="btn btn btn-user btn-block" name="btninscrit" style="background-color:rgb(46,57,61); color:white;">
                  Mettre à Jour
                </button>
                 <?php endif;?>
                <?php endif;?> 
              </form>
            </div>
               </div>
               

            
                 </div>
                
               
                
                
                 <!-- Enregistres les donnes avec la methode prepare-->
            
               
                <?php
                   if(isset($_POST['btninscrit'])){
                    if (isset($_GET['Edit']) and !empty($_GET['Edit'])) {       
                    $id = $_GET['Edit'];
                    $dateprogramme = $_POST['dateprogramme'];
                     $HeureD = $_POST['HeureD'];
                     $HeureFin = $_POST['HeureFin'];  
                     $Description =$_POST['Description'];
                     $id_propriaitaire =$_POST['id_propriaitaire'];
                 if ($dateprogramme && $HeureD && $HeureFin &&  $Description && $id_propriaitaire) {
                    $sql="UPDATE programme SET dateprogramme=:dateprogramme, HeureD=:HeureD, HeureFin=:HeureFin,Description=:Description,id_propriaitaire=:id_propriaitaire
                      WHERE id=:id ";
                    $myqwery=$db->prepare($sql);
                     $myqwery->execute(array(
                      'dateprogramme'=>$dateprogramme,
                      'HeureD' =>$HeureD,
                      'HeureFin' =>$HeureFin,
                      'Description' =>$Description,
                      'id_propriaitaire' =>$id_propriaitaire,
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