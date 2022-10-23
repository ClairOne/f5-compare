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
    Route::get('/compare', 'compare')->name('compare');
    Route::get('/compare/files', 'filelist')->name('filelist');
    Route::get('/compare/getfile/{filePath}', 'getFileContents')->name('getfilecontents');
});

Route::get('/', function () {
    return redirect('/compare');
});
