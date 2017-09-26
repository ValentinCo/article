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

<table class="table table-bordered text-center">
    <thead>
    <tr>
        <th>Référence</th>
        <th>Titre</th>
        <th>Edit</th>
        <th>Delete</th>       
    </tr>
    </thead>

    <h1 class="text-center">Modération</h1>
    <p class="text-center">_____________</p>
<?php
while  ($donnees = $reponse->fetch()){
    
?>
<td><?=$donnees['boo_id']?> </td>
<td><?=$donnees['boo_title']?></td>
<td><a href=""><img src="pages/image/editer.png" alt="image edition"></a></td>
<td><a data-toggle="modal" data-target="#exampleModal<?=$donnees['boo_id']?>" href=""><img src="pages/image/effacer.png" alt="image edition"></a>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?=$donnees['boo_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        Voulez vous vraiment supprimer ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="?p=supression&id=<?=$donnees['boo_id']?>"><button type="button" class="btn btn-danger">Valider</button></a>
      </div>
    </div>
  </div>
</div>
</td>
</tr>
</tbody>
<img src="" alt="">

    <?php
}

$reponse->closeCursor();
?>
