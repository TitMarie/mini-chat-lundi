<?php
namespace Minichat;

class superPDO 
{

    public $db = new pdo('mysql:host=127.0.0.1;dbname=mysql','user','password',array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ));


//     public function __construct($dsn, $pseudo, $password) {
//         this->
// }

}

// Paramètres d'utilisation de la bdd
return [
    "pdo" => [
        "dsn" => 'mysql:host=localhost;dbname=minichat;charset=utf8',
        "user" => 'root',
        "password" => ''
    ],
    "limitMessages" => 50
];