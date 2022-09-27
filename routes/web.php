<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('layouts.main');
})->middleware(['auth'])->name('main');

Route::get('/facilities', function () {
    return view('facilities');
})->middleware(['auth'])->name('facilities');

Route::prefix('facilities')->group(function () {
    Route::get('/', 'App\Http\Controllers\FacilityController@index');
    Route::post('/create', 'App\Http\Controllers\FacilityController@create');
    Route::get('edit/{id}', 'App\Http\Controllers\FacilityController@edit');
    // Route::get("timetable/{email}", "LecturerController@lecTimetable");
});

Route::get('/view-facility/{id}', 'App\Http\Controllers\FacilityController@viewFacility')->middleware(['auth'])->name('view-facility');

Route::get('/community-units', function () {
    return view('community-units');
})->middleware(['auth'])->name('community-units');

Route::get('/register-client', function () {
    return view('register-client');
})->middleware(['auth'])->name('register-client');

Route::get('/search-client', function () {
    return view('search');
})->middleware(['auth'])->name('search-client');

Route::get('/client-summary', function () {
    return view('client-summary');
})->middleware(['auth'])->name('client-summary');

require __DIR__.'/auth.php';
