<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Compare;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::controller(Compare::class)->group(function () {
    Route::get('/', 'compare')->name('compare');
    Route::get('/files', 'filelist')->name('filelist');
    Route::get('/getfile/{filePath}', 'getFileContents')->name('getfilecontents');
});
