<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css" />
    <title>ellyes's chat</title>
</head>

<body>

            <?php
            // à l'appel de ce fichier par le boutton de déconnexion 
            // on peut avoir la méthode à l'aide de la variable spéciale $_SERVER de PHP
            if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['deco']))
            {
                deco();
            }
            function deco(){
                session_start();

                // Suppression des variables de session et de la session
                $_SESSION = array();
                session_destroy();
                
                // Suppression des cookies de connexion automatique
                setcookie('login', '');
                setcookie('pass_hache', '');

                header("location: index.php");
             }
        ?> 


</body>
</html>



