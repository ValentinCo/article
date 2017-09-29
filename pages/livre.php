<?php
  $host = "ec2-176-34-242-58.eu-west-1.compute.amazonaws.com";
  $port = 5432;
  $db = "d3thj9lhpg5b99";
  $user = "hjqntbyrihuwqa";
  $psswd = "992c6d09e807bd2c24428d7a6f1d7d56b5f7db4b9230d55c6bba6a12758270ac";
  setlocale(LC_TIME, 'fra_FR');
  date_default_timezone_set("Europe/Brussels");

try {
    $dbConnect = new PDO("pgsql:host=$host port=$port dbname=$db user=$user password=$psswd"); 
}

catch (Exeption $e){
    
}
  $sql='SELECT boo_date, boo_id, boo_title, boo_author, boo_content, boo_type FROM books';
  $query = $dbConnect->prepare($sql);
  $query->execute();
  $result = $query->fetchAll();
?>
<div class="container text-center">
    <div class="col-xs-12">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="text-center">Référence</th>
                    <th class="text-center">Titre</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">Auteur</th>
                    <th class="text-center">Résumé</th>
                    <th class="text-center">Genre</th>  
                </tr>
            </thead>
            <tbody>
                <?php
                    function left ($str, $length){
                        return substr($str,0,$length);
                    } 
                    foreach ($result as $key => $value):    
                        $date=$value['boo_date'];
                        $date=new DateTime($date);
                ?>
                <tr>
                <th class="text-center"><?=$value['boo_id'];?></th>
                <td class="text-center"><?=$value['boo_title'];?></td>
                <td class="text-center"><?=$date->format('d/m/Y');?></td>
                <td class="text-center"><?=$value['boo_author'];?></td>
                <td id="details" class="text-center"><a href="?p=details"><?=left($value['boo_content'],56).'...*';?></a></td>
                <td class="text-center"><?=$value['boo_type'];?></td>
                <?php
                    endforeach;
                    $query->closeCursor();
                ?>    
                </tr>
            </tbody>
        </table>
    </div>
    <div>
</div>
</div>