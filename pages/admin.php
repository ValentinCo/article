 <?php
 $username="root";
 $password="admin";
 $host="localhost";
 $db="article";
 
 try {
    $bdd = new PDO("mysql:dbname=$db;host=$host;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

