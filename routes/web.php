<?php

use Illuminate\Support\Facades\Route;

//FRONTEND CONTROLLERS
use App\Http\Controllers\Frontend\FrontendController AS Frontend;
use App\Http\Controllers\Frontend\ProductsController AS FrontendProducts;

//1 - Frontend Routes
Route::group([ 'prefix' =>'/'], function () {

    Route::get('/', [Frontend::class, 'index'])->name('frontend.homepage');
    Route::get('/about-us', [Frontend::class, 'aboutUs'])->name('frontend.aboutUs');
    Route::get('/contact-us', [Frontend::class, 'contactUs'])->name('frontend.contactUs');
    Route::get('/products', [FrontendProducts::class, 'index'])->name('frontend.products.index');
    Route::get('/product/{slug}', [FrontendProducts::class, 'product'])->name('frontend.products.product');
    Route::post('/contact/send-message', [Frontend::class, 'sendMessage'])->name('frontend.contacts.sendMessage');
    Route::get('/test-mail', [Frontend::class, 'testMail'])->name('frontend.testMail');


});
