<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ImprovementsController;
use App\Http\Controllers\SitesettingsController;
use App\Http\Controllers\SalesopportunityController;


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

Route::get('/home', ['middleware' => 'auth', App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/change-password', ['middleware' => 'auth', App\Http\Controllers\ChangePasswordController::class, 'index'])->name('change-password');
Route::post('/change-password', ['middleware' => 'auth', App\Http\Controllers\ChangePasswordController::class, 'store'])->name('change.password');

Route::get('employees/outstandingitems', ['as'=>'employees.outstandingitems', 'uses'=>'App\Http\Controllers\EmployeesController@outstandingitems']);
Route::resource('employees', EmployeesController::class, ['middleware' => 'auth']);
Route::post('empajax/request/status', [EmployeesController::class, 'empajaxRequestStore'])->name('empajax.request.status');
Route::post('empajax/request/picture', [EmployeesController::class, 'empajaxRequestPicture'])->name('empajax.request.picture');
Route::get('employees/onboarding/{id}', ['as'=>'employees.onboarding', 'uses'=>'App\Http\Controllers\EmployeesController@onboarding']);
Route::post('/employees/storeonboarding', ['as'=>'employees.storeonboarding', 'uses'=>'App\Http\Controllers\EmployeesController@storeonboarding']);
Route::post('/employees/updateonboardstatus', ['as'=>'employees.updateonboardstatus', 'uses'=>'App\Http\Controllers\EmployeesController@updateonboardstatus']);


Route::resource('production', ProductionController::class, ['middleware' => 'auth']);
Route::get('/testmail', [ProductionController::class, 'testmail'])->name('testmail');

Route::resource('recipes', RecipesController::class, ['middleware' => 'auth']);
Route::get('recipes/getpdf/{id}', ['as'=>'recipes.getpdf', 'uses'=>'App\Http\Controllers\RecipesController@getpdf']);

Route::resource('improvements', ImprovementsController::class, ['middleware' => 'auth']);
Route::get('improvements/process/{id}', ['as'=>'improvements.process', 'uses'=>'App\Http\Controllers\ImprovementsController@process']);
Route::post('/improvements/updateprocess', ['as'=>'improvements.updateprocess', 'uses'=>'App\Http\Controllers\ImprovementsController@updateprocess']);
Route::post('/improvements/updatecomment', ['as'=>'improvements.updatecomment', 'uses'=>'App\Http\Controllers\ImprovementsController@updatecomment']);
Route::post('/improvements/updateimpstatus', ['as'=>'improvements.updateimpstatus', 'uses'=>'App\Http\Controllers\ImprovementsController@updateimpstatus']);
Route::post('/improvements/uploadpicture', ['as'=>'improvements.uploadpicture', 'uses'=>'App\Http\Controllers\ImprovementsController@uploadpicture']);

Route::post('sitesettings/storeonboardingcategories', ['as'=>'sitesettings.storeonboardingcategories', 'uses'=>'App\Http\Controllers\SitesettingsController@storeonboardingcategories']);
Route::post('sitesettings/storeonboardingtasks', ['as'=>'sitesettings.storeonboardingtasks', 'uses'=>'App\Http\Controllers\SitesettingsController@storeonboardingtasks']);
Route::get('sitesettings/onboardingsections/', [SitesettingsController::class, 'onboardingsections'])->name('sitesettings.onboardingsections');
Route::get('sitesettings/onboardingtasks', ['as'=>'sitesettings.onboardingtasks', 'uses'=>'App\Http\Controllers\SitesettingsController@onboardingtasks']);
Route::resource('sitesettings', SitesettingsController::class, ['middleware' => 'auth']);

Route::resource('salesopportunity', SalesopportunityController::class, ['middleware' => 'auth']);
Route::post('/salesopportunity/uploadpicture', ['as'=>'salesopportunity.uploadpicture', 'uses'=>'App\Http\Controllers\SalesopportunityController@uploadpicture']);
Route::post('/salesopportunity/updatepost', ['as'=>'salesopportunity.updatepost', 'uses'=>'App\Http\Controllers\SalesopportunityController@updatepost']);
Route::get('salesopportunity/process/{id}', ['as'=>'salesopportunity.process', 'uses'=>'App\Http\Controllers\SalesopportunityController@process']);
Route::post('/salesopportunity/updateprocess', ['as'=>'salesopportunity.updateprocess', 'uses'=>'App\Http\Controllers\SalesopportunityController@updateprocess']);
Route::post('/salesopportunity/updatecomment', ['as'=>'salesopportunity.updatecomment', 'uses'=>'App\Http\Controllers\SalesopportunityController@updatecomment']);
