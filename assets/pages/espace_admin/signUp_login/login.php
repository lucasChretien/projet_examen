
<!-- sign up -->
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
if(isset($_POST['valid'])) {
    $us_nom = $_POST["us_nom"]; 
    $us_mdp = sha1($_POST["us_mdp"]);
    $us_mail = $_POST["us_mail"];
    echo '<script LANGUAGE="javascript">document.location.href="../../../../index.php"</script>';
    die(create($us_nom, $us_mdp, $us_mail));
}
?>

<!-- sign in -->

<?php
// session_start();
require_once '/Applications/MAMP/htdocs/projet_examen/assets/pages/espace_admin/data_base/model.php';
$pdo = pdo_connect_mysql();

if(isset($_POST["login"])) {
    // empty :  Détermine si une variable est vide
    if(empty($_POST["us_nom"]) || empty($_POST["us_mdp"])) {
        $ms = "obligatoire";
    } else {
        $sql = "SELECT * FROM users WHERE us_nom = :us_nom AND us_mdp = :us_mdp";
        $sta = $pdo->prepare($sql);
        $sta->execute(['us_nom'=>$_POST["us_nom"],'us_mdp'=>sha1($_POST["us_mdp"])]);
        // rowCount :  // retourne le nombre de lignes affectées par le dernier appel à la fonction PDOStatement::execute()      
        $count = $sta->rowCount();
        if($count > 0){
            $_SESSION["us_nom"] = $_POST["us_nom"];
            header("location: ../../../../index.php");

            } else{
                $ms = 'RIEN';
            }
        }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="../../../css/sign_up_in.css">
    <title>inscription</title>
</head>
<body>
    <!-- sign_in -->
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>
                    <form method="POST" >
                        <div class="input_border">
                            <input type="text" name="us_nom" placeholder="Enter your username" required>
                            <i class="uil uil-envelope icon"></i>
                        </div>
                        <div class="input_border">
                            <input type="password" name="us_mdp" placeholder="Enter your password" required>
                            <i class="uil uil-lock icon"></i>
                            <i class="uil uil-eye-slash showHidePw"></i>
                        </div>
                        <div class="input_border button">
                            <input type="submit" name="login" value="login" >
                        </div>
                    </form>

                    <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup now</a>
                    </span>
                    </div>
            </div>
    <!-- sign_up -->
            <div class="form signup">
                <span class="title">Registration</span>
                    <form method="POST">
                        <div class="input_border">
                            <input type="text" name="us_nom" placeholder="name" required>
                            <i class="uil uil-user"></i>
                        </div>
                        <div class="input_border">
                            <input type="password" name="us_mdp" placeholder="mdp" required>
                        <i class="uil uil-lock icon"></i>
                        </div>
                        <div class="input_border">
                            <input type="email" name="us_mail" placeholder="Mail" required>
                            <i class="uil uil-envelope icon"></i>
                        </div>
                        <div class="input_border button">
                            <input name="valid" type="submit" value="valid">
                        </div>
                    </form>

                    <div class="login-signup">
                        <span class="text">you are a member?
                            <a href="#" class="text login-link">Signup now</a>
                        </span>
                    </div>
            </div>
        </div>
    </div>
    <script src="../../../js/sign_up_in.js"></script>

</body>
</html>
    





