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

Route::get('/home', function () {
    return view('layouts.main');
})->middleware(['auth'])->name('main');
Route::get('/', function () {
    return view('welcome');
})->middleware(['auth'])->name('main');

// Route::get('/facilities', function () {
//     return view('facilities');
// })->middleware(['auth'])->name('facilities');

Route::prefix('facilities')->group(function () {
    Route::get('/', 'App\Http\Controllers\FacilityController@index');
    Route::post('/create', 'App\Http\Controllers\FacilityController@create');
    Route::get('edit/{id}', 'App\Http\Controllers\FacilityController@edit');
    Route::post('update/', 'App\Http\Controllers\FacilityController@update');
    Route::get('delete/{id}', 'App\Http\Controllers\FacilityController@destroy');
    // Route::get("timetable/{email}", "LecturerController@lecTimetable");
});

Route::get('/view-facility/{id}', 'App\Http\Controllers\FacilityController@viewFacility')->middleware(['auth'])->name('view-facility');

Route::get('/community-units', function () {
    return view('community-units');
})->middleware(['auth'])->name('community-units');

Route::prefix('client')->group(function () {
    Route::get('/register', 'App\Http\Controllers\ClientController@index');
    Route::post('/create', 'App\Http\Controllers\ClientController@create');
    Route::get('/search', 'App\Http\Controllers\ClientController@search');
    Route::get('/summary', 'App\Http\Controllers\ClientController@summary');
});


Route::get('/reports', function () {
    return view('reports');
});

Route::get('/search-client', function () {
    return view('search');
})->middleware(['auth'])->name('search-client');

Route::get('/client-summary', function () {
    return view('client-summary');
})->middleware(['auth'])->name('client-summary');

require __DIR__.'/auth.php';
