<?php
//Lance la bdd 'dbname=Nom de la bdd' 'root = nom utilisateur' 'admin= mdp'
try
{
$bdd = new PDO('mysql:host=localhost;dbname=article;charset=utf8', 'root', 'admin');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>