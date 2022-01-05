
<div class="bg-white py-2 collapse-inner rounded">
     <h6 class="collapse-header"><i class="fas fa-home" style=" font-family:  candara; color:  black; font-weight:bold;"></i>  Menu principal</h6>
      <a class="collapse-item" href="home"style=" font-family:  candara; color:  black; font-weight:bold;" disabled><i class="fa fa-home" aria-hidden="true"></i>  Home</a>
            
		<?php 
	  		if(isset($_SESSION['uservisiteur']['niveau'])){
	  			if($_SESSION['uservisiteur']['niveau'] === '1'){ 
		?>
       <a class="collapse-item" href="_new_user" style=" font-family:  candara; color:  black; font-weight:bold;" disabled><i class="fa fa-user" aria-hidden="true"></i>  Utilisateur</a>
       <a class="collapse-item" href="formation" style=" font-family:  candara; color:  black; font-weight:bold;" disabled><i class="fa fa-user" aria-hidden="true"></i>  Nouvelle formation</a> 
   
      <a class="collapse-item" href="categorie"style=" font-family:  candara; color:  black; font-weight:bold;" disabled><i class="fa fa-user" aria-hidden="true"></i>  Nouvelle categorie</a>
      <a class="collapse-item" href="region"style=" font-family:  candara; color:  black; font-weight:bold;"><i class="fa fa-user" aria-hidden="true"></i>  Nouvelle Region</a>
      <a class="collapse-item" href="programme"style=" font-family:  candara; color:  black; font-weight:bold;"><i class="fa fa-users" aria-hidden="true"></i> Nouveau programme</a> 
      <a class="collapse-item" href="sign_training"style=" font-family:  candara; color:  black; font-weight:bold;"><i class="fa fa-users" aria-hidden="true"></i> Liste des inscrits</a>
      <a class="collapse-item" href="contact"style=" font-family:  candara; color:  black; font-weight:bold;"><i class="fa fa-users" aria-hidden="true"></i> Brouillon</a>  
      		<?php		
          			}
          		}
          	?> 

              <?php 
        if(isset($_SESSION['uservisiteur']['niveau'])){
          if($_SESSION['uservisiteur']['niveau'] === '2'){ 
    ?>  
       <a class="collapse-item" href="formation" style=" font-family:  candara; color:  black; font-weight:bold;" disabled><i class="fa fa-user" aria-hidden="true"></i>  Nouvelle formation</a> 
       <a class="collapse-item" href="programme"style=" font-family:  candara; color:  black; font-weight:bold;"><i class="fa fa-users" aria-hidden="true"></i> Nouveau programme</a> 
        <?php   
                }
              }
            ?> 
          </div>