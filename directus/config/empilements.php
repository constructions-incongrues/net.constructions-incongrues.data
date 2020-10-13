<?php
// empilements.incongru.org

// Extrapolation du nom de domaine
$domain = basename(__FILE__, '.php');

// Récupération de la configuration par défaut
$defaults = require(__DIR__.'/__defaults.php');

// Configuration du projet
return array_replace_recursive(
    $defaults,
    [
        'auth' => [
            'secret_key' => '$NNQME7e^emBrpHe',
            'public_key' => 'jp8um6&R%xw7!fPbviUfs66oBbVDVYDd',
        ],

        'cache' => [
            'enabled'      => false,
            'response_ttl' => 3600,
        ],

        'database' => [
            'name' => 'empilements',
            'username' => 'empilements',
            'password' => 'qt4!8m0W',
        ],
    ]
);
