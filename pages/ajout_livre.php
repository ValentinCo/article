<?php
include('pages/templates/try.php')
?>

<?php
$titre = htmlspecialchars($_POST['titre']);
$auteur = htmlspecialchars($_POST['auteur']);
$description = htmlspecialchars($_POST['description']);
$date = $_POST['date'];
$genre = htmlspecialchars($_POST['genre']);




$sql = sprintf('INSERT INTO Books (boo_author, boo_title, boo_content, boo_date, boo_type) 
VALUES ("%s", "%s", "%s", "%s", "%s")', $auteur, $titre, $description, $date, $genre);
?>

<h1 class="text-center text-success">Livre ajouter</h1>
<?php header('refresh:2; ?p=moderation') ?>
<?php
$reponse= $bdd->query($sql);

?>