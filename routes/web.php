<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Member\Auth\MemberAuthController;
use App\Http\Controllers\Member\MemberDashboardController;
use App\Http\Controllers\Member\PrefrenceController;
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

Route::get('/', [FrontendController::class, 'home'])->name('home');


Route::name('member.')->group(function () {
    Route::get('login', [MemberAuthController::class, 'loginView'])->name('login');
    Route::post('login', [MemberAuthController::class, 'loginAuth']);

    Route::middleware(['auth', 'auth.session', 'member'])->group(function () {
        Route::post('logout', [MemberAuthController::class, 'logout'])->name('logout');
        Route::get('dashboard', [MemberDashboardController::class, 'dashboard'])->name('dashboard');

        Route::resource('preference', PrefrenceController::class);

        Route::get('/profile', function () {
            return view('members.profile');
        })->name('profile');

        Route::get('/profile-edit', [MemberDashboardController::class, 'prodileEditView'])->name('profile.edit');
        Route::post('/profile-edit', [MemberDashboardController::class, 'prodileEdit']);
    });
});


include('admin.php');
