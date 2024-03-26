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


Route::get('/programs', function () {
    return view('programs', [
        'nav' => 'programs'
    ]);
});

Route::get('/admission', function () {
    return view('admission', [
        'nav' => 'admission'
    ]);
});

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact/mail', [
    ContactController::class, 'sendMail'
])->name('sendMailQuery');

Route::get('/gallery', function () {
    return view('gallery', [
        'nav' => 'gallery'
    ]);
});
