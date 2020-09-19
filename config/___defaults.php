<?php

return [
    'database' => [
        'charset' => 'utf8mb4',
        'engine' => 'InnoDB',
        'host' => '127.0.0.1',
        'name' => 'daheardit-record',
        'password' => 'daheardit-reco',
        'port' => 3306,
        'type' => 'mysql',
        'username' => 'daheardit-record',
    ],

    'cookie' => [
        'same_site' => 'Lax',
        'secure' => true
    ],

    'cors' => [
        'enabled' => true,
        'origin' => [
            0 => '*',
        ],
        'methods' => [
            0 => 'GET',
            1 => 'POST',
            2 => 'PUT',
            3 => 'PATCH',
            4 => 'DELETE',
            5 => 'HEAD',
        ],
        'headers' => array (),
        'exposed_headers' => array (),
        'max_age' => 600,
        'credentials' => true,
    ],

    'rate_limit' => [
        'enabled' => false,
        'limit' => 100,
        'interval' => 60,
        'adapter' => 'redis',
        'host' => '127.0.0.1',
        'port' => 6379,
        'timeout' => 10,
    ],

    'storage' => [
        'adapter' => 'local',
        'root' => sprintf('public/uploads/%s/originals', $domain),
        'root_url' =>sprintf( '/uploads/%s/originals', $domain),
        'thumb_root' => sprintf('public/uploads/%s/generated', $domain),

        // 'key' => '',
        // 'secret' => '',
        // 'region' => '',
        // 'version' => '',
        // 'bucket' => '',
        // 'options' => '',
        // 'endpoint' => '',
        // 'proxy_downloads' => '',
    ],

    'mail' => [
        'default' => [
            'transport' => 'sendmail',
            // 'sendmail' => '',
            // 'host' => '',
            // 'port' => '',
            // 'username' => '',
            // 'password' => '',
            // 'encryption' => '',
            'from' => sprintf('directus@%s', $domain)
        ],
    ],

    'cache' => [
        'enabled' => false,
        'response_ttl' => 3600,
        'pool' => [
            // 'adapter' => '',
            // 'path' => '',
            // 'host' => '',
            // 'port' => '',
        ],
    ],

    'auth' => [
        'secret_key' => 'mP4AF8kSZoCCpgbv0kkYzEUoLikl7JAd',
        'public_key' => '71cabd99-a03e-48b0-93dd-be81e695d1e6',
        'ttl' => 20,
        'social_providers' => [
            // 'okta' => '',
            // 'github' => '',
            // 'facebook' => '',
            // 'google' => '',
            // 'twitter' => '',
        ],
    ],

    'hooks' => [
        'actions' => [],
        'filters' => [],
    ],

    'tableBlacklist' => [],

    'env' => 'production',

    'logger' => [
        'path' => sprintf('%s/../logs', __DIR__),
    ],
];
