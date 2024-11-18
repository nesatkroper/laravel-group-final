<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentPrimaryInfoController;
use App\Http\Controllers\SClassController;
use App\Http\Controllers\StudentInfoController;
use Illuminate\Support\Facades\Route as ro;

ro::get('/', function () {
    return view('welcome');
});

Auth::routes();

ro::group(['middleware' => ['auth', 'verified']], function () {

    // ! for lacalization
    ro::get('/lang', [LanguageController::class, 'setLang'])->name('lang');

    //  ! for home routes
    ro::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // ! for students routes
    ro::resource('/student', StudentPrimaryInfoController::class);

    // ! for staff routes
    ro::resource('/staff', StaffController::class);

    //  ! for category routes
    ro::resource('/cate', CategoryController::class);

    //  ! for class routes
    ro::resource('/class', SClassController::class);

    // ! for department routes
    ro::resource('/dep', DepartmentController::class);

    // ! for student infomation routes
    ro::controller(StudentInfoController::class)->group(function () {
        ro::get('/info-payment', 'studentPayment')->name('info-payment');
        ro::get('/info-score', 'studentScore')->name('info-score');
        ro::get('/info-attendance', 'studentAttendance')->name('info-attendace');
    });
});
