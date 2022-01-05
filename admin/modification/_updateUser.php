<?php  require_once('includes/_base.php'); ?>
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
        $myqwery=$db->prepare("SELECT * FROM _admin  where _id=:id");
        $myqwery->execute(array(
        'id'=>$Edit
        ));
        if ($myqwery):
        $data=$myqwery->fetchAll(PDO::FETCH_OBJ);
        ?>

              
    
          <div class="row">

            <div class="col-lg-12">
               <?php
                   if(isset($_POST['btninscrit'])){
                    if (isset($_GET['Edit']) and !empty($_GET['Edit'])) {
                    $_id = $_GET['Edit'];
                    $_nom = $_POST['_nom'];
                    $_email = $_POST['_email'];
                     $_motpasse = sha1($_POST['_motpasse']);
                    $sql="UPDATE _admin SET _nom=:_nom, _email=:_email,_motpasse=:_motpasse
                      WHERE _id=:_id ";
                    $myqwery=$db->prepare($sql);
                     $myqwery->execute(array(
                      '_nom'=>$_nom,
                      '_email'=>$_email,
                      '_motpasse' =>$_motpasse,
                      '_id' =>$_id

                    ));
                     if ($myqwery) {
                       echo '<b class="text-danger text-center alert alert-success"><i class="fa fa-check" aria-hidden="true"></i> Modification reussie </b>';
                     }
                     else {
                       'data Not updated';
                     }

                   }
                }
                ?>

              <!-- Default Card Example -->
              <div class="card mb-4">
                <div class="card-header" style="color:black; font-weight: bold; font-family:candara;">
                  <i class="fa fa-mobile" aria-hidden="true" style="color:red;"></i> Ajouter un nouveau Utilisateur Kevent 
                </div>
                <div class="card-body">
                  <form action="" method="POST">
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control " name="_nom" style="color:blue; font-weight: bold; font-family:candara;" value="<?=$data[0]->_nom?>"  id="exampleFirstName" placeholder="Entrer le nom d'utilisateur" >
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control " name="_email" value="<?=$data[0]->_email?>" style="color:blue; font-weight: bold; font-family:candara;" id="exampleSecondName" placeholder="Email" pattern="(^[a-z 0-9]+)@([a-z0-9])+(\.)([a-z]{2,4})">
                      </div>
                    </div>
                    <div class="form-group row">
                      
                      <div class="col-sm-12">
                        <input type="password" style="color:blue; font-weight: bold; font-family:candara;" class="form-control" name="_motpasse" id="exampleLastName" placeholder="Entrer directement le nouveau mot de passe">
                      </div>
                    </div> 
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <label style="font-weight: bold; color:blue; font-family:candara;">Changer le role</label>
                              <select  class="form-control" required="" rows="9" name="_idrole" style="color:black; background-color: white;" >
                                <?php $select=$db->query("SELECT * FROM _role ORDER BY _id DESC limit 7");
                          while ($s = $select->fetch(PDO::FETCH_OBJ)) {
                            ?>
                            <option value="<?php echo $s->_id; ?>"><?php echo $s->_name; ?></option>
                            <?php
                            }
                          ?> 
                        </select>  
                      </div>
                    </div>
                    <button class="btn btn btn-user btn-block" name="btninscrit" style="background-color:rgb(46,57,61); color:white;">
                 Effectuer une modification
                </button>
                <hr>
              </form>
              <?php endif;?>
              <?php endif;?> 
                <?php
                 //exit(var_dump(isset($_POST['btninscrit'])));
                if (isset($_POST['btninscrit'])) {
                 $_nom = $_POST['_nom'];
                 $_email = $_POST['_email'];
                 $_motpasse = sha1($_POST['_motpasse']);
                 $_idrole = $_POST['_idrole'];
                
                 if ($_nom&&$_email&&$_motpasse) {
                 $myqwery=$db->prepare("INSERT INTO _admin (_nom, _email,_motpasse,_idrole) VALUES(:_nom, :_email, :_motpasse,:_idrole)");
                 $myqwery->execute(array(
                  '_nom'=> $_nom,
                  '_email'=> $_email,
                  '_motpasse'=> $_motpasse,
                  '_idrole'=>$_idrole
                
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
      
  
      <!-- End of Main Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span style="color:black; font-family:candara; font-weight:bold;">Copyright &copy; Kevent 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
  <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="_login.php">se deconnecter</a>
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
