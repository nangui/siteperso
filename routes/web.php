<?php

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/check-queue', function () {
    Mail::to('adonainangui03@gmail.com')->send(new TestMail());
    return 'Working';
});
