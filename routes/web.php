<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ImprovementsController;
use App\Http\Controllers\SitesettingsController;
use App\Http\Controllers\SalesopportunityController;
use App\Http\Controllers\DeptrightsController;
use App\Http\Controllers\EmprightsController;


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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) use ($request) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->save();

            $user->setRememberToken(Str::random(60));

            event(new PasswordReset($user));
        }
    );

    return $status == Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

Route::get('/', function () {
    //return view('welcome');
    return Redirect::to('login');
});

Auth::routes();

Route::get('/home', ['middleware' => 'auth', App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/change-password', ['middleware' => 'auth', App\Http\Controllers\ChangePasswordController::class, 'index'])->name('change-password');
Route::post('/change-password', ['middleware' => 'auth', App\Http\Controllers\ChangePasswordController::class, 'store'])->name('change.password');



Route::get('employees/outstandingitems', ['as'=>'employees.outstandingitems', 'uses'=>'App\Http\Controllers\EmployeesController@outstandingitems'])->middleware('auth');;
Route::resource('employees', EmployeesController::class, ['middleware' => 'auth']);
Route::post('empajax/request/status', [EmployeesController::class, 'empajaxRequestStore'])->name('empajax.request.status');
Route::post('empajax/request/picture', [EmployeesController::class, 'empajaxRequestPicture'])->name('empajax.request.picture');
Route::get('employees/onboarding/{id}', ['as'=>'employees.onboarding', 'uses'=>'App\Http\Controllers\EmployeesController@onboarding'])->middleware('auth');;
Route::post('/employees/storeonboarding', ['as'=>'employees.storeonboarding', 'uses'=>'App\Http\Controllers\EmployeesController@storeonboarding']);
Route::post('/employees/updateonboardstatus', ['as'=>'employees.updateonboardstatus', 'uses'=>'App\Http\Controllers\EmployeesController@updateonboardstatus']);


Route::resource('production', ProductionController::class, ['middleware' => 'auth']);
Route::get('/testmail', [ProductionController::class, 'testmail'])->name('testmail');
Route::post('production/calculate', ['as'=>'production.calculate', 'uses'=>'App\Http\Controllers\ProductionController@calculate']);

Route::resource('recipes', RecipesController::class, ['middleware' => 'auth']);
Route::get('recipes/getpdf/{id}', ['as'=>'recipes.getpdf', 'uses'=>'App\Http\Controllers\RecipesController@getpdf']);
Route::post('/recipes/uploadpicture', ['as'=>'recipes.uploadpicture', 'uses'=>'App\Http\Controllers\RecipesController@uploadpicture']);

Route::resource('improvements', ImprovementsController::class, ['middleware' => 'auth']);
Route::get('improvements/process/{id}', ['as'=>'improvements.process', 'uses'=>'App\Http\Controllers\ImprovementsController@process'])->middleware('auth');;
Route::post('/improvements/updateprocess', ['as'=>'improvements.updateprocess', 'uses'=>'App\Http\Controllers\ImprovementsController@updateprocess']);
Route::post('/improvements/updatecomment', ['as'=>'improvements.updatecomment', 'uses'=>'App\Http\Controllers\ImprovementsController@updatecomment']);
Route::post('/improvements/updateimpstatus', ['as'=>'improvements.updateimpstatus', 'uses'=>'App\Http\Controllers\ImprovementsController@updateimpstatus']);
Route::post('/improvements/uploadpicture', ['as'=>'improvements.uploadpicture', 'uses'=>'App\Http\Controllers\ImprovementsController@uploadpicture']);

Route::post('sitesettings/storeonboardingcategories', ['as'=>'sitesettings.storeonboardingcategories', 'uses'=>'App\Http\Controllers\SitesettingsController@storeonboardingcategories']);
Route::post('sitesettings/storeonboardingtasks', ['as'=>'sitesettings.storeonboardingtasks', 'uses'=>'App\Http\Controllers\SitesettingsController@storeonboardingtasks']);
Route::get('sitesettings/onboardingsections/', [SitesettingsController::class, 'onboardingsections'])->name('sitesettings.onboardingsections')->middleware('auth');;
Route::get('sitesettings/onboardingtasks', ['as'=>'sitesettings.onboardingtasks', 'uses'=>'App\Http\Controllers\SitesettingsController@onboardingtasks'])->middleware('auth');;
Route::resource('sitesettings', SitesettingsController::class, ['middleware' => 'auth']);

Route::resource('salesopportunity', SalesopportunityController::class, ['middleware' => 'auth']);
Route::post('/salesopportunity/uploadpicture', ['as'=>'salesopportunity.uploadpicture', 'uses'=>'App\Http\Controllers\SalesopportunityController@uploadpicture']);
Route::post('/salesopportunity/updatepost', ['as'=>'salesopportunity.updatepost', 'uses'=>'App\Http\Controllers\SalesopportunityController@updatepost']);
Route::get('salesopportunity/process/{id}', ['as'=>'salesopportunity.process', 'uses'=>'App\Http\Controllers\SalesopportunityController@process'])->middleware('auth');
Route::post('/salesopportunity/updateprocess', ['as'=>'salesopportunity.updateprocess', 'uses'=>'App\Http\Controllers\SalesopportunityController@updateprocess']);
Route::post('/salesopportunity/updatecomment', ['as'=>'salesopportunity.updatecomment', 'uses'=>'App\Http\Controllers\SalesopportunityController@updatecomment']);
Route::post('/salesopportunity/updatesopstatus', ['as'=>'salesopportunity.updatesopstatus', 'uses'=>'App\Http\Controllers\SalesopportunityController@updatesopstatus']);

Route::resource('deptrights', DeptrightsController::class, ['middleware' => 'auth']);
Route::resource('emprights', EmprightsController::class, ['middleware' => 'auth']);
