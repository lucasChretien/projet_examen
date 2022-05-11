<?php
// session_start();
require '/Applications/MAMP/htdocs/projet_examen/assets/pages/espace_admin/data_base/model.php';
$pdo = pdo_connect_mysql();
$msg = '';

if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $recupUser = "DELETE FROM users WHERE id = $getid";
    $pdo->exec($recupUser);
    
    }else{
        echo "pas recup";
}
header('Location: ../../espace_admin/users/user.php');
?>