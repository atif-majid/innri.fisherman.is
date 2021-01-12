<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ImprovementsController;

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
//Route::get('employees/{id}', [EmployeesController::class, 'togglestatus']);
Route::post('empajax/request/status', [EmployeesController::class, 'empajaxRequestStore'])->name('empajax.request.status');
Route::post('empajax/request/picture', [EmployeesController::class, 'empajaxRequestPicture'])->name('empajax.request.picture');

Route::resource('production', ProductionController::class);
Route::resource('recipes', RecipesController::class);
Route::resource('improvements', ImprovementsController::class);

Route::get('/change-password', [App\Http\Controllers\ChangePasswordController::class, 'index'])->name('change-password');
Route::post('/change-password', [App\Http\Controllers\ChangePasswordController::class, 'store'])->name('change.password');

/*Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});*/

