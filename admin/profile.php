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
  <?php 
             $myqwery=$db->prepare("SELECT * FROM fomateur limit 1");
             $myqwery->execute();
             foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
            ?>
   
        <!-- Begin Page Content -->
        <div class="container-fluid">

              
        <!-- /.container-fluid -->
      </div>
      
        <div class="card shadow mb-4">
  <div class="card-header py-3">
  </div>
  <div class="card-body">
      <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <input type="nom" class="form-control " style="color:black;font-family:candara"  name="email"  id="exampleFirstName" placeholder="email" value="<?php echo $_SESSION['uservisiteur']['user_nom']; ?>">
        </div>
        <div class="col-sm-6">
          <input id="reservation" type="text" class=" form-control"style="color:black; font-family: candara; font-weight: bold;" name="_dateDebut" />
               
        </div>
      </div>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
        <thead>
          <tr>
            <th style="color:black; font-family:candara;">Numero</th>
            <th style="color:black; font-family:candara;">Image</th>
            <th style="color:black; font-family:candara;">Nom</th>
            <th style="color:black; font-family:candara;">Email</th>
            <th style="color:black; font-family:candara;">Telephone</th>
            <th style="color:black; font-family:candara;">Grade</th>
            <th style="color:black; font-family:candara;">Residence</th>
            <th style="color:black; font-family:candara;">Description</th>
     
            <th colspan="2" class="text-center" style="color:black; font-family:candara;">action</th>
          </tr>
        </thead>
        <tbody>
         <!-- selectionner les donnes de la base puis les affichees dans la table -->
         
          <tr>
            <td class="text-black" style="color:black; font-family:candara;"><?php echo $_SESSION['uservisiteur']['user_id']; ?> </td>
             <!-- <td class="text-center" style="color:black; font-family: candara;"><?php echo $_SESSION['uservisiteur']['user_image']; ?><img src="images/<?= $_SESSION['uservisiteur']['user_image'] ;?>" width="60%" alt="Sample Article"></td> -->
            <td style="color:black; font-family:candara;"><?php echo $_SESSION['uservisiteur']['user_nom']; ?></td>
            <td style="color:black; font-family:candara;"><?php echo $_SESSION['uservisiteur']['user_email']; ?></td>
            <td style="color:black; font-family:candara;"><?php echo $_SESSION['uservisiteur']['user_phone']; ?></td>
            <td style="color:black; font-family:candara;"><?php echo $_SESSION['uservisiteur']['user_grade']; ?></td>
            <td style="color:black; font-family:candara;"><?php echo $_SESSION['uservisiteur']['user_competences'];?></td>
            <td style="color:black; font-family:candara;"><?php echo $_SESSION['uservisiteur']['user_description'];?></td>
             <td style="color:black; font-family:candara;"><?php echo $_SESSION['uservisiteur']['user_residence'];?></td>
             <!-- ajouter les boutons modifier et supprimer et les passes en paramettre pour supprimer et modifier -->
              <!-- ajouter les boutons modifier et supprimer et les passes en paramettre pour supprimer et modifier -->
            <td class="text-center"><a href="ControlProfile.php?Edit=<?=$_SESSION['uservisiteur']['user_id'];?>"><i class="fas fa-edit"style="color:black;" title="Voulz-vous vraiment modifiez un utilisateur?"></i></a></td> 
          </tr>
         
        </tbody>
      </table>
    </div>
  </div>
</div>
   <?php endforeach ?>

<?php require_once('mains/footer.php'); ?>
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