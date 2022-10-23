<?php

use Illuminate\Support\Facades\Facade;

return [
    /*
    |--------------------------------------------------------------------------
    | File Location
    |--------------------------------------------------------------------------
    |
    | This is the white list of file extensions that will be included in 
    | the compare file list.
    | It is also used to verify when contents of a file are accessed
    | The path is relative to the root folder ../ = laravel, ../public = laravel/public
    |
    */
    'path_to_files' => '../comparefiles/',
    /*
    |--------------------------------------------------------------------------
    | Allowed File Types
    |--------------------------------------------------------------------------
    |
    | This is the white list of file extensions that will be included in 
    | the compare file list.
    | It is also used to verify when contents of a file are accessed
    |
    */
    'allowed_file_types' => ['txt','conf'],
];
