 <?php include ('header.php'); ?>
    <div class="col-md-12" style="" >
       <div class="col-md-12" style="background-color:rgb(10,74,145);color:white;">
        <br>
        <h3 class="text-center "><i class="fa fa-archive shadow"aria-hidden="true" style="font-size: 50px;"></i></h3>

          <h3 class="text-center" style="font-family: candara;">Nos Galeries</h3>
        <p>Nos realisations</p>
        </div>
     <div class="container">
     <div class="col-md-12" >

      
        
        <br>
         <div class="row row-cols-1 row-cols-md-3">
          <?php 
           $myqwery=$db->prepare("SELECT * FROM galerie ORDER BY id DESC limit 20");
           $myqwery->execute();
           foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
          ?>
          <div class="col mb-3">
            <div class="card">
              <img src="./admin/images/<?= $token->image;?>" class="card-img-top img-thumbnail" alt="...">
              <div class="card-body">
                <span class="card-title"><?=$token->titre; ?></span>
          
              </div>
            </div>
          </div>
        <?php endforeach ?>

</div>
       </div>
   
   </div>
   </div>
 <?php include ('footer.php'); ?>