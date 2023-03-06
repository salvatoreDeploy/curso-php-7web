<?php
spl_autoload_register(function ($class) {
    /* if (file_exists('classes/' . $class . '.php')) {
        require 'classes/' . $class . '.php';
    }*/

    $baseDir = __DIR__ . '/classes/';

    $file = $baseDir . str_replace('\\', '/', $class) . '.php';

    if($file){
        require $file;
    }

});