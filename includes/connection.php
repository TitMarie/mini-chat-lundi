<?php

//Connection à la base de donnée
try {
    $bdd = new PDO('mysql:host=localhost;dbname=mini_chat_titmarie;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
    //par défaut MySQL renvois les erreurs sql
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}