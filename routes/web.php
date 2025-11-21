<?php

use Illuminate\Support\Facades\Route;

//FRONTEND CONTROLLERS
use App\Http\Controllers\Frontend\FrontendController AS Frontend;

//1 - Frontend Routes
Route::group([ 'prefix' =>'/'], function () {

    Route::get('/', [Frontend::class, 'index'])->name('frontend.homepage');


});
