<?php
// musiqueapproximative.net

// Extrapolation du nom de domaine
$domain = basename(__FILE__, '.php');

// Récupération de la configuration par défaut
$defaults = require(__DIR__.'/___defaults.php');

// Configuration du projet
return array_replace_recursive(
    $defaults,
    [
        'auth' => [
            'public_key' => '71cabd99-a03e-48b0-93dd-be81e695d1e6',
            'secret_key' => 'mP4AF8kSZoCCpgbv0kkYzEUoLikl7JAd',
        ],

        'cache' => [
            'enabled'      => false,
            'response_ttl' => 3600,
        ],

        'database' => [
            'name' => 'musiqueapproxima',
            'username' => 'musiqueapproxima',
            'password' => 'musiqueapproxi',
        ],
    ]
);
