<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\condidateController;
use App\Http\Controllers\jobController;
use App\Models\Job;
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
// JOB CONTROLLER
Route::get('/GetJob', [jobController::class, 'index']);
Route::get('/GetJob/job/{job}', [jobController::class, 'show']);



// CONDIDATE CONTROLLER
Route::get('/GetJob/condidate/{id}',[condidateController::class, 'create']);
Route::post('/GetJob/condidate/{id}',[condidateController::class, 'store']);
Route::get('/GetJob/condidate/delete/{id}',[condidateController::class, 'delete']);
Route::post('/GetJob/condidate/update/{id}',[condidateController::class, 'update']);

// login
Route::get('/GetJob/login',function(){
    return view('login');
});


// Company

Route::get('/GetJob/company/{id}',[CompanyController::class,"show"]);

//welcome
Route::get('/', function () {
    return view("Welcome");
});
