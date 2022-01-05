<?php include ('header.php'); ?>
   <!-- Class container here -->
<script>
  document.title="ITC-Rdc | Demande de formationSS"
</script>
    
     
   </div>
   <div class="container mt-4">
    <hr>
     <div class="col-md-12">
       <div class="row">
        <div class="col-md-3"></div>
         <div class="col-md-6 shadow"  >
          <div class="text-center">
           <div class="card-title">
                <h4 class="mb-2 text-prmy">Formulaire de démande d'une formation</h4>
                <p>Formulaire de reservation de place au sein de la formation <strong></strong></p>
            </div>
                        <div class="alert alert-warning" style="background-color:rgb(10,74,145); color: white; ">
                <h6>
                    Veillez selectionner une formation de votre choix dans la ribruque 
                    <a href="?page=formations"><strong>Formation</strong></a> Puis remplissez ce formulaire
                </h6>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
            <?php
              if (isset($_POST['btninscrit'])) {
                # code...
                extract($_POST);
                if (!empty($titre_formation) && !empty($nom_complet)  &&
                !empty($genre) && !empty($email) && !empty($phone) && !empty($maniere) && !empty($centre) && !empty($lieu)  && !empty($statut)) {
                  # code...

                    $ps = $db->prepare("INSERT INTO demande_formation(titre_formation,nom_complet,adresse,genre,email,phone,maniere,centre,lieu,statut) VALUES(:titre_formation,:nom_complet,:adresse,:genre,:email,:phone,:maniere,:centre,:lieu,:statut) ");
                    $statement = $ps->execute(array(
                      ':titre_formation'   =>  $titre_formation,
                      ':nom_complet'    =>  $nom_complet,
                      ':adresse'    =>  $adresse,
                      ':genre'   =>  $genre,
                      ':email'   =>  $email,
                      ':phone'    =>  $phone,
                      ':maniere'   =>  $maniere,
                      ':centre'   =>  $centre,
                      ':lieu'    =>  $lieu,
                      ':statut'    =>  $statut
                    ));

                    if (!empty($statement)) {
                      # code...
                       echo '<b class=" text-center alert alert-success"> Enregistrement reusi </b>';
                    
                    }
                    else{
                      echo("oups!!!!");
                    }
                  }
                }
                else{
                  echo("Tous les champs sont requis");
                }

              ?>
                         
                <div class="col-lg-12 border rounded section-bg py-3">
                    <h6 class="mb-2 font-weight-bold">Information sur la formation</h6><br>
                    <div class="form-group">
                        <label style="float:left">Titre de la formation <span class="text-danger">*</span></label>
                        <input type="text" style="background-color:white;font-family:candara; color:black" id="title-case" name="titre_formation" value="" class="form-control font-weight-bold" placeholder="Entrer le titre de la formation ">
                  </div>
                </div>
                <div class="col-lg-12 border rounded section-bg py-3 mt-2">
                    <h6 class="mb-2 font-weight-bold">Personne requirante</h6>
                    <div class="form-group">
                        <label for="nom-cnnx"style="float:left">Nom complet<span class="text-danger">*</span></label>
                        <input type="text" id="nom-cnnx" style="background-color:white;font-family:candara; color:black" name="nom_complet" class="form-control" placeholder="entrer votre nom ... ">
                    </div>
                    <div class="form-group">
                        <label for="add-cnnx" style="float:left">Adresse <small class="badge badge-default border">ce champs n'est pas obligatoir</small></label>
                        <input type="text" style="background-color:white;font-family:candara; color:black"  id="add-cnnx" name="adresse" class="form-control" placeholder="Q. ... C. ... Av. ... Ville ...">
                    </div>
        
                    <div class="form-group">
                        <label for="gender-cnnx" style="float:left">Genre <span class="text-danger">*</span></label>
                        <select name="genre" id="gender-cnnx" style="background-color:white;font-family:candara; color:black" class="form-control">
                            <option value="">Selectionner</option>
                            <option value="masculin">Masculin</option>
                            <option value="feminin">Feminin</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 border rounded section-bg py-3 mt-2">
                    <h6 class="mb-2 font-weight-bold">Contacts</h6>
                    <div class="form-group ">
                        <label for="email-cnnx"style="float:left">Adresse email <span class="text-danger">*</span></label>
                        <input type="email" style="background-color:white;font-family:candara; color:black" id="email-cnnx" name="email" class="form-control" placeholder="entrer votre adresse mail ... ">
                    </div>
                    <div class="form-group">
                        <label for="tele-cnnx" style="float:left">Numero de téléphone <span class="text-danger">*</span></label>
                        <input type="text" id="tele-cnnx"style="background-color:white;font-family:candara; color:black" name="phone" maxlength="13" class="form-control" placeholder="entrer votre numero de téléphone ... ">
                    </div>
                </div>
                <div class="col-lg-12 border rounded section-bg py-3 mt-2">
                    <h6 class="mb-2 font-weight-bold">De quelle manière voulez vous suivre cette formation ?</h6>
                    <div class="row">
                        <div class="form-group col-lg-6 col-6 text-center form-group-sm">
                            <label for="online-cnnx">En ligne</label>
                            <input type="radio" name="maniere" id="maniere" class="form-control" value="online" style="height: 25px">
                        </div>
                        <div class="form-group col-lg-6 col-6 text-center form-group-sm">
                            <label for="offline-cnnx">Dans le centre</label>
                            <input type="radio" name="maniere" id="maniere" class="form-control" value="offline" style="height: 25px">
                        </div>
                        <div class="col-lg-12 text-center text-danger">
                            <b id="online_cnnx" class="d-none"><span class="fa fa-warning mr-1"></span><span>Selectionner un cas</span></b>
                        </div>
                    </div>
                    <div class="form-group mt-2 border-top pt-2 case-online">
                        <label for="center-cnnx" style="float:left">Choisie le center de formation <span class="text-danger">*</span></label>
                        <select name="centre" id="centre" class="form-control"style="background-color:white;font-family:candara; color:black">
                            <option value="">Selectionner le centre de formation</option>
                            <option value="reitec">Centre ITC</option>
                            <option value="meorg">Dans mon organisation</option>
                            <option value="mepart">Chez un partenaire</option>
                        </select>
                        <b class="place_form text-danger d-none">
                            <span class="fa fa-warning mr-1"></span>
                            <span>Selectionner le lieu de formation</span>
                        </b>
                    </div>
                       <div class="form-group mt-2 border-top pt-2 case-online">
                        <label for="place-reitec-cnnx"style="float:left">Choisissez le lieu de formation<span class="text-danger">*</span></label>
                        <select name="lieu" id="center-cnnx" class="form-control"style="background-color:white;font-family:candara; color:black">
                              <option value="">Selectioner le lieu</option>
                            <option value="Goma">Goma</option>
                            <option value="Bukavu">Bukavu</option>
                            <option value="Bunia">Bunia</option>
                            <option value="Kinshasa">Kinshasa</option>
                            <option value="Beni">Beni</option>
                            <option value="Kalemie">Kalemie</option>
                        </select>
                        </select>
                        <b class="place_form text-danger d-none">
                            <span class="fa fa-warning mr-1"></span>
                            <span>Selectionner le lieu de formation</span>
                        </b>
                    </div>
            
                </div>
                <div class="col-lg-12 border rounded section-bg py-3 mt-2">
                    <h6 class="mb-2 font-weight-bold"style="float:left">Sous quel status vous vous enregistrez</h6>
                    <div class="form-group">
                        <label for="kind-cnnx"style="float:left">Vous êtes une Organisation | Un Individu<span class="text-danger">*</span></label>
                        <select name="statut" id="kind-cnnx" class="form-control"style="background-color:white;font-family:candara; color:black">
                            <option value="individuel">Un individu ou personne requirante</option>
                            <option value="organisation">Une Organisation ou association</option>
                        </select>
                    </div>
              
                </div>
          
                <div class="form-group text-center">
                    <b class="text-danger my-2">
                        <em class="d-none-" ouput-text="ouput"></em>
                    </b>
                    <button class="btn btn btn-user btn-block" name="btninscrit" style="background-color:rgb(200,0,0); color:white; font-family: candara">
                         soumettre ce formulaire
                    </button>
                </div>
                <div class="col-12 mb-4">
                <a href="?page=recoverpassword" class="d-block"> <span class="bx bx-chevron-right mr-2"></span>Telecharger ce formulaire ici</a></div>
                
            </form>
              
         </div>
       </div>
         <div class="col-md-3"></div>
       </div>
     </div>
   </div>
  <?php include ('footer.php'); ?>