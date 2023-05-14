<?php

use App\Http\Controllers\Admin\EspaceCarburantAdmin;
use App\Http\Controllers\Admin\EspaceMaintenanceAdmin;
use App\Http\Controllers\Admin\EspaceVehiculeAdmin;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use App\Http\Controllers\EspaceCarburantController;
use App\Http\Controllers\EspaceMaintenanceController;
use App\Http\Controllers\EspaceVehiculeController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\MarqueVehiculeAdmin;
use App\Http\Controllers\Admin\ModeleVehiculeAdmin;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\TableDeBordController;
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

Route::view('/', 'welcome')->name('home');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});
Route::prefix('admin')->middleware('admin')->name('admin')->group(
    function(){
        Route::get('/admin/home', [HomeAdminController::class,'index']);
        Route::get('/admin/espace_maintenances', [EspaceMaintenanceAdmin::class,'index']);
        Route::get('/admin/espace_carburants', [EspaceCarburantAdmin::class,'index']);
        Route::get('/admin/espace_vehicules', [EspaceVehiculeAdmin::class,'index']);
        Route::get('/admin/users',[UserAdminController::class,'index']);
    }
);
Route::get('/admin', function () {
    return view('pages/admin/dashboard/dashboard');
});


Route::resource('/espace_vehicules',EspaceVehiculeController::class);
Route::resource('/espace_maintenances',EspaceMaintenanceController::class);
Route::resource('/espace_carburants',EspaceCarburantController::class);
Route::resource('table_de_bord', TableDeBordController::class);

Route::get('/admin/home', [HomeAdminController::class,'index']);
        Route::resource('/admin/espace_maintenances',EspaceMaintenanceAdmin::class);
        Route::resource('/admin/espace_carburants', EspaceCarburantAdmin::class);
        Route::resource('/admin/espace_vehicules', EspaceVehiculeAdmin::class);
        Route::resource('/admin/users',UserAdminController::class);
        Route::resource('admin/modeleVehicule',ModeleVehiculeAdmin::class);
        Route::resource('admin/marqueVehicule',MarqueVehiculeAdmin::class);