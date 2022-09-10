<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Location\LocationController;
use App\Http\Controllers\Location\Receptionist;
use App\Http\Controllers\Member\MemberController;
use App\Http\Controllers\User\ProfileController;
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
    return redirect()->route('login');
});

Route::get('/member/{slug}', function ($slug) {
    $user = User::whereStatus(true)
        ->whereHas('member_details', function ($q) use ($slug) {
            $q->where('slug', $slug);
        })
        ->with('member_details')
        ->firstOrFail();

        return view('welcome')->with('user',$user);
})->name('qrscan');

Route::prefix(env('ADMIN_PREFIX'))->group(function () {
    Route::middleware(['auth', 'auth.session'])->group(function () {

        Route::get('/', function () {
            return redirect()->route('login');
        });

        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('members', MemberController::class)->only(['index', 'create', 'show', 'edit']);

        Route::resource('receptionist', Receptionist::class)->only(['index', 'create', 'edit']);

        Route::resource('location', LocationController::class)->only(['index', 'create', 'edit']);

        Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
            Route::get('/profile', function () {
                return view('admin.users.profile');
            })->name('profile');
            Route::put('/password-update', [ProfileController::class, 'updatePassword'])->name('password-update');
            Route::put('/profile-update', [ProfileController::class, 'updateProfile'])->name('profile-update');
            Route::post('/logout-everywhere', [ProfileController::class, 'logoutEverywhere'])->name('logout-everywhere');
        });
    });
});
