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

              
    
          <div class="row">

            <div class="col-lg-12">

              <!-- Default Card Example -->
              <div class="card mb-4">
                <div class="card-header"style="color:black; font-family:candara; font-weight:   bold;">
                  Nouveau Utilisateur 
                </div>
                <div class="card-body">
                  <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control" style="color:black; font-family: candara;" name="_nom"  id="exampleFirstName" placeholder="Entrer le nom d'utilisateur" >
                      </div>
                      <div class="col-sm-6">
                        <input type="text" style="color:black; font-family: candara;" class="form-control " name="_email" style="color:black;font-family:candara"  id="exampleSecondName" placeholder="Email" pattern="(^[a-z 0-9]+)@([a-z0-9])+(\.)([a-z]{2,4})">
                      </div>
                    </div>
                    <div class="form-group row">
                      
                      <div class="col-sm-12">
                        <input type="password" style="color:black; font-family: candara;" style="color:black;font-family:candara" class="form-control" name="_motpasse" id="exampleLastName" placeholder="mot de passe" id="Password">
                      </div>
                    </div> 
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <label style="color:black; font-family: candara;">Role</label>
                              <select  class="form-control" required="" rows="9" name="_idrole" style="color:black; " >
                                <?php $select=$db->query("SELECT * FROM role ORDER BY _id DESC limit 7");
                          while ($s = $select->fetch(PDO::FETCH_OBJ)) {
                            ?>
                            <option value="<?php echo $s->_id; ?>"><?php echo $s->_name; ?></option>
                            <?php
                            }
                          ?> 
                        </select>  
                      </div>
                    </div>
                     <div class="form-group row">
                      
                      <div class="col-sm-12">
                        <input type="file" style="color:black; font-family: candara;" style="color:black;font-family:candara" class="form-control" name="image" id="exampleLastName" placeholder="mot de passe" >
                      </div>
                    </div> 
                     <div class="form-group row">
                      
                      <div class="col-sm-12">
                        <input type="url" style="color:black; font-family: candara;" style="color:black;font-family:candara" class="form-control" name="linkdn" id="exampleLastName" placeholder="url compte linkdn" id="">
                      </div>
                    </div> 
                       <div class="form-group row">
                      <div class="col-sm-12">
                        <textarea type="text" class="form-control" name="slogan" id="exampleLastName" placeholder="Slogan" style="font-family: candara; color:black" rows="5"></textarea>
                      </div>
                    </div>
                    <button class="btn btn btn-user btn-block" name="btninscrit" style="background-color:rgb(46,57,61); color:white; font-family: candara">
                  Creer un compte
                </button>
                <hr>
              </form>
                 <button class="btn btn-danger" onclick="toggle()">Voir mot de passe</button> 
              
                <?php
              if (isset($_POST['btninscrit'])) {
                $_motpasse = sha1($_POST['_motpasse']);
                # code...
                extract($_POST);
                if (!empty($_nom) && !empty($_email)  && !empty($_motpasse) && !empty($_idrole) && !empty($image=Image_Compreser::Compreser(300)) && !empty($linkdn) && !empty($slogan)) {
                 if ($image) {
                   # code...
                 $myqwery=$db->prepare("INSERT INTO _admin (_nom, _email,_motpasse,_idrole,image,linkdn,slogan) VALUES(:_nom, :_email,:_motpasse,:_idrole,:image,:linkdn,:slogan)");
                 $myqwery->execute(array(
                  '_nom'=> $_nom,
                  '_email'=> $_email,
                  '_motpasse'=> $_motpasse,
                  '_idrole'=>$_idrole,
                  'image'=> $image,
                  'linkdn'=> $linkdn,
                  'slogan'=>$slogan
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
            <th style="color:black; font-family:candara;">Numero</th>
            <th style="color:black; font-family:candara;">Nom</th>
            <th style="color:black; font-family:candara;">Email</th>
            <th style="color:black; font-family:candara;">image</th>
            <th style="color:black; font-family:candara;">Role</th>
            <th style="color:black; font-family:candara;">linkdn</th>
            <th colspan="2" class="text-center" style="color:black; font-family:candara;">action</th>
          </tr>
        </thead>
        <tbody>
         <!-- selectionner les donnes de la base puis les affichees dans la table -->
        <?php 
         $myqwery=$db->prepare("SELECT _admin._id, _admin._nom,_admin._email, _admin.linkdn, _admin.image,role._name FROM _admin INNER JOIN role ON _admin._idrole= role._id ORDER BY _id DESC ");
         $myqwery->execute();
         foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
        ?>
          <tr>
            <td class="text-black" style="color:black; font-family:candara;"><?=$token->_id;?> </td>
            <td><span class="badge badge-pill badge-success" style="color:white; font-family:candara;"><?=$token->_nom;?></span></td>
            <td style="color:black; font-family:candara;"><?=$token->_email;?></td>
            <td class="text-center" style="color:black; font-family: candara;"><img src="images/<?= $token->image;?>" width="30%" alt="Sample Article"></td>
            <td style="color:black; font-family:candara;"><?=$token->_name;?></td>
              <td style="color:black; font-family:candara;"><?=$token->linkdn;?></td>
             <!-- ajouter les boutons modifier et supprimer et les passes en paramettre pour supprimer et modifier -->
              <!-- ajouter les boutons modifier et supprimer et les passes en paramettre pour supprimer et modifier -->
            <td class="text-center"><a href="_updateUser.php?Edit=<?=$token->_id;?>"><i class="fas fa-edit"style="color:black;" title="Voulz-vous vraiment modifiez un utilisateur?"></i></a></td> <td class="text-center " ><a href="?delete=<?=$token->_id;?>" ><i class="fas fa-trash" style="color:black;" title="Voulz-vous vraiment supprimez un utilisateur?"></i><a></td>
          </tr>
         <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php require_once('mains/footer.php'); ?>
   <script type="text/javascript">
                  var state=false;
                  function toggle(){
                    if(state){
                      document.queryselector("Password").setAttribute("type","Password");
                      state=false;
                    }
                    else
                    {
                      document.queryselector("Password").setAttribute("type","text");
                      state=true;
                    }
                  }
                </script>