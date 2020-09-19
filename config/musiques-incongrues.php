<?php
// musiques-incongrues.net

// Extrapolation du nom de domaine
$domain = basename(__FILE__, '.php');

// Récupération de la configuration par défaut
$defaults = require(__DIR__.'/___defaults.php');

// Configuration du projet
return array_replace_recursive(
    $defaults,
    [
        'auth' => [
            'secret_key' => 'NYUIkNlKHm8ELxrDojh0vTKFyVICHneb',
            'public_key' => '9b806bbd-20a1-4b7b-a8ec-d573d0a5eaa8',
        ],

        'cache' => [
            'enabled'      => false,
            'response_ttl' => 3600,
        ],

        'database' => [
            'name' => 'admin_mi_forum',
            'username' => 'musiques-incongr',
            'password' => 'musiques-incon',
        ],
    ]
);
