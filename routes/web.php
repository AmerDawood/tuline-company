<?php

use App\Http\Controllers\Admin\PackagesController;
use App\Http\Controllers\Admin\SectionsController;
use App\Http\Controllers\Admin\ServicesController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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
Route::prefix(LaravelLocalization::setLocale())->group(function() {

Route::get('/', function () {
    return view('dashboard.index');
});



Route::resource('sections',SectionsController::class);
Route::resource('services',ServicesController::class);
Route::resource('packages',PackagesController::class);



});
