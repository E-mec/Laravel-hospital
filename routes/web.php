<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;



Route::get('/', [HomeController::class, 'index']);
Route::post('/appointment', [HomeController::class, 'appointment']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

      // Ordinary user (usertype = 0) dashboard

    Route::get('/dashboard', [HomeController::class, 'redirect'])->name('dashboard');
    Route::get('/myappointment', [HomeController::class, 'myappointment']);
    Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint']);


     // Admin (usertype = 1) home
Route::get('/home', [HomeController::class, 'redirect'])->name('home');

Route::controller(AdminController::class)->group(function () {

    Route::get('/add_doctor_view', 'addView');
    Route::post('upload_doctor', 'upload');


    Route::get('/showappointment', 'showappointment');

    Route::get('/approved/{id}','approved');

    Route::get('/cancel/{id}','cancel');

    Route::get('/showdoctor', 'showdoctor');

    Route::get('/deletedoctor/{id}','deletedoctor');
    Route::get('/updatedoctor/{id}','updatedoctor');

    Route::post('editdoctor/{id}', 'editdoctor');



});



});
