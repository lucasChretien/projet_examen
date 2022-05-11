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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../../../css/board_users.css">
    <title>afficher les membre</title>
</head>
<body>
    <!-- afficher les membres -->
    
<?php
        $recupUsers = $pdo->query('SELECT * FROM users');
        $users = $recupUsers->fetchAll(\PDO::FETCH_ASSOC);
    ?>

        <div class="return_acceuil">
            <a href="../homepage_admin/homepage_admin.php"> <i class="fa-solid fa-house"></i> </a>
        </div>
       <div class="board_users">
            <div class="liste_user">
                <p>Liste des utilisateurs</p>
            </div>
            <div class="categorie_table">
                <p>identifiant</p>
                <p>nom d'utilisateur</p>
                <p>adresse mail</p>
                <p>statut</p>
            </div>
    <?php foreach($users as $user) :?>
        <div class="infoUser_global">
            <div class="info_user">
                <div class="border_users1"></div>
                <p class="text_identifiant"><?= $user['id']; ?></p>
                <div class="border_users"></div>
                <div class="border_users2"></div>
                <div class="divNameUserNom">
                    <p class="text_nom"><?= $user['us_nom']; ?></p>
                </div>
                <div class="border_users3"></div>
                <div class="border_users4"></div>
                <div class="divNameUserMail">
                    <p class="text_mail"><?= $user['us_mail']; ?></p>
                </div>
                <div class="border_users5"></div>
                <div class="border_users6"></div>
                <p class="text_statut"><?= $user['us_statut']; ?> <a href="../../espace_admin/users/bannir.php?id=<?= $user['id']; ?>"><div class="border_users7"></div> x</a></p>
            </div>
        </div>
    <?php endforeach ?>
        </div>
    <!-- fin afficher les membres  -->
</body>
</html>





