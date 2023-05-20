<?php

use App\Http\Controllers\ParticipationController;
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
    return view('page.form');
});

Route::post('/participation', [ParticipationController::class, 'store'])->name('participation.store');

Route::view('/confirmation', 'page.confirmation')->name('confirmation');
