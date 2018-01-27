<?php

    ob_start();
    if (!SESSION_ID()) { SESSION_START(); }

    $path = 'config/config.json';
    
    if (!file_exists($path)) {
        header('Location: /starthere.php');
    }

    $ENV = file_get_contents($path);
    $ENV = json_decode($ENV, true);    

?>