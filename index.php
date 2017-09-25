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
if($p === 'recherche'){
    include('./pages/recherche.php');
}
$content = ob_get_clean();
include('./pages/templates/default.php');
?>