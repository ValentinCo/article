
<?php
try
{
    //on se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=article;charset=utf8', 'root', 'admin');
    // var_dump($bdd);
}
catch (Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}
// Si tout va bien, on peut continuer

$req = $bdd->query('select * from Books ORDER BY boo_title ASC')->fetchAll();
// var_dump($req);
?>
<div class="container">
  
  <div class="bg-faded p-4 my-4">
    <hr class="divider">
    <h2 class="text-center text-lg text-uppercase my-0">Détails
      <strong>des livres</strong>
    </h2>
    <hr class="divider">

<table class="table">
    
    <tbody>
        <tr>
            <td scope="row"></td>
            <td><?php foreach ($req as $value): ?></td>
            <td>
                <?= $value['boo_id'] ?>
                    
            </td>
            <td>
                <?= $value['boo_author'] ?>
            </td>
            <td>
                <?= '<a href="?p=details&id='.$value['boo_id'].'">'.$value['boo_title'].'</a>' ?> </td>
            <td>
                <?= $value['boo_date'] ?>
            </td>
            <td id="content">
                <?= $value['boo_content'] ?>
            </td>
            <td>
                <?= $value['boo_type'] ?>
            </td>

        </tr>
        <tr>
            <td scope="row"></td>
            <td><?php endforeach ?></td>
            <td></td>
        </tr>
    </tbody>
</table>

