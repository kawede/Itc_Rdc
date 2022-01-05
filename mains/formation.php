<?php include ('header.php'); ?>
 

   <!-- Class container here -->
  <script>
  document.title=" ITC-Rdc | Nos formations"
</script>

<hr>
 <div class="container mt-2">
      <div class="card-title">
        <div class="alert alert-w" style="background-color:rgb(10,74,145); color: white; ">
          <h4 class="mb-2 text-prmy">Nos formation</h4>
           <span>Trouvez ci-dessous la liste de nos differentes formations</span>
        </div>        
      </div>
     <div class="col-md-12">
         <div class="row">
            <div class="table-responsive">
      <table class="table " id="employee_data" width="90%" cellspacing="0">
        <thead>
          <tr style="background-color: rgb(10,74,145);">
            <th style="color:white; font-family:candara;"></th>
            <th style="color:white; font-family:candara;font-weight: bold;">formation</th>
            <th style="color:white; font-family:candara; font-weight: bold">Periode</th>
            <th style="color:white; font-family:candara; font-weight: bold">Lieu</th>
            <th style="color:white; font-family:candara;font-weight: bold">Heure</th>
            <th colspan="2" class="text-center" style="color:white; font-family:candara;">action</th>
          </tr>
        </thead>
        <tbody>
         <!-- selectionner les donnes de la base puis les affichees dans la table -->
           <?php 
         $myqwery=$db->prepare("SELECT * FROM programmeitc ORDER BY id DESC ");
         $myqwery->execute();
         foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
        ?>
     
      <tr >      <a href="#">
           <td class="text-black" style="color:black; font-family:candara;"><i class="fa fa-circle" aria-hidden="true" style="font-size:10px;color:rgb(200,0,0);"></i> </td>
            <td style="color:black; font-family:candara;"><?=$token->designation;?></td>
            <td style="color:black; font-family:candara;"><?=$token->datedebut;?> - <?=$token->dateFin;?></td>
           
            <td style="color:black; font-family:candara;"><?=$token->region;?></td>
              <td style="color:black; font-family:candara;"><?=$token->HeureD;?> - <?=$token->HeureFin;?></td>
             <!-- ajouter les boutons modifier et supprimer et les passes en paramettre pour supprimer et modifier -->
              <!-- ajouter les boutons modifier et supprimer et les passes en paramettre pour supprimer et modifier -->
             <td><a href="take_partTraining?id=<?=$token->id;?>"><span class="badge badge-pill badge-" style="color:white; font-family:candara;background-color: rgb(200,0,0);">S'inscrire</span></a></td>
          </a></tr>
         <?php endforeach ?>
        </tbody>
      </table>
         </div>
      
       </div>

     </div>
   </div>

 </div><br>
 <script type="text/javascript">
          function countdown(){
            var now = new Date();
            var eventDate = new Date(2021, 11, 12);

            var currentTime = now.getTime();
            var eventTime = eventDate.getTime();

            var remTime = eventTime - currentTime;

            var s =Math.floor(remTime / 1000);
            var m = Math.floor(s / 60);
            var h = Math.floor(m / 60);
            var d = Math.floor(h / 24);

            h %= 24;
            m %= 60;
            s %= 60;

                     h = (h < 10) ? "0" + h : h;
                     m = (m < 10) ? "0" + m : m;
                     s = (s < 10) ? "0" + s:s;

                     document.getElementById("days").textContent=d;
                      document.getElementById("days").innerText=d;
                       document.getElementById("hours").textContent=h;
                       document.getElementById("minutes").textContent=m;
                       document.getElementById("seconds").textContent=s;

                       setTimeout(countdown, 1000);

            // if(h<10){
            //  h = "0" + h;
            // }
            // var now = new Date(dateString);
            // var now new date
          }
          countdown();
        </script>
   
  <?php include ('footer.php'); ?>
     
