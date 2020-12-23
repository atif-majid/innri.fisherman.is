<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\RecipesController;
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
    //return view('welcome');
    return Redirect::to('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('employees', EmployeesController::class);
Route::resource('production', ProductionController::class);
Route::resource('recipes', RecipesController::class);

/*Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});*/

