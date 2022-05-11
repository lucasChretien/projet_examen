<?php
function pdo_connect_mysql(){
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = 'root';
    $DATABASE_NAME = 'db_admin';
    try {
        return new PDO('mysql:host='.$DATABASE_HOST. ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch(PDOException $exeption) {
        exit('failed to connect bdd');
    }
}


function create($us_nom, $us_mdp, $us_mail){
    try{
        $cons = pdo_connect_mysql();
        $sql = "INSERT INTO users(`id`, `us_nom`, `us_mdp`, `us_mail`) VALUES (NULL, '$us_nom', '$us_mdp' , '$us_mail');";
        $cons->exec($sql);
    }
    catch(PDOException $a) {
        echo $sql . "<br>" . $a->getMessage();
    } 
}

?>