<?php

function dylan(){
    echo "----------------";

    require('config/database.php');
    
    $login = $bdd->query('SELECT login FROM user ORDER BY id DESC');
    
    // if (isset($_GET['q']) AND !empty($_GET['q']))
    // {
    //     $q = htmlspecialchars($_GET['q']);
    //     // MODIFIER LA REQUETE AU CAS OU ON VU UN CHAMPS PLUS LARGE CHOIX
    //     $login = $bdd->query('SELECT login FROM user WHERE login LIKE "'.$q.'%" ORDER BY id DESC');
    // }
    ?>
    
    
  
    
    <?php if ($login->rowCount() > 0) { ?>
        
        <ul>
            <?php while ($l = $login->fetch()) { ?>
                <li><?= $l['login']; ?></li>
            <?php } ?>
        </ul>
    
    <?php }else { ?>
    
        Aucun résultat...
    
    <?php } ?> 
    

    <?php
}
?>