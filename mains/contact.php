<?php include ('header.php'); ?>

   <script>
  document.title=" First-Choice | Nous contact"
</script>
   <script type="text/javascript">
     
   </script>
   <div class="container">
     <div class="col-md-12">
       <div class="row">
         <div class="col-md-12">
            <div id="map">

          </div>
          <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
          <script src="assets/js/map.js"></script> 
            <script>
              (function($){

                  function populateLang() {
                    if (typeof localStorage !== 'undefined') {
                      var locale = localStorage.getItem('locale');
                      if (!locale) {
                        locale = 'FR'
                      }
                      $('.current-locale').html(locale)
                      doGTranslate('en|' + locale);
                    }
                  }

                  $(document).on('change', '.lang-selector, .mobile-lang-selector', function() {
                    var selectedLanguage = $(this).val();
                      doGTranslate('en|' + selectedLanguage);
                      if (typeof localStorage !== 'undefined') {
                        localStorage.setItem('locale',selectedLanguage);
                        populateLang();
                      }
                  })

                  populateLang();

              })(jQuery);
        </script>
         </div>
       </div>
     </div>
   </div>
   <div class="container">
     <div class="col-md-12">
       <div class="row">
         <div class="col-md-8 " >
            <h3 class="mt-2 text-center">Nous Contact</h3>
            <p class="text-center">Veuillez nous laisser un message electronique ou contactez-nous à travers nos informations de contact.</p>
              <div class="text-center">
                 <?php
                 //exit(var_dump(isset($_POST['btninscrit'])));
                if (isset($_POST['btninscrit'])) {
                 $nom = $_POST['nom'];
                 $email = $_POST['email'];
                 $phone = $_POST['phone'];
                 $message = $_POST['message'];
                 if ($nom && $email && $phone && $message) {
                 $myqwery=$db->prepare("INSERT INTO contact (nom,email,phone,message) VALUES(:nom,:email,:phone,:message)");
                 $myqwery->execute(array(
                  'nom'=> $nom,
                  'email'=> $email,
                  'phone'=> $phone,
                  'message'=> $message
                
                 ));
                 
                 if ($myqwery){
                 echo '<div class="text-danger text-center alert alert-success"><i class="fa fa-check" aria-hidden="true"></i>  Merci de nous avoir contacté </div>';
                 }  
                }
                 else{
                  echo '<b class="text-danger text-center alert alert-danger"><i class="fa fa-check" aria-hidden="true"></i>  une case est vide </b>';
                  }
                 } 
             
               ?> 
              </div>
            <form method="POST" action="">
                <div class="col-md-12 form-group">
                  <input type="text" name="nom" class="form-control bg-white" placeholder="Entrer votre nome" required="">
                </div>
                <div class="col-md-12 form-group" >
                   <input type="email" class="form-control bg-white" placeholder="votre email" name="email" required="">
                </div>
                <div class="col-md-12 form-group">
                   <input type="phone" class="form-control bg-white" placeholder="Numero" name="phone" required="">
                </div>
                <div class="col-md-12 form-group">
                  <textarea class="form-control bg-white" cols="30" placeholder="Message *" name="message" required=""></textarea>
                </div>
              <div class="col-md-12 form-group">
                <button type="submit" class="btn btn-primary btn-block" name="btninscrit" style="background-color: rgb(2,4,104); font-family: candara; border:1px solid rgb(2,4,104);">
                  <i class="fa fa-send mr-1"></i> Envoyer
                </button>
              </div>
          </form>
         </div>
         <div class="col-md-4 mt-4">
              <div class="row">
                  <div class="col-md-12">
                    <h3>Nos Contacts</h3>
                     <hr>
                  </div>

                  <div class="col-md-12">
                    <i class="fa fa-clock-o mr-1" style="color: rgb(2,4,104); font-size:19px; "></i>  Ouvert 24h/24h -Lundi au samedi
                     <hr>
                  </div>

                  <div class="col-md-12">
                    <i class="fa fa-phone mr-1" style="color: rgb(2,4,104); font-size:19px; "></i>  <a href="tel:+243817883541"> +243817883541 </a>
                     <hr>
                  </div>
                  <div class="col-md-12">
                    <i class="fa fa-envelope mr-1" style="color: rgb(2,4,104); font-size:19px; "></i>  <a href="mailto:info@congofirstchoice.com"> info@congofirstchoice.com</a>
                     <hr>
                  </div>

                  <div class="col-md-12">
                    <i class="fa fa-map-marker mr-1" style="color: rgb(2,4,104); font-size:19px; "></i>  Situé sur le Boulevard Kanyamuhanga, la rue Vanny Bishweka, numero 20, au-dessus de SMICO, 2eme étage, Commune de Goma
                     <hr>
                  </div>
                </div>
         </div>
       </div>
     </div>
   </div>
  <?php include ('footer.php'); ?>