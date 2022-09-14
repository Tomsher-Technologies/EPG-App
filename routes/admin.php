<?php

use App\Http\Controllers\Admin\Benefits\BenefitCategoryController;
use App\Http\Controllers\Admin\Benefits\BenefitController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Location\LocationCategoryController;
use App\Http\Controllers\Admin\Location\LocationController;
use App\Http\Controllers\Admin\Location\PackageController;
use App\Http\Controllers\Admin\Location\Receptionist;
use App\Http\Controllers\Admin\Member\MemberController;
use App\Http\Controllers\Admin\User\ProfileController;
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




Route::prefix(env('ADMIN_PREFIX'))->group(function () {

    Route::get('/', function () {
        return redirect()->route('login');
    });

    Route::middleware(['auth', 'auth.session', 'admin'])->group(function () {

        Route::get('/member/{slug}', function ($slug) {
            $user = User::whereStatus(true)
                ->whereHas('member_details', function ($q) use ($slug) {
                    $q->where('slug', $slug);
                })
                ->with('member_details')
                ->firstOrFail();

            return view('welcome')->with('user', $user);
        })->name('qrscan');

        Route::get('admindashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('members', MemberController::class)->only(['index', 'create', 'show', 'edit']);

        Route::resource('receptionist', Receptionist::class)->only(['index', 'create', 'edit']);

        Route::resource('location', LocationController::class)->only(['index', 'create', 'edit']);

        Route::resource('package', PackageController::class)->only(['index', 'create', 'edit']);

        Route::get('package/{package}/assign/', [PackageController::class, 'assingToPackage'])->name('package.assign');

        Route::resource('benefit', BenefitController::class)->only(['index', 'create', 'edit']);

        Route::group(['prefix' => 'benefit', 'as' => 'benefit.'], function () {
            Route::resource('category', BenefitCategoryController::class)->only(['index', 'create', 'edit']);
        });

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
