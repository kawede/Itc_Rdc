<?php  require_once('includes/_headersec.php'); ?>
<?php include('./pages/_barleft.php') ?>
<?php include('./pages/_content_values.php') ?>

     <?php 
        if(isset($_GET['Edit']) and !empty($_GET['Edit'])):
        $Edit=htmlspecialchars($_GET['Edit']);
        $myqwery=$db->prepare("SELECT * FROM _admin  where _id=:_id");
        $myqwery->execute(array(
        '_id'=>$Edit
        ));
        if ($myqwery):
        $data=$myqwery->fetchAll(PDO::FETCH_OBJ);
        ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="row">

            <div class="col-lg-12">
                   <?php
                   if(isset($_POST['btninscrit'])){
                    if (isset($_GET['Edit']) and !empty($_GET['Edit'])) {
                    $_id = $_GET['Edit'];

                extract($_POST);
                if (!empty($_nom) && !empty($_email)  && !empty($_motpasse) && !empty($_idrole) ) {
             
                   # code...
                  $myqwery = $db->prepare("UPDATE _admin SET _nom=:_nom, _email=:_email, _motpasse=:_motpasse, _idrole=:_idrole, linkdn=:linkdn,slogan=:slogan WHERE _id=:_id ");
                    $statement = $myqwery->execute(array(
                  '_nom'=> $_nom,
                  '_email'=> $_email,
                  '_motpasse'=> $_motpasse,
                  '_idrole'=>$_idrole,
    
                  'linkdn'=> $linkdn,
                  'slogan'=>$slogan,
                  '_id'=>$_id
                 ));
                 
                 if ($myqwery){
                 echo '<b class="text-danger text-center alert alert-success"><i class="fa fa-check" aria-hidden="true"></i>  Modification reusie </b>';
                 }  
                
             
                  else{
                 echo '<br><br/><br/><br/><br/><h3 style="color:red;">Veuillez remplir tous les champs.</h3>';
                  }
                 }
                 
        }
    else{
      echo("ooup");
    }

                 
                
              
              }
               ?>

              <!-- Default Card Example -->
              <div class="card mb-4">
                <div class="card-header"style="color:black; font-family:candara; font-weight:   bold;">
                  Mettre à jour
                </div>
                <div class="card-body">
                  <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control " value="<?=$data[0]->_nom?>" style="color:black; font-family:candara;" name="_nom"  id="exampleFirstName" placeholder="Entrer le nom d'utilisateur" >
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control " name="_email" style="color:black;font-family:candara"  id="exampleSecondName" placeholder="Email" value="<?=$data[0]->_email?>" pattern="(^[a-z 0-9]+)@([a-z0-9])+(\.)([a-z]{2,4})">
                      </div>
                    </div>
                    <div class="form-group row">
                      
                      <div class="col-sm-12">
                        <input type="password" style="color:black;font-family:candara" value="<?=$data[0]->_motpasse?>" class="form-control" name="_motpasse" id="exampleLastName" placeholder="mot de passe">
                      </div>
                    </div> 
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <label style="font-weight: bold; color: black;">Role</label>
                              <select  class="form-control" required="" rows="9" name="_idrole" style="color:black; " >
                                <?php $select=$db->query("SELECT * FROM role ORDER BY _id DESC limit 7");
                          while ($s = $select->fetch(PDO::FETCH_OBJ)) {
                            ?>
                            <option 
                            <?php 
                            if ($data[0]->_idrole == $s->_id) {
                              # code...
                              echo "selected";
                            }


                            ?>
                           
                            value="<?php echo $s->_id; ?>"><?php echo $s->_name; ?></option>
                            <?php
                            }
                          ?> 
                        </select>  
                      </div>
                    </div>
                             <div class="form-group row">
                      <div class="col-sm-12">
                        <input type="file" style="color:black; font-family: candara;" value="<?=$data[0]->image?>" style="color:black;font-family:candara" class="form-control" name="image" id="exampleLastName" placeholder="mot de passe" ><img src="./images/<?=$data[0]->image;?>" width="30%" height="70%" alt="Sample Article">
                      </div>
                    </div> 
                     <div class="form-group row">
                      
                      <div class="col-sm-12">
                        <input type="url" style="color:black; font-family: candara;" style="color:black;font-family:candara" class="form-control" name="linkdn" id="exampleLastName" value="<?=$data[0]->linkdn?>"placeholder="url compte linkdn" id="">
                      </div>
                    </div> 
                       <div class="form-group row">
                      <div class="col-sm-12">
                        <textarea type="text" class="form-control" name="slogan" id="exampleLastName" placeholder="Slogan" style="font-family: candara; color:black" rows="5"><?=$data[0]->slogan?></textarea>
                      </div>
                    </div>
                    <button class="btn btn btn-user btn-block" name="btninscrit" style="background-color:rgb(46,57,61); color:white; font-family: candara">
                 Mettre à jour
                </button>
                <hr>
              </form>
               
                 
                         
                  </form> 
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
        <?php endif;?>
                <?php endif;?> 
   
    </div>
  </div>
</div>
<?php require_once('mains/footer.php'); ?>