<?php  require_once('includes/_headersec.php'); ?>
<?php include('./pages/_barleft.php') ?>
<?php include('./pages/_content_values.php') ?>

<?php 
if(isset($_GET['delete']) and !empty($_GET['delete'])){
  $delete=htmlspecialchars($_GET['delete']);
  $myqwery=$db->prepare("DELETE FROM programmeITC where id=:id");
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
                if (isset($_POST['btninscrit'])) {
                 $datedebut = $_POST['datedebut'];
                 $dateFin = $_POST['dateFin'];
                 $designation = $_POST['designation'];
                 $region = $_POST['region'];
                 $HeureD = $_POST['HeureD'];
                 $HeureFin = $_POST['HeureFin'];
                 $description = $_POST['description'];
                 if ($datedebut && $dateFin && $designation && $region && $HeureD && $HeureFin && $description) {
                 $myqwery=$db->prepare("INSERT INTO programmeITC (datedebut,dateFin,designation,region,HeureD,HeureFin,description) VALUES(:datedebut,:dateFin,:designation,:region,:HeureD,:HeureFin,:description)");
                 $myqwery->execute(array(
                  'datedebut'=> $datedebut,
                  'dateFin'=> $dateFin,
                  'designation'=> $designation,
                  'region'=>$region,
                  'HeureD'=> $HeureD,
                  'HeureFin'=>$HeureFin,
                  'description'=>$description
                
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

            <div class="col-lg-12">

              <!-- Default Card Example -->
              <div class="card mb-4">
                <div class="card-header"style="color:black; font-family:candara; font-weight:   bold;">
                  Nouveau Programme 
                </div>
                <div class="card-body">
                  <form action="" method="POST">
                     <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="date" class="form-control " style="color:black; font-family: candara;" name="datedebut"  id="exampleFirstName" placeholder="Entrer le nom d'utilisateur" >
                      </div>
                      <div class="col-sm-6">
                        <input type="date" style="color:black; font-family: candara;" class="form-control " name="  dateFin"  id="exampleSecondName" placeholder="Email" >
                      </div>
                    </div>
                     <div class="form-group row">
                      <div class="col-sm-12">
                        <input type="text" name="designation" style="color:black; font-family: candara;" class="form-control" required="" rows="9" name="Titre du programme" placeholder="Titre du programme" >
                      </div>
                    </div>
                       <div class="form-group row">
                      <div class="col-sm-12">
                        <select  class="form-control" required=""  rows="9" name="region" style="color:black; font-family: candara;" >
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
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="time" class="form-control" style="color:black; font-family: candara;" name="HeureD"  id="exampleFirstName" placeholder="Entrer le nom d'utilisateur" >
                      </div>
                      <div class="col-sm-6">
                        <input type="time" class="form-control " name="HeureFin" style="color:black; font-family: candara;" id="exampleSecondName" placeholder="Email" >
                      </div>
                    </div>
                     <div class="form-group row">
                      <div class="col-sm-12">
                        <textarea  style="color:black; font-family: candara;" class="form-control" required="" rows="9" name="description" placeholder="Description du programme" ></textarea>
                      </div>
                    </div>
                    
                
                   
                    <button class="btn btn btn-user btn-block" name="btninscrit" style="background-color:rgb(46,57,61); color:white; font-family: candara;">
                  Nouveau Programme
                </button>
                <hr>
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
            <th style="color:black; font-family: candara;">id</th>
             <th style="color:black; font-family: candara;">Date debut</th>
            <th style="color:black; font-family: candara;">Date fin</th>
            <th style="color:black; font-family: candara;">Titre</th>
            <th style="color:black; font-family: candara;">region</th>
            <th style="color:black; font-family: candara;">Heure Debut</th>
            <th style="color:black; font-family: candara;">Heure Fin</th>
            <th style="color:black; font-family: candara;">categorie</th>
            <th colspan="2" class="text-center"style="color:black; font-family: candara;">action</th>
          </tr>
        </thead>
        <tbody>
         <!-- selectionner les donnes de la base puis les affichees dans la table -->
        <?php 
         $myqwery=$db->prepare("SELECT * FROM programmeITC");
         $myqwery->execute();
         foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
        ?>
          <tr>
            <td class="text-black"style="color:black; font-family: candara;"><?=$token->id;?> </td>
            <td style="color:black; font-family: candara;"><?=$token->datedebut;?></td>
            <td style="color:black; font-family: candara;"><?=$token->dateFin;?></td>
            <td style="color:black; font-family: candara;"><?=$token->designation;?></td>
            <td style="color:black; font-family: candara;"><?=$token->region;?></td>
            <td style="color:black; font-family: candara;"><?=$token->HeureD;?></td>
             <td style="color:black; font-family: candara;"><?= substr($token->description,0,100);?><a href="#">  plus...</a> </td>

            <td class="text-center"><a href="updateProgramme.php?Edit=<?=$token->id;?>"><i class="fas fa-edit"style="color:black;" title="Voulz-vous vraiment modifiez un utilisateur?"></i></a></td> <td class="text-center " ><a href="?delete=<?=$token->id;?>" ><i class="fas fa-trash" style="color:black;" title="Voulz-vous vraiment supprimez un utilisateur?"></i><a></td>
          </tr>
         <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

    <script type="text/javascript">
      $(document).ready(function() {
        $('#userTable').DataTable();
      });
    </script>
<?php require_once('mains/footer.php'); ?>
