<?php

    echo "----------------------------------";
    require('config/database.php');

    $inserer = $bdd->prepare('INSERT INTO messages (sender, receiver, message, date)
                                VALUES (:sender, :receiver, :message, :date )');

    $inserer->execute(array(
            'sender' => "sender",
            'receiver' => "recevier",
            'message' => "mess",
            'date' => "2019-10-16 00:00:00"
            ));
    return 1;



// $user = "moussiamottal@gmail.com";
// $membre = "toto@gmail.com";
// // echo "ha";
// // $membre = $_SESSION['profil']['user'];
// // $message = htmlspecialchars(trim($_POST['message']));
// $message = "cxfgd"; 

// $i = array(
//     'sender' => $membre, //celui qui envoi
//     'receiver' =>$user, //
//     'message'=>$message
// );

// $sql = "INSERT INTO messages (sender, receiver, message, date) VALUES (:sender, :receiver, :message, NOW() ) ";
// $req = $bdd->prepare($sql);



?>