<?php

use App\Http\Controllers\Admin\AccountsController;
use App\Http\Controllers\Admin\ContactRequestController;
use App\Http\Controllers\Admin\PackagesController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\SectionsController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\TechnologyController;
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
Route::resource('technologys',TechnologyController::class);
Route::resource('requests',ContactRequestController::class);
Route::resource('projects',ProjectsController::class);


Route::get('accounts',[AccountsController::class,'index'])->name('account.index');
Route::put('accounts',[AccountsController::class,'updateData'])->name('account.update');




});
