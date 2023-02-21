<?php

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
    return view('landing');
});



Route::get('/carmodel', function () {
    return view('/carmodel');
});

Route::get('/terms', function () {
    return view('/terms');
});

Route::get('/aboutus', function () {
    return view('/aboutus');
});

Route::get('/contactus', function () {
    return view('/contactus');
});
Route::get('/signup', function () {
    return view('/signup');
});
// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
