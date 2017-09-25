<?php
include('pages/templates/try.php')


?>
<?php
$test = "";
if(!empty($_GET['search'])){
    $test = " WHERE titre LIKE '".$_GET['search']."'";
}
if(!empty($_GET['tri'])){
    $test = " order by " .$_GET['tri'];
}


$reponse = $bdd->query("SELECT * FROM possession". $test);
?>

<div class="container">

<table class="table table-bordered">
    <thead>
    <tr>
        <th><a href="?p=livre&tri=pos_oid">Référence</a></th>
        <th><a href="?p=livre&tri=titre">Titre</a></th>
        <th><a href="?p=livre&tri=genre">Genre</a></th>
        <th><a href="?p=livre&tri=annee">Date</a></th>
        <th><a href="?p=livre&tri=auteur">Auteur</a></th>        
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
