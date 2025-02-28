<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\IndustryTypeController;
use App\Http\Controllers\Admin\LanguageController as AdminLanguageController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\OrganizationTypeController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\LanguageController;
use App\Models\State;
use Illuminate\Support\Facades\Route;

Route::group(
    ['middleware' => ['guest:admin'], 'prefix' => 'admin', 'as' => 'admin.'],
    function () {
        //
        // Route::get('register', [RegisteredUserController::class, 'create'])->name(
        //     'register'
        // );

        Route::post('register', [RegisteredUserController::class, 'store']);

        Route::get('login', [
            AuthenticatedSessionController::class,
            'create',
        ])->name('login');

        Route::post('login', [AuthenticatedSessionController::class, 'store']);

        Route::get('forgot-password', [
            PasswordResetLinkController::class,
            'create',
        ])->name('password.request');

        Route::post('forgot-password', [
            PasswordResetLinkController::class,
            'store',
        ])->name('password.email');

        Route::get('reset-password/{token}', [
            NewPasswordController::class,
            'create',
        ])->name('password.reset');

        Route::post('reset-password', [
            NewPasswordController::class,
            'store',
        ])->name('password.store');
    }
);

Route::group(
    ['middleware' => ['auth:admin'], 'prefix' => 'admin', 'as' => 'admin.'],
    function () {
        Route::post('logout', [
            AuthenticatedSessionController::class,
            'destroy',
        ])->name('logout');

        // Dashboard route
        Route::get('dashboard', [DashboardController::class, 'index'])->name(
            'dashboard'
        );
        // Industry type route
        route::resource('industry-type', IndustryTypeController::class);
        // Organization type route
        route::resource('organization-type', OrganizationTypeController::class);
        // Country routes
        route::resource('countries', CountryController::class);
        // State routes
        route::resource('states', StateController::class);
        // City routes
        route::resource('cities', CityController::class);

        Route::get('get-states/{country_id}', [
            LocationController::class,
            'getStatesOfCountry',
        ])->name('get-states');

        // Language routes
        route::resource('languages', LanguageController::class);
    }
);
