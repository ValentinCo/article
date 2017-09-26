<?php
session_start();

$id=$_GET['id'];

$username="root";
$password="admin";
$host="localhost";
$db="article";

try {
  $bdd = new PDO("mysql:dbname=$db;host=$host;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
}
catch(PDOException $e)
{
  echo "Connection failed: " . $e->getMessage();
}

$req = $bdd->query('select * from Books where boo_id = '. $id)->fetchAll();
// var_dump($req);

if (!empty($_POST['pseudo']) && !empty($_POST['comment'])){
  
  try {
    $comment=htmlspecialchars($_POST['comment']);
    $pseudo=htmlspecialchars($_POST['pseudo']);
    
    
    $sql=sprintf("insert into Comments (com_content, com_pseudo, boo_id) values ('%s','%s','%d');", $comment, $pseudo, $id);
    
    $result = $bdd->query($sql);
  } catch (Exception $e)
    {
      echo $e->getMessage();
    }
}

?>

<div class="container">
  
  <div class="bg-faded p-4 my-4">
    <hr class="divider">
    <h2 class="text-center text-lg text-uppercase my-0">Détails
      <strong>du livre</strong>
    </h2>
    <hr class="divider">
    <div class="row">
      <div class="col-lg-6">
        <p class="titre text-justify"><strong>Titre du Livre :</strong> </p>
        <p class="auteur text-justify"><strong>Auteur :</strong>  </p>
        <p class="année text-justify"><strong>Date de parution :</strong></p>
      </div>
      <div class="col-lg-6">
        <p text-justify><?php foreach ($req as $value): ?><?= $value['boo_title'] ?></p>
        <p text-justify><?= $value['boo_author'] ?>
        </p>
        <p text-justify> <?= $value['boo_date'] ?>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-10">
        <p class="description text-justify"><?= $value['boo_content'] ?></p>
      </div>
      <?php endforeach ?>
      <div class="col-lg-2 text-justify">
        <input class="btn btn-outline-secondary" type="submit" value="Télécharger">
      </div>
      
    </div>
    
    
    <div class=" p-4 my-4">
      <hr class="divider">
      <h2 class="text-center text-lg text-uppercase my-0">Vos
        <strong>Commentaires</strong>
      </h2>
      <hr class="divider">
      <div class="row">
        <div class="col-lg-12">
          
          <!--Panel-->
          <div class="card well clearfix">
            <h3 class="card-header primary-color white-text">Commentaires</h3>
            <div class="card-body pre-scrollable">
              <p class="comment">commentaires ici </p>
              <div class="form-group row col-sm-3">
                <form action="" method="post">
                  <input class="form-control" type="text" name="pseudo" id="pseudo" placeholder="Entrez votre pseudo"><br>
                </div>
                <div class="form-group row col-md-12">
                  <input class="form-control" type="text" name="comment" placeholder="Entrez votre commentaire ici"><br>
                </div>
              </div>
              <input class="btn btn-outline-secondary btn-success" id="poster" type="submit" value="Poster">
            </div>
          </form>
        </div>
        
        <!--/.Panel-->
      </div>
    </div>
  </div>
</div>
<!-- /.container -->
<footer class="bg-faded text-center py-5">
  <div class="container">
    <p class="m-0">Copyright &copy; Simplon Carcassonne 2017</p>
  </div>
</footer>

<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="node_modules/markdown/lib/markdown.js"></script>
<script src="pages/app.js"></script>