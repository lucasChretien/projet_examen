<?php
// session_start();
require ('/Applications/MAMP/htdocs/projet_examen/assets/pages/espace_admin/data_base/model.php');
$pdo = pdo_connect_mysql();
$msg = '';
// if(!$_SESSION['mdp']){
//     header('Location: connexion.php');
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../../../css/products.css">
    <title>afficher les article</title>
</head>
<body>
    <!-- retour espace admin -->
    <div class="return_acceuil">
        <a href="../../espace_admin/homepage_admin/homepage_admin.php"> <i class="fa-solid fa-house"></i> </a>
    </div>
    <!-- afficher les article -->

     <?php
        $recupArticle = $pdo->query('SELECT * FROM produits');
        $articles = $recupArticle->fetchAll(\PDO::FETCH_ASSOC);  
    ?>
     
    <?php foreach($articles as $article) :?>
        <div class="article_global">
            <div class="article_unitaire">
                <img class="pr_img" src="<?= $article['pr_img']; ?> " alt="">
                <p class="article_prix1"> <?= $article['pr_prix1']; ?> </p>
                <p class="article_prix2"> <?= $article['pr_prix2']; ?> </p>
                <p class="description_produit"> <?= $article['pr_contenu']; ?> </p>
                <a href="./delete.php?id=<?= $article['id']; ?>">
                    <button class="button_delete"><img class="img_trash" src="../../../img/Manage_product/trash.png" alt=""></button>
                </a>
                <a href="./modify.php?id=<?= $article['id']; ?>">
                    <button class="button_update"><img class="img_udpdate" src="../../../img/Manage_product/pen.png" alt=""></button>
                </a>
            </div>
        </div>
    <?php endforeach ?>

    <!-- fin afficher les article  -->
</body>
</html>
