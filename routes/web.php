<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\StudentPrimaryInfoController;
use Illuminate\Support\Facades\Route as ro;

ro::get('/', function () {
    return view('welcome');
});

Auth::routes();

ro::get('/lang', [LanguageController::class, 'setLang'])->name('lang');

ro::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

ro::resource('/student', StudentPrimaryInfoController::class);
