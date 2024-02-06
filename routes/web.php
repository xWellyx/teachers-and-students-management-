<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\CourceController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReciptController;

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout');
});


Route::resource('/students', StudentController::class);

Route::resource('/teachers', TeacherController::class);

Route::resource('/cources', CourceController::class);

Route::resource('/batches', BatchController::class);

Route::resource('/enrollments', EnrollmentController::class);

Route::resource('/payments', PaymentController::class);



Route::get('report/report1/{pid}',[ ReportController::class , 'report1']);

Route::get('recipt/recipt1/{pid}',[ ReciptController::class , 'recipt1']);




Route::resource('/homepage', HomepageController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
