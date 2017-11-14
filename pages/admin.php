<<<<<<< HEAD
<?php
  $host = "ec2-176-34-242-58.eu-west-1.compute.amazonaws.com";
  $port = 5432;
  $db = "d3thj9lhpg5b99";
  $user = "hjqntbyrihuwqa";
  $psswd = "992c6d09e807bd2c24428d7a6f1d7d56b5f7db4b9230d55c6bba6a12758270ac";

  $dbConnect = new PDO("pgsql:host=$host port=$port dbname=$db user=$user password=$psswd"); 
  
  $sql='SELECT to_char(boo_date, DD MM YYYY) as date, boo_id, boo_title, boo_author, boo_content, boo_type FROM books';
  $query = $dbConnect->prepare($sql);
  $query->execute();
  $result = $query->fetchAll();
  //$dbConnect = pg_connect('host='.$host, $port, $db');
    
?>
<div class="container">
    <div class="row">
        <div class="col-md-12"></div>
        <div class="col-md-12"></div>
        <div class="col-md-12"></div>
        <div class="col-md-12"></div>
        <div class="col-md-12"></div>
    </div>
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-primary">
            <div class="panel-heading">Login</div>
            <div class="panel-body">
            
            <!-- Login Form -->
            <form role="form">
            
            <!-- Username Field -->
                <div class="row">
                    <div class="form-group col-xs-12">
                    <label for="username"><span class="text-danger">*</span>Username:</label>
                        <div class="input-group">
                            <input class="form-control" id="username" type="text" name="username" placeholder="Username" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>  
                </div>
                
                <!-- Content Field -->
                <div class="row">
                    <div class="form-group col-xs-12">
                        <label for="password"><span class="text-danger">*</span>Password:</label>
                        <div class="input-group">
                            <input class="form-control" id="password" type="password" name="password" placeholder="Password" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                
                <!-- Login Button -->
                <div class="row">
                    <div class="form-group col-xs-4">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
                
            </form>
            <!-- End of Login Form -->
        </div>
    </div>
</div>
=======
<?php 
    if(isset($_POST)) {
        if(!empty($_POST['co_pseudo']) && !empty($_POST['co_password'])) {
        //Récupération et sécurisation des parametres
        $pseudo = htmlspecialchars($_POST['co_pseudo']);
        $password = $_POST['co_password'];
        //Vérification mot de passe
            include('templates/try.php');
        //Recherche utilisateur
        $sql = sprintf('SELECT * FROM Users WHERE use_name = "%s";', $pseudo);
        $response = $bdd->query($sql);
        $row = $response->fetch();
        if($password === $row['use_password']) {
            $_SESSION['use_name'] = $pseudo;
            $_SESSION['use_id'] = $row['use_id'];
            header('refresh:2; ?p=livre')
            ?>
            <h3 class="text-center text-success">---Welcome Master!---</h3>;
            <?php
        } else {
            ?>
            <h3 class="text-center text-danger">---Identifiants incorrects!---</h3>;
            <?php
        }
        }
    }
?>
    <form method="post" class="text-center">
        <label for="use_name">Pseudo</label><br>
        <input type="text"  id="use_name" name="co_pseudo" placeholder="Pseudo" required><br>
        <label for="use_password">Mot de passe</label><br>
        <input type="password"  id="use_password" name="co_password" placeholder="password" required><br>
        <input type="submit" name="valider" value="Valider">
    </form>
>>>>>>> b2ba14cdefed6fc72a1a373d1e72f82a5df0c973
