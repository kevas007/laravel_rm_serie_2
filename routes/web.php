<?php

use App\Http\Controllers\Table;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome')->name("welcome");
});

Route::get('/about', function () {
    return view('pages.about')->name("about");
});

Route::get('/home', function () {
    return view('pages.home')->name("home");
});

Route::get('/table', [Table::class,'index']);
