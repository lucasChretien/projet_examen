<?php
// session_start();
require ('/Applications/MAMP/htdocs/projet_examen/assets/pages/espace_admin/data_base/model.php');
$pdo = pdo_connect_mysql();
$msg = '';
$getid = $_GET['id'];

if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $recupArticle = "DELETE FROM produits WHERE id = $getid";
    $pdo->exec($recupArticle);
    
    }else{
        echo "aucun id= article recupérer";
}
header('Location: ../manage_product/product_admin.php')
?>

