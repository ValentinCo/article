<?php
include('pages/templates/try.php')


?>
<?php
$test = "";

if(!empty($_GET['tri'])){
    $test = " order by " .$_GET['tri'];
}


$reponse = $bdd->query("SELECT * FROM Books". $test);
?>

<div class="container">

<table class="table table-bordered">
    <thead>
    <tr>
        <th><a href="?p=livre&tri=boo_id">Référence</a></th>
        <th><a href="?p=livre&tri=boo_author">Titre</a></th>
        <th><a href="?p=livre&tri=boo_type">Genre</a></th>
        <th><a href="?p=livre&tri=boo_date">Date</a></th>
        <th><a href="?p=livre&tri=boo_title">Auteur</a></th>        
    </tr>
    </thead>

    <h1 class="text-center">Biblio media</h1>
    <p class="text-center">_____________</p>
<?php
while  ($donnees = $reponse->fetch()){
    
?>
<p>
<td><?=$donnees['boo_id']?> </td>
<td><a href=""><?=$donnees['boo_author']?></a></td>
<td><?=$donnees['boo_type']?> </td>
<td><?=$donnees['boo_date']?> </td>
<td><?=$donnees['boo_title']?> </td>
</tr>
</tbody>


    <?php
}

$reponse->closeCursor();
?>
