<?php

use App\Http\Controllers\admindashboardController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\jobController;
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

Route::get('/', function () {return view('welcome');});






// 
// Route::get('dashboard', [dashboardController::class, 'userdata']);

// Route::get('newform', [newformController::class ,'getNewForm']);
// Route::post('newpost', [newformController::class ,'sendNewPost']);

// Route::get('contact', [contactController::class, 'getContactPage']);
// Route::post("contact-data-send", [contactController::class, "sendData"]);

Route::get('job-posting-page', [jobController::class, 'getJobPage'])->middleware(['auth'])->name('job-posting-page');
Route::post('posted-jobs-data', [jobController::class, 'sendPostedJobsData'])->middleware(['auth'])->name('job-posting-page');

Route::get('dashboard', [dashboardController::class, 'getDashboard'])->middleware(['auth'])->name('dashboard');
Route::get('dashboard', [dashboardController::class, 'userdata'])->middleware(['auth'])->name('dashboard');

Route::get('admindashboard', [admindashboardController::class , "getAdminDashBoard"])->middleware(['auth'])->name('admindashboard');
Route::get('admindashboard', [admindashboardController::class , "getUsers"])->middleware(['auth'])->name('admindashboard');



require __DIR__.'/auth.php';
