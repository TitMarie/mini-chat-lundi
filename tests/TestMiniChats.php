<?php

use PHPUnit\Framework\TestCase;

class MiniChatTest extends TestCase
{

        public function testInsertionEtIntégrationToBDD() { 
        
        

        $pdo = new PDO('mysql:host=127.0.0.1;dbname=minichat;charset=utf8', 'root', '');

        $data = [
            'pseudo' => 'RiriFifiLoulouTest',
            'message' => 'Oui oncle Donald !'
        ];

        // $url = __DIR__."pdo/store.php";

        $result = $this->postRequest("http://localhost/tests/mini-chat-lundi/pdo/store.php", $data);
                // Si $result vaut "" alors c'est bien : la requête s'est executée
        // Si $result vaut FALSE alors c'est pas bien : la requête a échouée
        // Si $result contient quelque chose ici ( une string remplie ), 

            
        $this->assertEmpty($result);
        if ($result)
            if ($result === false) {
                die('error!!!!');
            }
    
        $messageQuery = $pdo->query('SELECT * FROM messages ORDER BY id DESC LIMIT 0,1');
        $message = $messageQuery->fetchAll()[0];

            if ($result) {
                die('Erreur : ' . $e->getMessage());
            }

        
        $this->assertEquals($data['pseudo'], $message['pseudo']);
        $this->assertEquals($data['message'], $message['message']);
    }


        

    private function PostRequest($url, $data) {
                
        $data = $data;

        

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n" . "User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        return $result;

    }
}

// Instanciation de la connexion à base de données 
        // utilisée pour vérifier la présence du message dans la table messages
        
        // Définition des données POST qui simulent un message
    
        // Envoi de la requête POST
        // Si $result vaut "" alors c'est bien : la requête s'est executée
        // Si $result vaut FALSE alors c'est pas bien : la requête a échouée
        // Si $result contient quelque chose ici ( une string remplie ), 
        // c'est forcément une erreur retournée par store.php
        
        // Si $result est vide c'est que la requête POST a bien été envoyée.
        // = store.php n'a renvoyé aucune erreur et donc n'a rien affiché.
        // On vérifie que le message existe bien dans la table messages
        // Pour vérifier que les datas sont identiques
    
    // Création de la fonction PostRequest()
