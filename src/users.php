<?php
namespace Minichat;

class Users 
{

    public function getIpUser() {
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

    //Si le pseudo existe
    public function cookieUser() {
        setcookie('pseudo', 
        $_POST['pseudo'], 
        time() +365*24*3600, 
        '/', 
        null, 
        false, 
        true );
    }


}