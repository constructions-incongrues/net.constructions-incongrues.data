<?php
// thisisradioclash.org

// Extrapolation du nom de domaine
$domain = basename(__FILE__, '.php');

// Récupération de la configuration par défaut
$defaults = require(__DIR__.'/__defaults.php');

// Configuration du projet
return array_replace_recursive(
    $defaults,
    [
        'auth' => [
            'secret_key' => 'BqWGZfuR!oDuWYFRz@dh9GtvQeU^Q3N!',
            'public_key' => 'oSxo@KyCSL#@f8zm9H7v^a8fZ8MyJ3kC',
        ],

        'cache' => [
            'enabled'      => false,
            'response_ttl' => 3600,
        ],

        'database' => [
            'name' => 'thisisradioclash',
            'username' => 'thisisradioclash',
            'password' => 'thisisradiocla',
        ],
    ]
);
