phpfox-session-manager
=======================================

Support files and datbase

Using Files (Default)

```php
return [
    'session.drivers' => [
        'files'    => 'files',
        'database' => DbSaveHandler::class,
    ],
    'session.adapter' => [
        'driver' => 'files',
    ],
];
```

Using Database
```php
return [
    'session.drivers' => [
        'files'    => 'files',
        'database' => DbSaveHandler::class,
    ],
    'session.adapter' => [
        'driver' => 'database',
        'gateway'=> 'core_session',
    ],
];
```

Ensure session start
```php
!session_id() and service('session')->start();
```