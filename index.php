<?php
// session_start();
require '/Applications/MAMP/htdocs/projet_examen/assets/pages/espace_admin/data_base/model.php';
$pdo = pdo_connect_mysql();
$msg = '';
// if(!$_SESSION['mdp']){
//     header('Location: connexion.php');
// }
$allproduits = $pdo->query('SELECT * FROM produits ORDER BY id DESC');
if(isset($_GET['search']) AND !empty($_GET['search'])){
    $recherche = htmlspecialchars($_GET['search']);
    $allproduits = $pdo->query('SELECT * FROM produits WHERE produuits LIKE "%'.$recherche. '%" ORDER BY id DESC');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <title>Document</title>
</head>
<body>
    <!-- div global site -->
<div class="sites_acceuil">
    <!-- navbar -->
    <nav id="navbarX">
        <div class="divNavGlobal">
        <!-- titre , search_bar , icone account  -->
            <div class="account">
                <p>ShopClohing</p>
                <form method="GET">
                        <div id="search_bar">
                            <input type="search" name="search" placeholder="rechercher">
                                <button type="submit" name="envoyer">
                                    <img class="search_icone" src="./assets/img/navBAr/searchicone.png" alt="">
                                </button>  
                        </div>
                    </form>
                <div class="icone">
                    <a href="assets/pages/espace_admin/homepage_admin/homepage_admin.php">
                        <img src="./assets/img/navBAr/like.png" alt=""> 
                    </a>
                    <a href="assets/pages/espace_admin/users/user.php">
                        <img src="./assets/img/navBAr/shop-bag.png" alt="">
                    </a>
                    <a href="assets/pages/espace_admin/signUp_login/login.php">
                        <img src="./assets/img/navBAr/user.png" alt="">
                    </a>
                    
                </div>
            </div>
        <!-- navBar categorie -->
            <div class="categorie_global">
                <div class="categorie">
                    <a href="assets/pages/page_products/nouvaute.php"> <p>nouveautés</p> </a>
                    <a href="assets/pages/page_products/top_vente.php"> <p>Top ventes</p> </a>
                    <a href="assets/pages/page_products/hauts.php"> <p>hauts</p> </a>
                    <a href="assets/pages/page_products/robes.php"> <p>robes</p> </a>
                    <a href="assets/pages/page_products/veste.php"> <p>vestes et manteaux</p> </a>
                    <a href="assets/pages/page_products/pantalon.php"> <p>pantalons</p> </a>
                    <a href="assets/pages/page_products/chaussures.php"> <p>chaussures</p> </a>
                    <a href="assets/pages/page_products/accesoires.php"> <p>accésoires</p></a>
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
        <!-- slider acceuil -->
        <div id="slider">
            <img src="./assets/img/slider/slider1.png" alt="La forêt de peupliers" id="slide">
            <div id="precedent" onclick="ChangeSlide(-1)"><</div>
            <div id="suivant" onclick="ChangeSlide(1)">></div>
        </div>
        </div>
        <!-- balise marquee -->
        <div class="baliseMarquee">
            <marquee> 
                <p>
                Decouvrez notre prochaine collection 
                Preintemps du 04/03/2022 au 23/05/2022 !
                </p>
            </marquee>
        </div>
    <!-- categorie vetement  -->
        <h1>parcourir les categories</h1>
        <div class="choieProduit">
            <!-- categorie1 -->
            <div class="classProduit">
                <a href="assets/pages/page_products/nouvaute.php">
                    <img src="./assets/img/categorie/cateNouveaute.png" alt=""> 
                </a>
                <p>nouveautés</p>
            </div>
            
            <!-- categorie2 -->
            <div class="classProduit">
                <a href="assets/pages/page_products/top_vente.php">
                    <img src="./assets/img/categorie/cateTopVente .png" alt="">
                </a>
                <p>Top ventes</p>
            </div>
            <!-- categorie3 -->
            <div class="classProduit">
                <a href="assets/pages/page_products/veste.php">
                    <img src="./assets/img/categorie/categorie1.png" alt="">
                </a>
                <p>vestes et manteaux</p>
            </div>
            <!-- categorie4 -->
            <div class="classProduit">
                <a href="assets/pages/page_products/hauts.php">
                    <img src="./assets/img/categorie/catteHaut.png" alt="">
                </a>
                <p>hauts</p>
            </div>
            <!-- categorie5 -->
            <div class="classProduit">
                <a href="assets/pages/page_products/chaussures.php">
                    <img src="./assets/img/categorie/cateChaussure.png" alt="">
                </a>
                <p>chaussures</p>
            </div>
        </div>
    <!-- nos collection -->
        <div class="nosCollection">
            <!-- collection1 -->
            <a href="assets/pages/page_products/robes.php">
                <div class="collection">
                    <img src="./assets/img/collection/collection1.png" alt="">
                    <p class="collText1">collection printemps</p>
                    <p class="collText2">profiter de la saison !</p>
                    <button>Découvrir</button>
                </div>
            </a>
            <!-- collection2 -->
            <a href="">
                <div class="collection">
                    <img src="./assets/img/collection/collection2.png" alt="">
                    <p class="collText1">ensembles élégants</p>
                    <p class="collText2">c'est mieux a deux</p>
                    <button>Découvrir</button>
                </div>
            </a>
            <!-- collection3 -->
            <a href="assets/pages/page_products/robes.php">
                <div class="collection">
                    <img src="./assets/img/collection/collection3.png" alt="">
                    <p class="collText1">votre mode de la nuit</p>
                    <p class="collText2">des tenus au top pour vos soirée</p>
                    <button>Découvrir</button>
                </div>
            </a>
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
                    <img src="./assets/img/footer/bouttonMail.png" alt="">
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
                    <img src="./assets/img/pays/paysESp.jpeg" alt="">
                    <img src="./assets/img/pays/paysEU.jpeg" alt="">
                    <img src="./assets/img/pays/paysIRL.png" alt="">
                    <img src="./assets/img/pays/paysITA.jpeg" alt="">
                    <img src="./assets/img/pays/paysUK.png" alt="">
                    <img src="./assets/img/pays/paysUSA.png" alt="">
                    <img src="./assets/img/pays/paysALL.jpeg" alt="">
                </div>
            </div>
            <!-- logo ReseauSociaux -->
            <div class="imgLogo">
                <img src="./assets/img/logoReseau/instaGris.png" alt="">
                <img src="./assets/img/logoReseau/logoFacebookGris.png" alt="">
                <img src="./assets/img/logoReseau/twitterGris.webp" alt="">
                <img src="./assets/img/logoReseau/wattsappGris.png" alt="">
                <img src="./assets/img/logoReseau/snapGris.jpeg" alt="">
            </div>
        </div>
</div>
<script src="./assets/js/index.js"></script>
</body>
</html>