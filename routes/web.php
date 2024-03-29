<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// PWA (Web App) Routes
Route::view('/', 'home');
Route::get('/#/reset-password', [HomeController::class, 'index'])->name(
    'pwa.password.reset',
);
Route::get('/#/email/verify', [HomeController::class, 'index'])->name(
    'pwa.verification.verify',
);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
})
    ->middleware(['auth', '2fa'])
    ->name('admin');

Route::post('/login-2fa', function () {
    return redirect()->intended(route('admin'));
})
    ->name('login-2fa')
    ->middleware('2fa');

require __DIR__ . '/auth.php';
