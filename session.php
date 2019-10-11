<?php

session_start();

define('EMAIL','jgallet@viacesi.fr');
define('PASSWORD','sn');
define('NAME','Jérémy');
$message = '';

if($_POST['email'] != EMAIL){
  $message = "Votre email est faux";
  $_SESSION['erreur'] = $message;
  header('Location: index.php');
  exit();
}
if($_POST['mdp'] != PASSWORD){
  $message = "Votre mdp est faux ";
  $_SESSION['erreur'] = $message;
  header('Location: index.php');
  exit();
}

if($_POST['email'] == EMAIL && $_POST['mdp'] == PASSWORD){
    $_SESSION['name'] = NAME;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercices</title>
    </head>
    <body>
    <p>
        Salut <?php echo $_SESSION['name']; ?> !<br />
        Tu es à l'accueil de mon site (index.php). Tu veux aller sur une autre page ?
    </p>
    </body>