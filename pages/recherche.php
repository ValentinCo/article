<?php
include('pages/templates/try.php')
?>

<?php
$search = $_POST['search'];

$sql= sprintf("SELECT * FROM possession 
WHERE titre LIKE  '%%%s%%' OR genre LIKE '%%%s%%' OR  annee LIKE '%%%s%%' OR auteur LIKE '%%%s%%' OR studio LIKE '%%%s%%'",$search, $search, $search, $search, $search);

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
<td><?=$donnees['pos_oid']?> </td>
<td><a href=""><?=$donnees['titre']?></a></td>
<td><?=$donnees['genre']?> </td>
<td><?=$donnees['annee']?> </td>
<td><?=$donnees['auteur']?> </td>
</tr>
</tbody>

</div>
    <?php
    }
    $reponse->closeCursor();
    ?>