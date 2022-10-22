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
    |
    */
    'path_to_files' => '../app/demo_files/',
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