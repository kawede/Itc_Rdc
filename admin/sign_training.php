<?php  require_once('includes/_headersec.php'); ?>
<?php include('./pages/_barleft.php') ?>
<?php include('./pages/_content_values.php') ?>

<?php 
if(isset($_GET['delete']) and !empty($_GET['delete'])){
  $delete=htmlspecialchars($_GET['delete']);
  $myqwery=$db->prepare("DELETE FROM demande_formation where id=:id");
  $myqwery->execute(array(
    'id'=>$delete
  ));
}

?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

              
    
          <div class="row">

            <div class="col-lg-12">

          
      
        <div class="card shadow mb-4">
  <div class="card-header py-3">
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="employee_data" width="90%" cellspacing="0">
        <thead>
          <tr>
            <th style="color:black; font-family:candara;"></th>
            <th style="color:black; font-family:candara;">Formation</th>
            <th style="color:black; font-family:candara;">Nom complet</th>
            <th style="color:black; font-family:candara;">email</th>
            <th style="color:black; font-family:candara;">Contact</th>
            <th style="color:black; font-family:candara;">Maniere</th>
             <th style="color:black; font-family:candara;">Place</th>
            <th style="color:black; font-family:candara;">Region</th>
            <th colspan="2" class="text-center" style="color:black; font-family:candara;">action</th>
          </tr>
        </thead>
        <tbody>
         <!-- selectionner les donnes de la base puis les affichees dans la table -->
        <?php 
         $myqwery=$db->prepare("SELECT * FROM demande_formation ORDER BY id DESC ");
         $myqwery->execute();
         foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
        ?>
          <tr>
            <td class="text-black" style="color:black; font-family:candara;"><i class="fa fa-circle" aria-hidden="true" style="font-size:10px;color:rgb(200,0,0);"></i> </td>
            <td><span class="badge badge-pill badge-success" style="color:white; font-family:candara;"><?=$token->titre_formation;?></span></td>
            <td style="color:black; font-family:candara;"><?=$token->nom_complet;?></td>     
            <td style="color:black; font-family:candara;"><?=$token->email;?></td>
              <td style="color:black; font-family:candara;"><?=$token->phone;?></td>
               <td style="color:black; font-family:candara;"><?=$token->maniere;?></td>
              <td style="color:black; font-family:candara;"><?=$token->centre;?></td>
                 <td style="color:black; font-family:candara;"><?=$token->lieu;?></td>
             <!-- ajouter les boutons modifier et supprimer et les passes en paramettre pour supprimer et modifier -->
              <!-- ajouter les boutons modifier et supprimer et les passes en paramettre pour supprimer et modifier -->
        <td class="text-center " ><a href="?delete=<?=$token->id;?>" ><i class="fas fa-trash" style="color:black;" title="Voulz-vous vraiment supprimez?"></i><a></td>
          </tr>
         <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>
<?php require_once('mains/footer.php'); ?>
 
