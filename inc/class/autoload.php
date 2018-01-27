<?php

    require ('inc/config.php');
    require ('inc/class/manager/blocks.php');
    require ('inc/class/manager/server.php');
    require ('inc/class/autoloader/autoloader.php');

    $server = new servermanager($ENV);
    $autoload = new autoload($ENV);

    
?>