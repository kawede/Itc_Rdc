<?php include ('header.php'); ?>

   <!-- Class container here -->
  <script>
  document.title=" First-Choice | Nos formations"
</script>
 <div class="col-md-12"style="background-color: rgb(2,4,104);">
   <div class="row" >
     <div class="col-md-12" >
       <h1 class="text-center text-white"><i class="fa fa-users" style="font-size:25px;"></i> Nos Formation</h1>
       <p class="text-center text-white">Soumettez maintenant votre candidature.</p>
     </div>
   </div>
 </div>
 <div class="container mt-2">

     <div class="col-md-12">
         <div class="row">
       <div class="col-md-4">
         <img src="assets/images/10.jpg" width="300px">
       </div>
       <div class="col-md-8">
         <div class="row card mt-4">
           <h2 class="text-center mt-2">Soumettez votre candidature</h2>
           <table class="countdownContainer">
          <tr class="info ">
            <td colspan="4" class="text-center text-white">Chrismas countdown</td>
          </tr>
          <tr class="info" style=" font-size: 50px;">
            <td id="days" style="text-align: center;">120</td>
            <td id="hours" style="text-align: center;">4</td>
            <td id="minutes" style="text-align: center;">12</td>
            <td id="seconds" style="text-align: center;">22</td>
          </tr>
          <tr class="mt-2">
            <td style="font-size: 20px; text-align:center;">Jours</td>
            <td style="font-size: 20px; text-align:center;">Heures</td>
            <td style="font-size: 20px; text-align:center;">Minutes</td>
            <td style="font-size: 20px; text-align:center;">Secondes</td>
          </tr>
        </table>
         </div>
         <a href="inscription" class="btn btn-primary btn-block mt-4" style="background-color: rgb(2,4,104);font-family:candara;">Inscrivez-vous maintenant</a>
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