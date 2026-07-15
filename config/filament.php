<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Filament's file uploads (avatars, covers, etc.) must default to a
    | publicly servable disk regardless of the app's general FILESYSTEM_DISK,
    | which defaults to the private "local" disk since Laravel 11.
    |
    */

    'default_filesystem_disk' => 'public',

];
