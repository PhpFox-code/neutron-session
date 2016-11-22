<?php

namespace Phpfox\Session;

return [
    'session.drivers'  => [
        'files'    => 'files',
    ],
    'session.adapter' => [
        'driver'    => 'files',
    ],
    'services'         => [
        'session' => [null, SessionManager::class,],
    ],
];