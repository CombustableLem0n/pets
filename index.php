<?php

/*
 * LeeRoy Hegwood
 * 1/18/24
 * https://github.com/CombustableLem0n/pets
 * https://lhegwood.greenriverdev.com/328/pets/
 * This is my controller for the pets app
 */

    // Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Require vendor/autoload.php
    require_once('vendor/autoload.php');

    // Instantiate Fat-Free Framework
    $f3 = Base::instance();

    // Define a default route
    $f3->route('GET /', function(){
        echo "pets";
    });
    // Run Fat-Free
    $f3->run();
?>