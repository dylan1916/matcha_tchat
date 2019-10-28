<?php 
require('config/database.php');


////AFFICHE AU TT DEBUT TT LES USERS
$login = $bdd->query('SELECT login FROM user ORDER BY id DESC');

if (isset($_POST['q']) AND !empty($_POST['q']))
{
    $q = htmlspecialchars($_POST['q']);
    // MODIFIER LA REQUETE AU CAS OU ON VU UN CHAMPS PLUS LARGE CHOIX
    $login = $bdd->query('SELECT * FROM user WHERE login LIKE "'.$q.'%" ORDER BY id DESC');
}
?>

<?php
    require('header.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form method="post" action="">
    <input type="search" name="q" placeholder="Recherche...">
    <input type="submit" value="Valider">
<form>
    

<?php 

if ($login->rowCount() > 0) { ?>
    
    <ul>
        <?php while ($l = $login->fetch()) { ?>
            <li><?= $l['login']; ?></li>
            <a href="index.php?controle=accueil&action=displayProfilUser">Voir le profil</a>
        <?php 
    print_r($l);
    
    } ?>
    </ul>

<?php }else { ?>

    Aucun résultat...

<?php } ?> 


</body>
</html>