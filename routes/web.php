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

Route::get('/about', function() {
    return 'whatever';
});

Route::get('/contact', function() {
    return view('contact', ['name' => 'cara fajar', 'phone' => '08213123123']);
});

// Route::view('/contact', 'contact', ['name' => 'cara fajar', 'phone' => '08213123123']);

Route::redirect('/contact', '/contact-us');

Route::get('/product', function() {
    return 'product';
});

Route::get('/product/{id}', function($id) {
    return view('product.detail', ['id' => $id]);
});

Route::prefix('adminis')->group(function(){
    Route::get('/about-admin', function() {
        return 'about admin';
    });
    
    Route::get('/profile-admin', function() {
        return 'profile admin';
    });
    
    Route::get('/contact-admin', function() {
        return 'contact admin';
    });
});