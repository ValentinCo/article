<?php
include('pages/templates/try.php')
?>

<?php
$search = $_POST['search'];

$sql= sprintf("SELECT * FROM Books 
WHERE boo_title LIKE  '%%%s%%'",$search);

$reponse= $bdd->query($sql);

?>


<div class="container">
         
  <table class="table table-bordered">
    <thead>
      <tr>
      <th>Référence</th>
      <th>Titre</th>
      <th>Genre</th>
      <th>Date</th>
      <th>Auteur</th> 
      </tr>
    </thead>


<?php

while($donnees = $reponse->fetch()){
    ?>
<td><?=$donnees['boo_id']?> </td>
<td><a href=""><?=$donnees['boo_title']?></a></td>
<td><?=$donnees['boo_type']?> </td>
<td><?=$donnees['boo_date']?> </td>
<td><?=$donnees['boo_author']?> </td>
</tr>
</tbody>

</div>
    <?php
    }
    $reponse->closeCursor();
    ?>