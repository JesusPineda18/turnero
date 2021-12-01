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
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/turns', [App\Http\Controllers\TurnController::class, 'index'])->name('turn.index');
Route::get('/turns/input', [App\Http\Controllers\TurnController::class, 'input'])->name('turn.input');
Route::post('/turns/store', [App\Http\Controllers\TurnController::class, 'store'])->name('turn.store');

Route::resource('customers',App\Http\Controllers\CustomerController::class);

Route::post('customers/verifycustomer', [App\Http\Controllers\CustomerController::class, 'verifyCustomer'])->name("customers.verify");

Route::group(["middleware" => ["auth"]], function(){
    Route::resource('professionals',App\Http\Controllers\ProfessionalController::class);
    Route::resource('shifts', App\Http\Controllers\ShiftController::class);

});

Route::get('screens', [App\Http\Controllers\ScreenController::class, 'index'])->name('screens.index');