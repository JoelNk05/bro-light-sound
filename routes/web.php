<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => '', 'as' => 'frontend.'], function () {

    Route::view('/', 'frontend.landingpage')->name('home');
    Route::view('impressum', 'frontend.imprint')->name('imprint');
    Route::view('faq', 'frontend.faq')->name('faq');
    Route::view('echtheitdesgewinnspiels', 'frontend.realnessCompetition')->name('realnesscompetition');
    Route::view('datenschutz', 'frontend.privacy')->name('privacy');
    Route::view('termsandconditions', 'frontend.termsandconditions')->name('termsandconditions');

});


