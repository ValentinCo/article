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
            ?>
            <h3 class="text-center text-success">---Welcom Master!---</h3>;
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