<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\GigController;
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
})->name('home');


/**
 * Only authenticate users can access these routes
 */
Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    #=================companies==============
    Route::prefix('company')->group(function(){

        Route::resource('companies', CompanyController::class);
    });

    #=================Gig==========================
    Route::prefix('gig')->group(function(){

        Route::resource('gigs', GigController::class);
    });



});

require __DIR__.'/auth.php';
