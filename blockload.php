<?php

    ob_start();
    if (!SESSION_ID()) { SESSION_START(); }

    require ('inc/class/manager/blocks.php');

    $ENV = file_get_contents('../config/config.json');
    $ENV = json_decode($ENV, true);   

    $blockmanager = new blockmanager($ENV);

?>