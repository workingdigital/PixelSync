<?php

    ob_start();

        $url = "./config/refresh.env";
        $file = fopen($url, 'r+');
        $refresh = file_get_contents($url);
        if ($refresh == "true"){
            fputs($file, 'false');
            fclose($file);
            echo "true";
        } else {
            echo "false";
        }

?>