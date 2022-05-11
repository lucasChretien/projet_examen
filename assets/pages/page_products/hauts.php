<?php
// session_start();
require '/Applications/MAMP/htdocs/projet_examen/assets/pages/espace_admin/data_base/model.php';
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
    <link rel="stylesheet" href="../../css/category_pages.css">
    <link rel="stylesheet" href="../../css/products.css">
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/filtre_product.css">
    <title>Document</title>
</head>
<body>
    <!-- div.global page -->
    <div class="site_produit">
        <!-- navbar -->
        <nav id="navbarX">
            <div class="divNavGlobal">
            <!-- titre , search_bar , icone account  -->
                <div class="account">
                    <a href="../../../index.php">
                        <p>ShopClohing</p>
                    </a>
                    
                    <form method="GET">
                        <div id="search_bar">
                            <input type="text" placeholder="rechercher">
                            <button>
                                <img class="search_icone" src="../../img/navBAr/searchicone.png" alt="">
                            </button> 
                        </div>
                    </form>
                    <div class="icone">
                        <img src="../../img/navBAr/like.png" alt="">
                        <img src="../../img/navBAr/shop-bag.png" alt="">
                        <img src="../../img/navBAr/user.png" alt="">
                    </div>
                </div>
            <!-- navBar categorie -->
                <div class="categorie_global">
                    <div class="categorie">
                        <a href="../page_products/nouvaute.php"> <p>nouveautés</p> </a>
                        <a href="../page_products/top_vente.php"> <p>Top ventes</p> </a>
                        <a href="../../pages/page_products/hauts.php"> <p>hauts</p> </a>
                        <a href="../page_products/robes.php"> <p>robes</p> </a>
                        <a href="../page_products/veste.php"> <p>vestes et manteaux</p> </a>
                        <a href="../page_products/pantalon.php"> <p>pantalons</p> </a>
                        <a href="../page_products/chaussures.php"> <p>chaussures</p> </a>
                        <a href="../page_products/accesoires.php"> <p>accésoires</p></a>
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
     <!-- en tête page nouveauté -->
        <div class="barCategorie">
            <a href="../../../index.php"> <p class="barText1">Acceuil /</p> </a>
            <a href="../page_products/accesoires.php"> <p class="barText2">accesoires</p> </a>
        </div>
        <p class="TitleNouveauté">hauts</p>
        <div class="selectOrdre">
            <p>TRIER PAR</p>
            <select name="ordre" id="Ordre-select">
                <option value="">Ordre croissant</option>
                <option value="dog">Ordre décroissant</option>
            </select>
        </div>
        <!-- filtre produit  -->
        <div class="filtreGlobal">
            <div class="filtreNouvauté">
                <div class="titleNouveauter">
                    <img src="../../img/down-arrow.png" alt="">
                    <p>hauts</p>
                </div>
                <div class="choixFiltre">
                    <p>hauts de la semaine</p>
                    <p>(654)</p>
                    <p>hauts de la saison</p>
                    <p>(323)</p>
                    <p>top vente hauts</p>
                    <p>(90)</p>
                </div>
                <!-- border séparateur -->
                <div class="borderSéparateur"> </div>
                <!-- taille vêtement -->
                <div class="titleNouveauter">
                    <img src="../../img/down-arrow.png" alt="">
                    <p>Taille vêtements</p>
                </div>
                <!-- boutton choie taille -->
                <div class="boutonTaille">
                    <div class="buttonVetLigne">
                        <button>32</button>
                        <button>34</button>
                        <button>36</button>
                        <button>38</button>
                    </div>
                    <div class="buttonVetLigne">
                        <button>40</button>
                        <button>42</button>
                        <button>44</button>
                        <button>46</button>
                    </div>
                </div>
                <!-- border séparateur -->
                <div class="borderSéparateur"> </div>
                <!-- filtre prix -->
                <div class="titleNouveauter">
                    <img src="../../img/down-arrow.png" alt="">
                    <p> couleurs </p>
                </div>
                <!-- boutton choie taille -->
                <div class="buttonCouleurs">
                    <div class="buttonVetLigne">
                        <button class="button1"></button>
                        <button class="button2"></button>
                        <button class="button3"></button>
                        <button class="button4"></button>
                    </div>
                    <div class="buttonVetLigne">
                        <button class="button5"></button>
                        <button class="button6"></button>
                        <button class="button7"></button>
                        <button class="button8"></button>
                    </div>
                </div>
            </div>
            <!-- afficher les article -->
            <div class="div_produit">
            <?php
                $recupArticle = $pdo->query('SELECT * FROM produits WHERE types = (SELECT id FROM clothes WHERE types ="hauts")');
                $articles = $recupArticle->fetchAll(\PDO::FETCH_ASSOC);
        
            ?>

           <!-- produit achat -->
           <?php foreach($articles as $article) :?>
            <div class="product_rigth">
                <img class="pr_img" src="<?= $article['pr_img']; ?> " alt="">
                <p class="article_prix1"> <?= $article['pr_prix1']; ?> </p>
                <a href="../espace_admin/buy_product/unitary_product.php?id=<?= $article['id']; ?>">
                    <button class="button_update"><img class="img_udpdate_shop" src="../../img/Manage_product/shopping-cart.png" alt=""></button>
                </a>
                <p class="article_prix2"> <?= $article['pr_prix2']; ?> </p> 
                <p class="description_produit"> <?= $article['pr_contenu']; ?> </p>
            </div>
            
            <?php endforeach ?>
            </div>
        </div>

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
                    <img src="../../img/footer/bouttonMail.png" alt="">
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
                    <img src="../../img/pays/paysESp.jpeg" alt="">
                    <img src="../..//img/pays/paysEU.jpeg" alt="">
                    <img src="../../img/pays/paysIRL.png" alt="">
                    <img src="../../img/pays/paysITA.jpeg" alt="">
                    <img src="../../img/pays/paysUK.png" alt="">
                    <img src="../../img/pays/paysUSA.png" alt="">
                    <img src="../../img/pays/paysALL.jpeg" alt="">
                </div>
            </div>
            <!-- logo ReseauSociaux -->
            <div class="imgLogo">
                <img src="../../img/logoReseau/instaGris.png" alt="">
                <img src="../../img/logoReseau/logoFacebookGris.png" alt="">
                <img src="../../img/logoReseau/twitterGris.webp" alt="">
                <img src="../../img/logoReseau/wattsappGris.png" alt="">
                <img src="../../img/logoReseau/snapGris.jpeg" alt="">
            </div>
        </div>
</div>
</body>
</html>
