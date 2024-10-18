<?php

use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\User\UserController;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeEmail;

Route::get('/', function () {
    return view('welcome');
});


// tambahkan route baru
Route::get('/mail/send', [SendEmailController::class, 'sendEmail'])->name('send.email');