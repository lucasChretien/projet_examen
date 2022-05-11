<?php
// session_start();
require ('/Applications/MAMP/htdocs/projet_examen/assets/pages/espace_admin/data_base/model.php');
$pdo = pdo_connect_mysql();
$msg = '';
// if(!$_SESSION['mdp']){
//     header('Location: connexion.php');
// }
?>

<?php 
$recup_id = $_REQUEST['id'];
$req = "SELECT * FROM produits WHERE id= $recup_id";
$produit = $pdo->query($req)->fetchAll (PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="update.php">
        <input type="text" name="pr_img" value="<?= $produit[0]['pr_img'];?>" >
        <input type="text" name="pr_prix1" value="<?= $produit[0]['pr_prix1'];?>" >
        <input type="text" name="pr_prix2" value="<?= $produit[0]['pr_prix2'];?>" >
        <input type="hidden" name="id" value="<?= $recup_id;?>">
        <textarea name="pr_contenu">
            <?= $produit[0]['pr_contenu'];?>
        </textarea>
        <button name="valid" type="submit">modif</button>
    </form>
</body>
</html>
