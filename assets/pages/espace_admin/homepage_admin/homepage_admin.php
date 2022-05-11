<?php
require '/Applications/MAMP/htdocs/projet_examen/assets/pages/espace_admin/data_base/model.php';
$pdo = pdo_connect_mysql();
// session_start();
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
    <link rel="stylesheet" href="../../../css/homepage.css">
    <title>home</title>
</head>
<body>
    <!----------------- acccès admin --------------->
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Espace admin</span>
                <div class="admin_button">
                    <i class="fa-solid fa-users"></i>
                    <a href="../users/user.php"> <button class="admin_button1"> gérer compte client </button>  </a>
                </div>
                <div class="admin_button2">
                    <i class="fa-solid fa-shirt"></i>
                    <a href="../manage_product/product_admin.php"> <button class="admin_button1"> afficher les article</button> </a>
                </div>
                <div class="return_acceuil">
                    
                    <a href="../../../../index.php"> <i class="fa-solid fa-house"></i> </a>
                </div>
            </div>
        </div>
    </div>
        <!---------------- publier un article ------------------->
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">publier un article</span>
                <form method="POST" action="">
                    <div class="input_border">
                        <input type="text" name="pr_img" id="pr_img" placeholder="source image" >
                        <i class="fa-solid fa-file-image"></i>
                    </div>
                    <div class="input_border">
                        <input type="text" name="pr_prix1" id="pr_prix1" placeholder="prix produit avant promo" >  
                        <i class="fa-solid fa-euro-sign"></i>
                    </div>
                    <div class="input_border">
                        <input type="text" name="pr_prix2" id="pr_prix2" placeholder="prix achat (obligatoire)">
                        <i class="fa-solid fa-euro-sign"></i>
                    </div>
                    <!--  -->
                    <?php
                        $types_produits = $pdo->query("SELECT * FROM clothes");
                        $types_produits = $types_produits->fetchAll(PDO::FETCH_ASSOC);
                    ?>
                    <!--  -->
                    <div class="selectOrdre">
                        <p>Types</p>
                        <select name="types" id="types">
                        <option selected="selected" value="0"> aucun </option>
                            <?php
                            foreach( $types_produits as $type){  
                                if($type["id"] !=0){
                            ?>
                            <option value="<?php echo $type["id"]; ?>"><?php echo $type["types"]; ?></option>
                            <?php
                            }
                        }
                            ?>
                        </select>
                    </div>
                    <div class="input_border">
                        <textarea name="pr_contenu" ></textarea> 
                    </div>
                    <?php 
                        if(isset($_POST['envoi'])){
                            if( !empty($_POST['pr_contenu']) AND !empty($_POST['pr_prix2']) AND !empty($_POST['pr_img'])){
                                $pr_prix2 = ($_POST['pr_prix2']);
                                $pr_contenu = (($_POST['pr_contenu']));
                                $pr_prix1 = (($_POST['pr_prix1']));
                                $pr_img = (($_POST['pr_img']));
                                $types = (($_POST['types']));
                        
                                $insererArticle = ("INSERT INTO produits(pr_prix2, pr_contenu, pr_prix1, pr_img, types)VALUES('$pr_prix2', '$pr_contenu', '$pr_prix1', '$pr_img', $types)");
                                try {
                                    $pdo->exec($insererArticle);
                                    ?>
                                    <p class="erreur">l'article est bien envoyer</p>
                                    <?php
                                }catch (Exception $ex){
                                    echo $ex;
                                }
                            }else{
                                ?>
                                <p class="erreur">erreur</p>
                                <?php
                            }
                        }
                                ?>                    
                    <div class="input_border button">
                        <input class="button_publish" type="submit" name="envoi" id="description">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<!---------- publish products ----------->

