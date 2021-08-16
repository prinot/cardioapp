<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;

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
Route::get('/form-wizard', 'App\Http\Controllers\MediquadminController@form_wizard');

Route::get('/doctors', 'App\Http\Controllers\MediquadminController@doctor_index');
Route::get('/doctors-details', 'App\Http\Controllers\MediquadminController@doctors_details');
Route::get('/doctors-review', 'App\Http\Controllers\MediquadminController@doctors_review');
Route::get('/patient-details', 'App\Http\Controllers\MediquadminController@patient_details');

Route::get('/ejercicio', 'App\Http\Controllers\MediquadminController@semanas_ejercicio1');
Route::get('/ejercicio4', 'App\Http\Controllers\MediquadminController@semanas_ejercicio4');
Route::get('/ejercicio5', 'App\Http\Controllers\MediquadminController@semanas_ejercicio5');
Route::get('/ejercicio6', 'App\Http\Controllers\MediquadminController@semanas_ejercicio6');
Route::get('/ejercicio7', 'App\Http\Controllers\MediquadminController@semanas_ejercicio7');
Route::get('/ejercicio8', 'App\Http\Controllers\MediquadminController@semanas_ejercicio8');


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/index', function () {
//     return view('');
// })->middleware(['auth'])->name('index');


Route::get('/index', 'App\Http\Controllers\MediquadminController@dashboard_1')->middleware(['auth']);
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');



require __DIR__.'/auth.php';

