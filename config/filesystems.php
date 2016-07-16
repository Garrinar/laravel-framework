<?php

return [
    'default' => 'public',
    'disks' => [
        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'distributed' => true,
        ],
        'public' => [
            'driver' => 'local',
            'root' => public_path('uploads'),
            'visibility' => 'public',
            'distributed' => true,
        ],
    ],
];
