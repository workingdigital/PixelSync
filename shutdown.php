<?php

    on_start();

    require ('inc/class/autoload.php');

    $url = "config/shutdown.env";
    $file = fopen($url, 'r+');
    $shutdown = file_get_contents($url);
    if ($shutdown == "force-stop") {
        if (fputs($file, 'true')) {
            fclose($file);
            $servermanager->shutdown_now();
        } else {
            header('Location: /');
        }
    } elseif ($shutdown == "true"){
        fclose($file);
        $servermanager->shutdown();
    }

?>