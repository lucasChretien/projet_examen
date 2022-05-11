<?php
// session_start();
require ('/Applications/MAMP/htdocs/projet_examen/assets/pages/espace_admin/data_base/model.php');
$pdo = pdo_connect_mysql();
$msg = '';
// if(!$_SESSION['mdp']){
//     header('Location: connexion.php');
// }

$recup_id2 = $_REQUEST['id'];
$req = "SELECT * FROM produits WHERE id= $recup_id2";
$produit = $pdo->query($req)->fetchAll (PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/category_pages.css">
    <link rel="stylesheet" href="../../../css/product_buy.css">
    <link rel="stylesheet" href="../../../css/navbar.css">
    <link rel="stylesheet" href="../../../css/footer.css">
    <link rel="stylesheet" href="../../../css/filtre_product.css">
    <title>Document</title>
</head>
</body>
    <div class="site_produit">
        <!-- navbar -->
        <nav id="navbarX">
            <div class="divNavGlobal">
            <!-- titre , search_bar , icone account  -->
                <div class="account">
                    <a href="../../../../index.php">
                        <p>ShopClohing</p>
                    </a>
                    
                    <form method="GET">
                        <div id="search_bar">
                            <input type="text" placeholder="rechercher">
                            <button>
                                <img class="search_icone" src="../../../img/navBAr/searchicone.png" alt="">
                            </button> 
                        </div>
                    </form>
                    <div class="icone">
                        <img src="../../../img/navBAr/like.png" alt="">
                        <img src="../../../img/navBAr/shop-bag.png" alt="">
                        <img src="../../../img/navBAr/user.png" alt="">
                    </div>
                </div>
            <!-- navBar categorie -->
                <div class="categorie_global">
                    <div class="categorie">
                        <a href="../../../pages/page_products/nouvaute.php"> <p>nouveautés</p> </a>
                        <a href="../../../pages/page_products/top_vente.php"> <p>Top ventes</p> </a>
                        <a href="../../../pages/page_products/hauts.php"> <p>hauts</p> </a>
                        <a href="../../../pages/page_products/robes.php"> <p>robes</p> </a>
                        <a href="../../../pages/page_products/veste.php"> <p>vestes et manteaux</p> </a>
                        <a href="../../../pages/page_products/pantalon.php"> <p>pantalons</p> </a>
                        <a href="../../../pages/page_products/chaussures.php"> <p>chaussures</p> </a>
                        <a href="../../../pages/page_products/accesoires.php"> <p>accésoires</p></a>
                    </div>
                </div>
            <!-- navBar promo -->
                <div class="promoGlobal">
                    <div class="promo">
                        <div class="promo1">
                            <p class="text1">livraisons standard illimitées</p>
                            <p class="text2">pendant 1an pour 9,99€ au lieu de 12,99€</p>
                        </div>
                        <div class="promo2">
                            <p class="text1"> JUSQU’À -50% SUR TOUT!</p>
                            <p class="text2">Du 2 mars au 4 juillet !</p>
                        </div>
                        <div class="promo3">
                            <p class="text1">-10% de réduction étudiante en plus</p>
                            <p class="text2"> Profiter en des maintenant</p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- article unitaire -->
        <form method="POST" action="buy.php">
            <div class="div_produit">
                <img class="pr_img" src="<?= $produit[0]['pr_img']; ?> " alt="">
                <div class="product_rigth">
                    <div class="text_product">
                        <p class="description_produit"> <?= $produit[0]['pr_contenu']; ?> </p>
                    </div>
                    <div class="price_prodict_buy">
                        <p class="article_prix1"> <?= $produit[0]['pr_prix1']; ?> </p>
                        <p class="article_prix2"> <?= $produit[0]['pr_prix2']; ?> </p>
                    </div>
                    <input type="hidden" name="id" value="<?= $recup_id2;?>">
                    <div class="button_size">
                        <div class="button_size_line1">
                            <button>32</button>
                            <button>34</button>
                            <button>36</button>
                            <button>38</button>
                            <button>40</button>
                            <button>42</button>
                        </div>
                        <div class="button_size_line2">
                            <button>44</button>
                            <button>46</button>
                        </div>
                    </div>
                    <button class="button_add_shop" name="valid" type="submit">ajouter au pannier</button>
                    <p class="livraison_buy">Livraisons standard illimitées pendant 1 an pour 9,99€ au lieu de 12,99€</p>
                </div>
            </div>
        </form>
     <!-- footer -->
     <div class="footer">
            <div class="divtitleFooter">
                <p class="titleFooter">
                    Faites vous plaisir
                </p>
                <p class="textTitle">
                    Recevez notre newsletter pour être au courant des nouvelles tendances et dernières news. 
                    Pas de panique vous pouvez vous en désabonner quand vous voulez.Par ici, pour en savoir 
                    plus sur comment et pourquoi on vous demande ces données.
                </p>
            </div>
        <!-- footer select newseller -->
            <div class="selectGlobal">
                <div class="sabonerMail">
                    <input type="checkbox">
                    <p>je comfirme avoir plus de 16 ans </p>
                </div>
                <div class="inputMail">
                    <input type="text" placeholder="votre adresse mail">
                    <img src="../../../img/footer/bouttonMail.png" alt="">
                </div>
            </div>
        <!-- text info client , marque , livraison  -->
            <div class="textInfoGlobal">
                <!-- info footer 1 -->
                <div class="footerTexts">
                    <div id="text1">
                        <p class="text1">informations client</p>
                    </div>
                    <div id="text2">
                        <p class="text2">Aide Et Contact</p>
                        <p class="text2">Où Est Ma Commande ?</p>
                        <p class="text2"> Livraison</p>
                        <p class="text2">Retours</p>
                        <p class="text2">Contact</p>
                        <p class="text2">Guide Des Tailles</p>
                        <p class="text2">FAQ</p>
                        <p class="text2"> Codes De Réduction</p>
                    </div>   
                </div>
                <div class="footerText">
                    <div id="text1">
                        <p class="text1"> et pour la livraison ?</p>
                    </div>
                    <!-- info footer 2 -->
                    <div id="text2">
                        <div class="footerLivraison">
                            <p class="text2">Livraisons illimitées </p>
                            <p class="text3">9,99€ (au lieu de 12,99€) / pendant 1 an</p>
                        </div>
                        <div class="footerLivraison">
                            <p class="text2">Standard</p>
                            <p class="text4">5,99€ (6 - 8 journées)</p>
                        </div>
                        <div class="footerLivraison">
                            <p class="text2"> Livraison express</p>
                            <p class="text5">12,99€</p>
                        </div>
                        <p class="text2">Livraison En France Métropolitaine Disponible</p>
                        <p class="text2">Livraison En Belgique Et En Suisse Disponible</p>
                    </div>   
                </div>
                <!-- info footer 3 -->
                <div class="footerText">
                    <div id="text1">
                        <p class="text1">informations marque</p>
                    </div>
                    <div id="text2">
                        <p class="text2"> À Propos</p>
                        <p class="text2">Plan Du Site</p>
                        <p class="text2">Affiliés</p>
                        <p class="text2">Ronditions Générales De Vente</p>
                        <p class="text2">Conditions De Codes Promotionnels</p>
                        <p class="text2">Réduction Étudiants</p>
                        <p class="text2">Parrainez Votre Bestie</p>
                    </div>   
                </div>
            </div>
            <!-- mention legal -->
            <p class="text6">Politique de confidentialité :: Conditions d’utilisation 
                :: Politique relative aux cookies :: Mentions légales
            </p>
            <!-- beandeau pays internationnale -->
            <div class="beandeauPays">
                <div class="titlePays">
                    <p> retrouver ShopClohing a l'internationnale </p>
                </div>
                <div class="paysSite">
                    <img src="../../../img/pays/paysESp.jpeg" alt="">
                    <img src="../../../img/pays/paysEU.jpeg" alt="">
                    <img src="../../../img/pays/paysIRL.png" alt="">
                    <img src="../../../img/pays/paysITA.jpeg" alt="">
                    <img src="../../../img/pays/paysUK.png" alt="">
                    <img src="../../../img/pays/paysUSA.png" alt="">
                    <img src="../../../img/pays/paysALL.jpeg" alt="">
                </div>
            </div>
            <!-- logo ReseauSociaux -->
            <div class="imgLogo">
                <img src="../../../img/logoReseau/instaGris.png" alt="">
                <img src="../../../img/logoReseau/logoFacebookGris.png" alt="">
                <img src="../../../img/logoReseau/twitterGris.webp" alt="">
                <img src="../../../img/logoReseau/wattsappGris.png" alt="">
                <img src="../../../img/logoReseau/snapGris.jpeg" alt="">
            </div>
        </div>
</div>
</body>
</html>
            


