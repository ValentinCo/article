<?php

if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'accueil';
}
ob_start();
if($p === 'accueil'){
    include('./pages/accueil.php');
}
if($p === 'livre'){
    include('./pages/livre.php');
}
if($p === 'admin'){
    include('./pages/admin.php');
}
if($p === 'details'){
    include('./pages/details.php');
}
if($p === 'titre'){
    include('./pages/titre.php');
}
if($p === 'genre'){
    include('./pages/genre.php');
}
if($p === 'date'){
    include('./pages/date.php');
}
if($p === 'reference'){
    include('./pages/reference.php');
}
if($p === 'auteur'){
    include('./pages/auteur.php');
}
$content = ob_get_clean();
include('./pages/templates/default.php');
?>