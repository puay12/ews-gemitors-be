<?php

use App\Http\Controllers\EWSScoreController;
use App\Http\Controllers\HealthRecordsController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProtocolController;
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
    return view('welcome');
});

Route::prefix('patients')->group(function () {
    Route::controller(PatientController::class)->group(function () {
        Route::get('/', 'index')->name('all-patients');
        Route::get('/{id}', 'show')->name('show-patient');
        Route::post('/add', 'store')->name('add-patient');
        Route::put('/update/{id}', 'update')->name('update-patient');
        Route::delete('/delete/{id}', 'destroy')->name('delete-patient');
    });
    Route::prefix('vsign')->controller(HealthRecordsController::class)->group(function () {
        Route::get('/all/{id}', 'showRecordsByPatient')->name('show-patients-records');
        Route::get('/{id}', 'show')->name('show-record');
        Route::post('/add', 'store')->name('add-record');
        Route::put('/update/{id}', 'update')->name('update-record');
        Route::delete('/delete/{id}', 'destroy')->name('delete-record');
    });
    Route::prefix('score')->controller(EWSScoreController::class)->group(function () {
        Route::get('/detail/{id}', 'show')->name('show-ews-score-detail');
        Route::post('/add', 'store')->name('add-ews-score');
        Route::delete('/delete/{id}', 'destroy')->name('delete-ews-score');
    });
});

Route::prefix('protocol')->group(function () {
    Route::controller(ProtocolController::class)->group(function () {
        Route::get('/all', 'index')->name('all-protocols');
        Route::get('/{id}', 'show')->name('get-protocol-by-id');
        Route::post('/get-recommendation/{score}', 'getRecommendation')->name('get-recommendation');
    });
});