<!-- <div class="col-md-12" >
<div class="row text-cente text-black">
  <div class="col-md-1"></div>
    <div class="col-md-10">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner1" style="   height: 250px;">
          <div class="carousel-item active">
            <div class="carousel-caption" style=" color: #fff; top: 50%;">
              <h3 style="color:black;">Qui sommes nous ?</h3>
              <p style="color:black;">Réseau International des Consultants Humanitaires est Une Organisation non Gouvernementale, sans but lucratif spécialisée dans la Formation et renforcement de capacité dans le secteur humanitaire, crée en 2006 par des Experts Consultants de différents domaines en vue d’apporter un soutien aux actions humanitaires, par un renforcement de capacité des staffs des Organisations intervenant dans les zones à conflit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption" style="top: 50%;">
               <h3 style="color:black;">Vision?</h3>
              <p style="color:black;">Réseau International des Consultants Humanitaires est Une Organisation non Gouvernementale, sans but lucratif spécialisée dans la Formation et renforcement de capacité dans le secteur humanitaire, crée en 2006 par des Experts Consultants de différents domaines en vue d’apporter un soutien aux actions humanitaires, par un renforcement de capacité des staffs des Organisations intervenant dans les zones à conflit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption"style="top: 50%;">
              <h3 style="color:black;">Mission ?</h3>
              <p style="color:black;">Réseau International des Consultants Humanitaires est Une Organisation non Gouvernementale, sans but lucratif spécialisée dans la Formation et renforcement de capacité dans le secteur humanitaire, crée en 2006 par des Experts Consultants de différents domaines en vue d’apporter un soutien aux actions humanitaires, par un renforcement de capacité des staffs des Organisations intervenant dans les zones à conflit.</p>
            </div>  
          </div>
          <div class="carousel-item">
            <div class="carousel-caption"style="top: 50%;">
              <h3 style="color:black;">Objectif?</h3>
              <p style="color:black;">Réseau International des Consultants Humanitaires est Une Organisation non Gouvernementale, sans but lucratif spécialisée dans la Formation et renforcement de capacité dans le secteur humanitaire, crée en 2006 par des Experts Consultants de différents domaines en vue d’apporter un soutien aux actions humanitaires, par un renforcement de capacité des staffs des Organisations intervenant dans les zones à conflit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption" style="top: 50%;">
              <h3 style="color:black;">Qui sommes nous ?</h3>
              <p style="color:black;">Réseau International des Consultants Humanitaires est Une Organisation non Gouvernementale, sans but lucratif spécialisée dans la Formation et renforcement de capacité dans le secteur humanitaire, crée en 2006 par des Experts Consultants de différents domaines en vue d’apporter un soutien aux actions humanitaires, par un renforcement de capacité des staffs des Organisations intervenant dans les zones à conflit.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div> -->



<!--   <div class="container">
      <h2 class="text-center" style="color: rgb(2,4,104);">Nos formations</h2>
           <p style="color: rgb(2,4,104);;font-weight: bold;"><em>Nous formons les meilleurs commerciaux pour le bien de vos entreprises</em></p>
        <div class="row">
       
            <div class="col-6 text-right">

                <a class="btn btn-search1 mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev" >
                    <i class="fa fa-arrow-left" ></i>
                </a>
                <a class="btn btn-search1 mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next" >
                    <i class="fa fa-arrow-right" ></i>
                </a>
            </div>
             <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                
                                        <?php 
           $myqwery=$db->prepare("SELECT * FROM cour ORDER BY id DESC limit 0,3");
           $myqwery->execute();
           foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
          ?>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img src="./admin/images/<?= $token->image;?>" width="100%" alt="Sample Article" class="img-thumbnail">
                                        <div class="card-body">
                                            <h4 class="card-title text-left"><?=$token->cour_title;?></h4>
                                            <p class="card-text text-left">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>

                             


                            </div>
                        </div>  -->


                        <!--First Part -->
                        <div class="carousel-item">
                            <div class="row">
                                                             <?php 
           $myqwery=$db->prepare("SELECT * FROM cour ORDER BY id DESC limit 0,3");
           $myqwery->execute();
           foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
          ?>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img src="./admin/images/<?= $token->image;?>" width="100%" alt="Sample Article" class="img-thumbnail">
                                        <div class="card-body">
                                            <h4 class="card-title"><?=$token->cour_title;?></h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                 <?php endforeach ?>
                            
                            

                            </div>
                        </div>
               <!--          <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
