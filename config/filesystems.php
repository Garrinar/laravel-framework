<?php

return [
    'default' => 'public',
    'disks' => [
        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'distributed' => true,
            'table' => 'files'
        ],
        'public' => [
            'driver' => 'local',
            'root' => public_path('uploads'),
            'visibility' => 'public',
            'distributed' => true,
            'table' => 'files',
        ],
    ],
];
