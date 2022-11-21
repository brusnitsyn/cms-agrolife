<?php

return [
    'namespace' => 'App',
    'admin_app_url' => env('ADMIN_APP_URL', 'admin.' . env('APP_URL')),
    'admin_app_path' => env('ADMIN_APP_PATH', ''),
    'enabled' => [
        'users-management' => true,
        'media-library' => true,
        'file-library' => true,
        'block-editor' => true,
        'buckets' => true,
        'users-image' => false,
        'settings' => true,
        'dashboard' => true,
        'search' => true,
        'users-description' => true,
        'activitylog' => true,
        'users-2fa' => false,
        'users-oauth' => false,
    ],
];
