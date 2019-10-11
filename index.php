<?php
session_start();
echo $_SESSION['erreur'];
$_SESSION['erreur'] = '';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
  <head>
    <title>Exercices</title>
  </head>
  <body>
  <?php
echo '<hr />' ;
echo '<h1>Exercice 1</h1>';
echo 'PHP Version: ', PHP_VERSION, '<br />' ;
echo 'Operating System: ', PHP_OS, '<br />' ;
echo 'Browser language: ', $_SERVER["HTTP_ACCEPT_LANGUAGE"];


echo '<hr />' ;
echo '<h1>Exercice 2</h1>';
$phrase = 'je suis un élève sérieux';
echo '1. ' . ucwords($phrase) . '<br />';
echo '2. ' . ucfirst($phrase) . '<br />';
echo '3. ' . str_replace(' ', '_', $phrase) . '<br />';
echo '4.1 La phrase contient ' . str_word_count($phrase) . ' mots.' . '<br />';
echo '4.2 La phrase contient ' . strlen($phrase). ' caractères'; 

echo '<hr />';
echo '<h1>Exercice 3</h1>';
# Déclaration du tableau
$cars = [    
  ['marque' => 'Audi', 'modele' => 'A1', 'type' => 'citadine'],
  ['marque' => 'Volkswagen', 'modele' => 'Passat', 'type' => 'berline'],
  ['marque' => 'Volkswagen', 'modele' => 'Golf', 'type' => 'compact'],
  ['marque' => 'Mazda', 'modele' => 'CX-5', 'type' => 'SUV']
];

# Création de tableau pour chaque clé (pour le tri)
foreach ($cars as $key => $row)
{
  $marque[$key]  = $row['marque'];
  $modele[$key] = $row['modele'];
  $type[$key] = $row['type'];
}
      
# Tri des données par marque puis par modele.
array_multisort($marque, SORT_ASC, $modele, SORT_ASC, $cars );

# Affichage des valeurs
foreach( $cars as $car )
{
  echo '<b>Marque</b> :' . $car['marque'] . '<br />';
  echo '<b>Modèle</b> :' . $car['modele'] . '<br />';
  echo '<b>Type</b> :' . $car['type'] . '<br />';
  echo '<hr />';
  
}
?>

  <form action="session.php" method="post">
 <p>Votre email : <?php $_SESSION['email'] ?> <input type="text" name="email" /></p>
 <p>Votre mot de passe : <input type="password" name="mdp" /></p>
 <p><input type="submit" value="OK"></p>
</form>

  </body>
</html>