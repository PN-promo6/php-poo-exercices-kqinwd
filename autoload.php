<?php

// fonction de php qui permet d'appeler une classe à la volée
spl_autoload_register(function ($className) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($path)) {
        require $path;
    }
});
