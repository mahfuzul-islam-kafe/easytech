<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Agent\AgentController;
use App\Http\Controllers\Agent\AgentShopController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/logout', [ProfileController::class, 'logout'])->name('user.logout');

});

//home group starts here
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'Index')->name('user.home');
});



require __DIR__ . '/auth.php';

//admin middleware group
Route::middleware(['auth', 'role.control:admin'])->group(function () {
    //admin Controller group
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/dashboard', 'Index')->name('admin.index');
    });
    Route::controller(AccountController::class)->group(function () {
        Route::get('/admin/profile', 'ViewAccount')->name('admin.profile');
        Route::post('/admin/profile/update', 'EditProfile')->name('admin.profile.update');
    });
});//admin of admin middleware

//agent middleware group
Route::middleware(['auth', 'role.control:agent'])->group(function () {
    //agent Controller group
    Route::controller(AgentController::class)->group(function () {
        Route::get('/agent/dashboard', 'Index')->name('agent.index');
    });
    Route::controller(AgentShopController::class)->group(function () {
        Route::get('/agent/custom/shop', 'AgentShop')->name('agent.custom.shop');
    });
});//agent of admin middleware

