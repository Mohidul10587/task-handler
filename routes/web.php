<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\jobController;
use App\Http\Controllers\newformController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', [contactController::class, 'getContactPage']);
Route::post("contact-data-send", [contactController::class, "sendData"]);

Route::get('job-posting-page', [jobController::class, 'getJobPage']);
Route::post('posted-jobs-data', [jobController::class, 'sendPostedJobsData']);

Route::get('dashboard', [dashboardController::class, 'getDashboard']);
Route::get('dashboard', [dashboardController::class, 'userdata']);

Route::get('newform', [newformController::class ,'getNewForm']);
Route::post('newpost', [newformController::class ,'sendNewPost']);