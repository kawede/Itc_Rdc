<?php include ('header.php'); ?>

   <script>
  document.title=" ITC-Rdc | Nous contact"
</script>
   <script type="text/javascript">
     
   </script>
  <br><br>
   <div class="container">
     <div class="col-md-12 shadow" style="background-color:rgb(233,235,236); ; border-radius:5px;">
      <div class="row">
            <section id="contact" class="contact">
        <div class="container">
                <?php
              if (isset($_POST['btninscrit'])) {
                # code...
                extract($_POST);
                if (!empty($nom_complet) && !empty($email) && !empty($sujet) && !empty($message)) {
                  # code...

                    $ps = $db->prepare("INSERT INTO contact(nom_complet,email,sujet,message) VALUES(:nom_complet,:email,:sujet, :message) ");
                    $statement = $ps->execute(array(
                      ':nom_complet'   =>  $nom_complet,
                      ':email'    =>  $email,
                      ':sujet'    =>  $sujet,
                      ':message'   =>  $message

                      ));

                    if (!empty($statement)) {
                      # code...
                       echo '<b class=" text-center alert alert-success"> Message envoyé avec succes </b>';
                    
                    }
                    else{
                      echo("oups!!!!");
                    }
                  }
                }
                else{
                  // echo("Tous les champs sont requis");
                }

              ?>
            <hr>
            <div class="section-title">
                <h2 data-aos="fade-up" style="text-align:center">Contact</h2>
                <p data-aos="fade-up">
                Vous pouvez nous contacter directement dans cette rubrique pour nous transmettre vos pr&eacute;occupations,
                 questions, propositions ou tout autre commentaire et vous aurez un feedback de notre part. Merci!
                </p>
            </div>

            <div class="row justify-content-center">

                <div class="col-xl-3 col-lg-4 mt-4 shadow" data-aos="fade-up" >
                    <div class="info-box">
                        <i class="fa fa-map-marker"></i>
                        <h4>Our Address</h4>
                        <p>
                             <span style="font-weight: bold;">Goma:</span> Q. Katindo, Av La Frontiere N°136 Ref:Un jour Nouveau <br> <span style="font-weight: bold;">Kinshasa:</span> Paroisse Notre Dame de Fatima, 1353, Av.Tombalbaye Gombé 
                        </p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 mt-4 shadow" data-aos="fade-up">
                    <div class="info-box">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <h4>Email Us</h4>
                        <p>ongitcrdc@gmail.com <br>&nbsp;</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 mt-4 shadow" data-aos="fade-up" >
                    <div class="info-box">
                        <i class="fa fa-phone"></i>
                        <h4>Appelez-nous</h4>
                        <p>(+243) 991571461<br>(+243) 810258135 </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
         
                <div class="col-xl-9 col-lg-12 mt-4 py-3">
                                 
                    <form id="contact-form" method="POST">
            
                        <div class="form-row mx-3">
                            <div class="col-md-6 form-group">
                                <!-- <label for="nom"></label> -->
                                <input type="text" name="nom_complet" class="form-control"  style="background-color:white;font-family:candara; color:black;background-color:white;"  placeholder="Votre nom complet"/>
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" style="background-color:white;font-family:candara; color:black;background-color:white;"  placeholder="Votre email"/>
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" name="sujet"  style="background-color:white;font-family:candara; color:black;background-color:white;" placeholder="Sujet" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-12 form-group">
                                <textarea class="form-control" name="message"  style="background-color:white;font-family:candara; color:black;background-color:white;" rows="5" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-12 mx-3 text-center text-danger mb-2">
                                <span ouput-text='ouput'></span>
                            </div>
                            <div class="col-lg-12 form-group">
                                <button class="btn bg-prmy w-100 btn-subcontact"  name="btninscrit" type="submit"style="background-color:rgb(200,0,0); color:white; font-family: candara">
                                    <span>Envoyer le message</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
      </div>
     </div>
   </div>
    
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

  <?php include ('footer.php'); ?>