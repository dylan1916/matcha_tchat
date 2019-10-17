<?php

function getMail($idUser){
	require 'config/database.php';

	$req = $bdd->prepare('SELECT * FROM user WHERE id = ?');
	$req->execute(array($idUser));
    $resultat = $req->fetch();
    
    return $resultat;
}

function mail_like($idUser){
    $dataUser = getMail($idUser);
    $user =  $_SESSION['profil']['login'];

	require 'config/database.php';
	$subject = 'A person like your profil -Matcha-!';
	$message = ' Hello, ' . $dataUser['login'] . '! ' . $user . ' a liker ton profil';
    // echo $dataUser['mail'];
	mail($dataUser['mail'], $subject, $message);
}

function mail_likeBack($idUser){
    $dataUser = getMail($idUser);
    $user =  $_SESSION['profil']['login'];

	require 'config/database.php';
	$subject = 'A person like your profil -Matcha-!';
	$message = ' Hello, ' . $dataUser['login'] . '! ' . $user . ' vous a liker en retour';
    // echo $dataUser['mail'];
	mail($dataUser['mail'], $subject, $message);

}

function mail_deleteLike($idUser){
    $dataUser = getMail($idUser);
    $user =  $_SESSION['profil']['login'];

	require 'config/database.php';
	$subject = 'A person like your profil -Matcha-!';
	$message = ' Hello, ' . $dataUser['login'] . '! ' . $user . ' ne vous like plus';
    // echo $dataUser['mail'];
	mail($dataUser['mail'], $subject, $message);
}

function page_notif(){
	$user =  $_SESSION['profil']['login'];

	require 'M/notif_bd.php';	
	$res = get_notif_bd();
	require 'V/notif.php';
	return $id_other;
}

?>