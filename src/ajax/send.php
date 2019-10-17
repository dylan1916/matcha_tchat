<?php
session_start();
echo "--------------------------> ok la page send est bien connecter a la bdd";

require('../config/database.php');

// $user = "dylan";
//     $membre = "root";
//     $message = "test";
    
//     $i = array(
//         'sender' => $membre,
//         'receiver' =>$user,
//         'message'=>$message
//     );

//     $sql = "INSERT INTO messages(sender,receiver,message,date) VALUES(:sender,:receiver,:message,NOW())";
//     $req = $db->prepare($sql);
    // $req->execute($i);

    $membre = $_SESSION['profil']['mail'];
    $user = $_SESSION['user'];
    $message = htmlspecialchars(trim($_POST['message']));
 

$inserer = $bdd->prepare('INSERT INTO messages (sender, receiver, message, date)
    VALUES (:sender, :receiver, :message, NOW() )');

$inserer->execute(array(
'sender' => $membre,
'receiver' => $user,
'message' => $message
));
return 1;


?>