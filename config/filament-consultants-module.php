<?php

use TresPontosTech\Consultant\Core\Models\Consultant;

return [
    'consultants' => [
        'models' => [
            'consultant' => Consultant::class,
        ],
        'database' => [
            'table' => [
                'consultants' => 'consultants',
            ],
        ],
        'connection' => env('DB_BACKOFFICE_CONNECTION', 'sqlite'),
        'db_name' => env('DB_BACKOFFICE_CONNECTION', env('DB_CONNECTION', 'sqlite')),
    ],
];
