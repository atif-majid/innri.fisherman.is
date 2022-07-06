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
use App\Http\Controllers\ReceptionsurveillanceController;
use App\Http\Controllers\TemplatesController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\RawmaterialController;
use App\Http\Controllers\VisitorsController;
use App\Http\Controllers\CatalogfilesController;
use App\Http\Controllers\MenuController;


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


Route::get('/change-password', ['middleware' => 'auth', App\Http\Controllers\ChangePasswordController::class, 'index'])->name('change-password');
Route::post('/change-password', ['middleware' => 'auth', App\Http\Controllers\ChangePasswordController::class, 'store'])->name('change.password');

Route::resource('visitors', VisitorsController::class);

Route::group(['middleware' => ['auth', 'forcereset']], function() {
    // uses 'auth' middleware plus all middleware from $middlewareGroups['web']
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth', 'forcereset');

    Route::get('employees/outstandingitems', ['as'=>'employees.outstandingitems', 'uses'=>'App\Http\Controllers\EmployeesController@outstandingitems']);
    Route::resource('employees', EmployeesController::class);
    Route::post('empajax/request/status', [EmployeesController::class, 'empajaxRequestStore'])->name('empajax.request.status');
    Route::post('empajax/request/picture', [EmployeesController::class, 'empajaxRequestPicture'])->name('empajax.request.picture');
    Route::get('employees/onboarding/{id}', ['as'=>'employees.onboarding', 'uses'=>'App\Http\Controllers\EmployeesController@onboarding']);
    Route::post('/employees/storeonboarding', ['as'=>'employees.storeonboarding', 'uses'=>'App\Http\Controllers\EmployeesController@storeonboarding']);
    Route::post('/employees/updateonboardstatus', ['as'=>'employees.updateonboardstatus', 'uses'=>'App\Http\Controllers\EmployeesController@updateonboardstatus']);

    Route::resource('production', ProductionController::class);
    Route::get('/testmail', [ProductionController::class, 'testmail'])->name('testmail');
    Route::post('production/calculate', ['as'=>'production.calculate', 'uses'=>'App\Http\Controllers\ProductionController@calculate']);
    Route::get('production/getpdf/{id}', ['as'=>'production.getpdf', 'uses'=>'App\Http\Controllers\ProductionController@getpdf']);
    Route::post('/production/updateprodstatus', ['as'=>'production.updateprodstatus', 'uses'=>'App\Http\Controllers\ProductionController@updateprodstatus']);

    Route::resource('recipes', RecipesController::class);
    Route::get('recipes/getpdf/{id}', ['as'=>'recipes.getpdf', 'uses'=>'App\Http\Controllers\RecipesController@getpdf']);
    Route::post('/recipes/uploadpicture', ['as'=>'recipes.uploadpicture', 'uses'=>'App\Http\Controllers\RecipesController@uploadpicture']);
    Route::get('recipes/getfiles/{id}', ['as'=>'recipes.getfiles', 'uses'=>'App\Http\Controllers\RecipesController@getfiles'])->middleware('auth');
    Route::post('/recipes/delfiles', ['as'=>'recipes.delfiles', 'uses'=>'App\Http\Controllers\RecipesController@delfiles']);

    Route::resource('improvements', ImprovementsController::class);
    Route::get('improvements/process/{id}', ['as'=>'improvements.process', 'uses'=>'App\Http\Controllers\ImprovementsController@process']);
    Route::get('improvements/getfiles/{id}', ['as'=>'improvements.getfiles', 'uses'=>'App\Http\Controllers\ImprovementsController@getfiles']);
    Route::post('/improvements/delfiles', ['as'=>'improvements.delfiles', 'uses'=>'App\Http\Controllers\ImprovementsController@delfiles']);
    Route::post('/improvements/updateprocess', ['as'=>'improvements.updateprocess', 'uses'=>'App\Http\Controllers\ImprovementsController@updateprocess']);
    Route::post('/improvements/updatecomment', ['as'=>'improvements.updatecomment', 'uses'=>'App\Http\Controllers\ImprovementsController@updatecomment']);
    Route::post('/improvements/updateimpstatus', ['as'=>'improvements.updateimpstatus', 'uses'=>'App\Http\Controllers\ImprovementsController@updateimpstatus']);
    Route::post('/improvements/uploadpicture', ['as'=>'improvements.uploadpicture', 'uses'=>'App\Http\Controllers\ImprovementsController@uploadpicture']);

    Route::post('sitesettings/storeonboardingcategories', ['as'=>'sitesettings.storeonboardingcategories', 'uses'=>'App\Http\Controllers\SitesettingsController@storeonboardingcategories']);
    Route::post('sitesettings/storeonboardingtasks', ['as'=>'sitesettings.storeonboardingtasks', 'uses'=>'App\Http\Controllers\SitesettingsController@storeonboardingtasks']);
    Route::get('sitesettings/onboardingsections/', [SitesettingsController::class, 'onboardingsections'])->name('sitesettings.onboardingsections');
    Route::get('sitesettings/onboardingtasks', ['as'=>'sitesettings.onboardingtasks', 'uses'=>'App\Http\Controllers\SitesettingsController@onboardingtasks']);
    Route::resource('sitesettings', SitesettingsController::class);

    Route::resource('salesopportunity', SalesopportunityController::class);
    Route::post('/salesopportunity/uploadpictur e', ['as'=>'salesopportunity.uploadpicture', 'uses'=>'App\Http\Controllers\SalesopportunityController@uploadpicture']);
    Route::post('/salesopportunity/updatepost', ['as'=>'salesopportunity.updatepost', 'uses'=>'App\Http\Controllers\SalesopportunityController@updatepost']);
    Route::get('salesopportunity/process/{id}', ['as'=>'salesopportunity.process', 'uses'=>'App\Http\Controllers\SalesopportunityController@process']);
    Route::post('/salesopportunity/updateprocess', ['as'=>'salesopportunity.updateprocess', 'uses'=>'App\Http\Controllers\SalesopportunityController@updateprocess']);
    Route::post('/salesopportunity/updatecomment', ['as'=>'salesopportunity.updatecomment', 'uses'=>'App\Http\Controllers\SalesopportunityController@updatecomment']);
    Route::post('/salesopportunity/updatesopstatus', ['as'=>'salesopportunity.updatesopstatus', 'uses'=>'App\Http\Controllers\SalesopportunityController@updatesopstatus']);

    Route::resource('deptrights', DeptrightsController::class);
    Route::resource('emprights', EmprightsController::class);

    Route::resource('receptionsurveillance', ReceptionsurveillanceController::class);

    Route::resource('templates', TemplatesController::class);
    Route::get('templates/fill/{id}', ['as'=>'templates.fill', 'uses'=>'App\Http\Controllers\TemplatesController@fill']);
    Route::get('templates/review/{id}', ['as'=>'templates.review', 'uses'=>'App\Http\Controllers\TemplatesController@review']);
    Route::post('/templates/fillsubmit', ['as'=>'templates.fillsubmit', 'uses'=>'App\Http\Controllers\TemplatesController@fillsubmit']);
    Route::post('/templates/reviewsubmit', ['as'=>'templates.reviewsubmit', 'uses'=>'App\Http\Controllers\TemplatesController@reviewsubmit']);
    Route::get('templates/refill/{id}/submission/{nSubID}', ['as'=>'templates.refill', 'uses'=>'App\Http\Controllers\TemplatesController@refill']);
    Route::post('/templates/refillsubmit', ['as'=>'templates.fillsubmit', 'uses'=>'App\Http\Controllers\TemplatesController@fillsubmit']);

    Route::resource('reports', ReportsController::class);
    Route::get('/reports/{id}', [ReportsController::class, 'show']);
    //Route::get('/reports/showvisitor/{id}', [ReportsController::class, 'showvisitor']);
    Route::get('reports/showvisitor/{id}', ['as'=>'reports.showvisitor', 'uses'=>'App\Http\Controllers\ReportsController@showvisitor']);

    Route::resource('rawmaterial', RawmaterialController::class);
    Route::post('/rawmaterial/uploadfile', ['as'=>'rawmaterial.uploadfile', 'uses'=>'App\Http\Controllers\RawmaterialController@uploadfile']);
    Route::get('rawmaterial/getfiles/{id}', ['as'=>'rawmaterial.getfiles', 'uses'=>'App\Http\Controllers\RawmaterialController@getfiles']);
    Route::post('/rawmaterial/delfiles', ['as'=>'rawmaterial.delfiles', 'uses'=>'App\Http\Controllers\RawmaterialController@delfiles']);

    Route::get('/catelogfiles/getfiles', ['as'=>'catelogfiles.getfiles', 'uses'=>'App\Http\Controllers\CatalogfilesController@getfiles']);
    Route::resource('catelogfiles', CatalogfilesController::class);
    Route::post('/catelogfiles/delfiles', ['as'=>'catelogfiles.delfiles', 'uses'=>'App\Http\Controllers\CatalogfilesController@delfiles']);

    Route::resource('menu', MenuController::class);
    Route::post('/menu/order', ['as'=>'menu.order', 'uses'=>'App\Http\Controllers\MenuController@order']);
    Route::post('/menu/getweeklymenu', ['as'=>'menu.getweeklymenu', 'uses'=>'App\Http\Controllers\MenuController@getweeklymenu']);
    Route::get('reports/showfoodorder/{date}', ['as'=>'reports.showfoodorder', 'uses'=>'App\Http\Controllers\ReportsController@showfoodorder']);
});


































