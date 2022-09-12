<?php

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

Route::get('/member/{slug}', function ($slug) {
    $user = User::whereStatus(true)
        ->whereHas('member_details', function ($q) use ($slug) {
            $q->where('slug', $slug);
        })
        ->with('member_details')
        ->firstOrFail();

    return view('welcome')->with('user', $user);
})->name('qrscan');

include('admin.php');
