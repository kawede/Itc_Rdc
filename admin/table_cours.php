  <div class="card shadow mb-4">
  <div class="card-header py-3">
   
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
        <thead>
          <tr>
            <th style="color:black; font-family: candara;">id</th>
            <th style="color:black; font-family: candara;">Titre</th>
            <th style="color:black; font-family: candara;">image</th>
            <th style="color:black; font-family: candara;">Description</th>
            <th style="color:black; font-family: candara;">prix</th>
            <th style="color:black; font-family: candara;">categorie</th>
            <th colspan="2" class="text-center"style="color:black; font-family: candara;">action</th>
          </tr>
        </thead>
        <tbody>
         <!-- selectionner les donnes de la base puis les affichees dans la table -->
        <?php 
         $myqwery=$db->prepare("SELECT cour.id, cour.cour_title,cour.image,cour.description, cour.Prix, categorie.id, categorie.designation FROM cour INNER JOIN categorie ON cour.idcategorie= categorie.id  ");
         $myqwery->execute();
         foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
        ?>
          <tr>
            <td class="text-black"style="color:black; font-family: candara;"><?=$token->id;?> </td>
            <td><span class="badge badge-pill badge-danger"style="color:white; font-family: candara;"><?=$token->cour_title;?></span></td>
            <td class="text-center" style="color:black; font-family: candara;"><img src="images/<?= $token->image;?>" width="60%" alt="Sample Article"></td> 
            <td style="color:black; font-family: candara;"><?=$token->description;?></td>
            <td style="color:black; font-family: candara;"><?=$token->Prix;?></td>
             <td style="color:black; font-family: candara;"><?=$token->designation;?></td>
             <td style="color:black; font-family: candara;"><?= substr($token->description,0,100);?><a href="#">  plus...</a> </td>

            <td class="text-center"><a href="_updatedCour.php?Edit=<?=$token->id;?>"><i class="fas fa-edit"style="color:black;" title="Voulz-vous vraiment modifiez un utilisateur?"></i></a></td> <td class="text-center " ><a href="?delete=<?=$token->id;?>" ><i class="fas fa-trash" style="color:black;" title="Voulz-vous vraiment supprimez un utilisateur?"></i><a></td>
          </tr>
         <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
