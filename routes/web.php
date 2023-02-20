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
=======
Route::get('/checkout', function () {
    return view('/checkout');
});


Route::get('/checkout1', function () {
    return view('/checkout1');
});



Route::get('/checkout', 'App\Http\Controllers\StripeController@checkout')->name('checkout');
Route::post('/session', 'App\Http\Controllers\StripeController@session')->name('session');
Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');

Route::get('/checkout1', 'App\Http\Controllers\StripeController@checkout1')->name('checkout1');
Route::post('/anotherSession', 'App\Http\Controllers\StripeController@anotherSession')->name('anotherSession');
Route::get('/anotherSuccess', 'App\Http\Controllers\StripeController@anotherSuccess')->name('anotherSuccess');

// Route::get('/another-session', [StripeController::class, 'anotherSession'])->name('anotherSession');
// Route::get('/another-success', [StripeController::class, 'anotherSuccess'])->name('anotherSuccess');

