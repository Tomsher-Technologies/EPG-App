<?php

use App\Http\Controllers\Member\Auth\MemberAuthController;
use App\Http\Controllers\Member\MemberDashboardController;
use App\Models\User;
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

Route::get('/', function () {
    dd("Home");
})->name('home');


Route::name('member.')->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::get('login', [MemberAuthController::class, 'loginView'])->name('login');
        Route::post('login', [MemberAuthController::class, 'loginAuth']);
    });

    Route::middleware(['auth', 'auth.session', 'member'])->group(function () {
        Route::post('logout', [MemberAuthController::class, 'logout'])->name('logout');
        Route::get('dashboard', [MemberDashboardController::class, 'dashboard'])->name('dashboard');
    });
});


include('admin.php');
