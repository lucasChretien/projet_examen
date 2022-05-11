
<?php

// session_start();
require ('/Applications/MAMP/htdocs/projet_examen/assets/pages/espace_admin/data_base/model.php');
$pdo = pdo_connect_mysql();

print_r($_POST);
$id = $_POST['id'];
$modif_img = $_POST['pr_img'];
$modif_pr_prix2 = $_POST['pr_prix2'];
$modif_pr_prix1 = $_POST['pr_prix1'];
$modif_contenu = $_POST['pr_contenu'];

if(!empty($modif_pr_prix2) and !empty($modif_pr_prix2) and !empty($modif_pr_prix1) and !empty($modif_contenu)) {
    //  UPDATE `produits` SET `pr_titre` = 'ssww', `pr_contenu` = 'alll' WHERE `produits`.`id` = ;
    $req = "UPDATE produits SET pr_img = '$modif_img', pr_prix2 = '$modif_pr_prix2', pr_prix1 = '$modif_pr_prix1', pr_contenu = '$modif_contenu' WHERE id = $id";
    $pdo->exec($req);
    header('Location: ../manage_product/product_admin.php');
}
?>