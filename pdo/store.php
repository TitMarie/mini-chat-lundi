<?php

use \Colors\RandomColor;

include('../vendor/autoload.php');
include('../includes/connection.php');


//récuper l'adressse ip
function get_ip() {
    // IP si internet partagé
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    // IP derrière un proxy
    elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    // Sinon : IP normale
    else {
        return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
    }
}

//Insertion du message à l'aide du requête préparée
$rep = $bdd ->prepare('INSERT INTO messages (pseudo, message, date, adress_ip, user_agent) VALUES (?, ?, NOW(), ?, ?)');
$rep->execute(array(htmlspecialchars($_POST['pseudo']), htmlspecialchars($_POST['message']), get_ip(), $_SERVER['HTTP_USER_AGENT']));


//Si un pseudo à une couleur

//est-ce que le pseudo existe dans la table users
$results = $bdd ->prepare('SELECT COUNT(*)FROM users WHERE pseudo = ?'); 
$results->execute(array($_POST['pseudo']));

//si non mettre le pseudo dans la table users et l'associé à une couleur
if ($results->fetchColumn() === "0") {
    $pseudo_no_exist = $bdd->prepare('INSERT INTO users (pseudo, color) VALUES (?, ?)');
    $pseudo_no_exist->execute(array($_POST['pseudo'], RandomColor::one() ));
} 

//Creation cookie
setcookie('pseudo', $_POST['pseudo'], time() +365*24*3600, '/', null, false, true ); 


//Redirection vers la page index.php
// header('Location: ../index.php');

?>