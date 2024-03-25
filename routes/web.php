<?php

use App\Http\Controllers\ContactController;
use App\Models\Contact;
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


Route::get('/causes', function () {
    return view('cause', [
        'nav' => 'causes'
    ]);
});

Route::get('/services', function () {
    return view('services', [
        'nav' => 'services'
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
