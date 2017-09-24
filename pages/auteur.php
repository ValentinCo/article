<?php
include('pages/templates/try.php')
?>
<?php
$reponse = $bdd->query('SELECT * FROM possession ORDER BY auteur ASC');
?>

<div class="container">
         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th><a href="?p=reference">Référence</a></th>
        <th><a href="?p=titre">Titre</a></th>
        <th><a href="?p=genre">Genre</a></th>
        <th><a href="?p=date">Date</a></th>
        <th><a href="?p=auteur">Auteur</a></th>        
      </tr>
    </thead>

    <h1 class="text-center">Biblio media</h1>
    <p class="text-center">_____________</p>
<?php
while  ($donnees = $reponse->fetch()){
?>
<p>
<td><?=$donnees['pos_oid']?> </td>
<td><a href=""><?=$donnees['titre']?></a></td>
<td><?=$donnees['genre']?> </td>
<td><?=$donnees['annee']?> </td>
<td><?=$donnees['auteur']?> </td>
</tr>
</tbody>


    <?php
}


$reponse->closeCursor();
?>
