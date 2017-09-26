<?php
include('pages/templates/try.php')
?>

<?php
$valueID = $_GET['id'];

$sql= sprintf("DELETE  FROM Books 
WHERE boo_id = %d  ",$valueID);
header('refresh:2; ?p=moderation')
?>

<h1 class="text-center text-success">Article supprimer</h1>
<?php
$reponse= $bdd->query($sql);

?>