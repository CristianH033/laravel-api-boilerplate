<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\LoggedUserController;
use App\Http\Controllers\Api\Auth\VerificationController;
use App\Http\Controllers\Api\Auth\ResetPasswordController;
use App\Http\Controllers\Api\Auth\TwoFactorAuthController;
use App\Http\Controllers\Api\Auth\ForgotPasswordController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

Route::name('api.')->group(function () {
    Route::post('login', [LoginController::class, 'login'])->name('auth.login');

    Route::post('register', [RegisterController::class, 'register'])->name(
        'auth.register',
    );

    Route::post('logout', [LoggedUserController::class, 'logout'])->name(
        'auth.logout',
    );

    Route::get('auth-check', [LoggedUserController::class, 'checkAuth'])->name(
        'auth.check',
    );

    Route::get('current-user', [
        LoggedUserController::class,
        'getCurrentUser',
    ])->name('auth.user');

    Route::post('refresh-token', [
        LoginController::class,
        'refreshAccessToken',
    ])->name('auth.refresh');

    /*
|--------------------------------------------------------------------------
| Email Verification Routes
|--------------------------------------------------------------------------
*/

    Route::get('verification/verify', [
        VerificationController::class,
        'verify',
    ])->name('verification.verify');

    Route::post('verification/resend', [
        VerificationController::class,
        'resend',
    ])->name('verification.resend');

    // Reset Password Routes
    Route::post('password/email', [
        ForgotPasswordController::class,
        'sendResetLinkEmail',
    ])->name('password.email');

    Route::post('password/reset', [
        ResetPasswordController::class,
        'reset',
    ])->name('password.update');

    /*
|--------------------------------------------------------------------------
| Two Factor Authentication Routes
|--------------------------------------------------------------------------
*/

    Route::get('request-enable-2fa', [
        TwoFactorAuthController::class,
        'requestEnable2FA',
    ])->name('auth.2fa.enablerequest');

    Route::post('enable-2fa', [
        TwoFactorAuthController::class,
        'enable2FA',
    ])->name('auth.2fa.enable');

    Route::post('disable-2fa', [
        TwoFactorAuthController::class,
        'disable2FA',
    ])->name('auth.2fa.disable');

    Route::get('2fa-qr-code', [
        TwoFactorAuthController::class,
        'getInlineQRCode',
    ])->name('auth.2fa.qrcode');
});

// Users
Route::apiResource('users', UsersController::class);
