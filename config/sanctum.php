<?php

use Laravel\Sanctum\Sanctum;

return [

    'stateful' => env('SANCTUM_STATEFUL_DOMAINS', ''),

    'guard' => 'web',

    'expiration' => null,

];
