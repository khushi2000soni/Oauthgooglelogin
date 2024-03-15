<?php

return [

    'web' => [
        'api_key' => env('FIREBASE_WEB_API_KEY'),
        'auth_domain' => env('FIREBASE_WEB_AUTH_DOMAIN'),
        'database_url' => env('FIREBASE_WEB_DATABASE_URL'),
        'project_id' => env('FIREBASE_WEB_PROJECT_ID'),
        'storage_bucket' => env('FIREBASE_WEB_STORAGE_BUCKET'),
        'messaging_sender_id' => env('FIREBASE_WEB_MESSAGING_SENDER_ID'),
        'app_id' => env('FIREBASE_WEB_APP_ID'),
        'measurement_id' => env('FIREBASE_WEB_MEASUREMENT_ID'),
    ],

    'android' => [
        'api_key' => env('FIREBASE_ANDROID_API_KEY'),
        'auth_domain' => env('FIREBASE_ANDROID_AUTH_DOMAIN'),
        'database_url' => env('FIREBASE_ANDROID_DATABASE_URL'),
        'project_id' => env('FIREBASE_ANDROID_PROJECT_ID'),
        'storage_bucket' => env('FIREBASE_ANDROID_STORAGE_BUCKET'),
        'messaging_sender_id' => env('FIREBASE_ANDROID_MESSAGING_SENDER_ID'),
        'app_id' => env('FIREBASE_ANDROID_APP_ID'),
        'measurement_id' => env('FIREBASE_ANDROID_MEASUREMENT_ID'),
    ],

    'ios' => [
        'api_key' => env('FIREBASE_IOS_API_KEY'),
        'auth_domain' => env('FIREBASE_IOS_AUTH_DOMAIN'),
        'database_url' => env('FIREBASE_IOS_DATABASE_URL'),
        'project_id' => env('FIREBASE_IOS_PROJECT_ID'),
        'storage_bucket' => env('FIREBASE_IOS_STORAGE_BUCKET'),
        'messaging_sender_id' => env('FIREBASE_IOS_MESSAGING_SENDER_ID'),
        'app_id' => env('FIREBASE_IOS_APP_ID'),
        'measurement_id' => env('FIREBASE_IOS_MEASUREMENT_ID'),
    ],

];

