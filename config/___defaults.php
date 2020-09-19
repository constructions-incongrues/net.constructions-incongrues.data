<?php

$slug = str_replace('.', '_', $domain);

return [

    'auth' => [
        'secret_key' => null,
        'public_key' => null,
        'ttl' => 20,
        'social_providers' => [
            // 'okta' => '',
            // 'github' => '',
            // 'facebook' => '',
            // 'google' => '',
            // 'twitter' => '',
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

    'database' => [
        'charset' => 'utf8mb4',
        'engine' => 'InnoDB',
        'host' => '127.0.0.1',
        'name' => $slug,
        'password' => 'daheardit-reco',
        'port' => 3306,
        'type' => 'mysql',
        'username' => $slug,
    ],

    'env' => 'production',

    'hooks' => [
        'actions' => [],
        'filters' => [],
    ],

    'logger' => [
        'path' => sprintf('%s/../logs', __DIR__),
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
            'from' => sprintf('directus@%s', $domain),
        ],
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

    'tableBlacklist' => [],
];
