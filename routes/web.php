<?php

use App\Http\Controllers\Frontend\LocationController;
use App\Http\Controllers\Frontend\CandidateDashboardController;
use App\Http\Controllers\Frontend\CompanyDashboardController;
use App\Http\Controllers\Frontend\CompanyProfileController;
use App\Http\Controllers\Frontend\HomeController;

use App\Http\Controllers\ProfileController;
use Barryvdh\Reflection\DocBlock\Location;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

// COMPANY DASHBOARD
Route::middleware(['auth', 'verified', 'user.role:company'])
    ->prefix('company')
    ->group(function () {
        // Dashboard
        Route::get('dashboard', [
            CompanyDashboardController::class,
            'index',
        ])->name('company.dashboard');

        // Company Profile
        Route::get('/profile', [
            CompanyProfileController::class,
            'index',
        ])->name('company.profile');

        // Company Info
        Route::POST('/profile/company-info', [
            CompanyProfileController::class,
            'UpdateCompanyInfo',
        ])->name('company.profile-company-info');

        // Founding Info
        Route::POST('/profile/founding-info', [
            CompanyProfileController::class,
            'UpdateFoundingInfo',
        ])->name('company.profile-founding-info');

        // Account Setting
        Route::POST('/profile/account-info', [
            CompanyProfileController::class,
            'UpdateAccountInfo',
        ])->name('company.profile-account-info');
        // Update Password
        Route::POST('/profile/password-update', [
            CompanyProfileController::class,
            'UpdatePassword',
        ])->name('company.profile.password-update');
    });

// CANDIDATE DASHBOARD
Route::middleware(['auth', 'verified', 'user.role:candidate'])
    ->prefix('candidate')
    ->group(function () {
        // Dashboard
        Route::get('dashboard', [
            CandidateDashboardController::class,
            'index',
        ])->name('candidate.dashboard');
    });

/*
|--------------------------------------------------------------------------
| Web Profile
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name(
        'profile.edit'
    );
    Route::patch('/profile', [ProfileController::class, 'update'])->name(
        'profile.update'
    );
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name(
        'profile.destroy'
    );
});

require __DIR__ . '/auth.php';

route::get('get-states/{country_id}', [
    LocationController::class,
    'getStates',
])->name('get-states');

route::get('get-cities/{state_id}', [
    LocationController::class,
    'getCities',
])->name('get-cities');
