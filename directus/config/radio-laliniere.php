<?php
// mazemod.org

// Extrapolation du nom de domaine
$domain = basename(__FILE__, '.php');

// Récupération de la configuration par défaut
$defaults = require(__DIR__.'/__defaults.php');

// Configuration du projet
return array_replace_recursive(
    $defaults,
    [
        'auth' => [
            'public_key' => '71grfd66-efju-48g9-0E39-be81e695d1e6',
            'secret_key' => 'mP4AF8kSZoC76grt98lmYzEUoLikl7JAd',
        ],

        'cache' => [
            'enabled'      => false,
            'response_ttl' => 3600,
        ],

        'database' => [
            'name' => 'radiolaliniere',
            'username' => 'radiolaliniere',
            'password' => 'iR51q9j#',
        ],
    ]
);
