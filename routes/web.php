<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'nav' => 'index'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'nav' => 'about'
    ]);
});


Route::get('/admission', function () {
    return view('admission', [
        'nav' => 'admission'
    ]);
});

Route::get('/scholarship', function () {
    return view('sponsors', [
        'nav' => 'sponsor'
    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [
        'nav' => 'gallery'
    ]);
});

Route::get('/contact', [ContactController::class, 'index']);

Route::post('/contact/mail', [
    ContactController::class, 'sendMail'
])->name('sendMailQuery');
