<?php include ('header.php'); ?>
<style type="text/css">
  
</style>
<script>
  document.title=" ITC-Rdc | A propos de nous"
</script>
<hr>
 <div class="container">
  <div class="row">
    <div class="col-md-12">
       <div class="col-md-12" style="height: 50px; background-color:red">
        <span class="text-center">Nos projets</span>
         
       </div>
      <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn  btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color:red;font-size: 16px; font-weight: bold;">
         Bonne Gouvernance et engagement civique dans la ville
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body" style="text-align: justify;">
         Organisation Non Gouvernementale. L’ensemble de ses personnels se mobilise au quotidien pour couvrir les besoins fondamentaux des victimes civiles mises en péril, marginalisées ou exclues par les effets de catastrophes naturelles, de guerres et de situations d’effondrement économique. L’objectif est d’aider les populations déracinées dans l’urgence, tout en leur permettant de regagner rapidement autonomie et dignité. L’ONG mène environ 5 projets par an, dans les domaines de la sécurité alimentaire, Formation Professionnelle, la santé, la nutrition, l’eau et l’assainissement. Dans les ONG internationaux ce parmi les 5 postes clés mais de plus en plus dans le cas de la RDC, certains décideurs (chefs d’entreprises), commencent à prendre conscience des multiples enjeux de la logistique pour l’évolution de l’entreprise dans son environnement
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"style="color:red;font-size: 16px; font-weight: bold;">
         Importance de nos formations 
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Some placeholder content for the second accordion panel. This panel is hidden by default.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
   
 </div>
 

  <br>


 
  <?php include ('footer.php'); ?>
   </body>
  </html>

  <script>
          var img = document.getElementById('imgcar');

          var images = ['images_CarousselSalle/7.jpg','images_CarousselSalle/8.jpg','images_CarousselSalle/9.jpg','images_CarousselSalle/6.jpg'];
          var x = 0;

          function sliderCaroussel(){
              if (x < images.length){
                  x = x + 1;
              }else{
                  x = 1;
              }
              img.innerHTML ="<img src="+ images[x-1] +">";
          }
          // auto slide
          setInterval(sliderCaroussel, 2000);
      </script> 

     <!--  modale lucien -->
     <!-- Button trigger modal -->


<!-- Modal -->
         

     <!-- fin modal lucien -->

