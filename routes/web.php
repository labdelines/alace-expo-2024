<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::get('/admin', function () {
    return redirect(app()->getLocale() . '/admin');
});

Route::group(
    [
        'prefix' => '{locale}',
        'where' => ['locale' => '[a-zA-Z]{2}'],
        'middleware' => 'setLocale'
    ],
    function () {
        Route::controller(HomeController::class)->group(function () {
            Route::get('/', 'HomeMain')->name('home');
            Route::get('/expo', 'Expo')->name('expo');
            Route::get('/congress-forum', 'congressForum')->name('congress-forum');
            Route::get('/unlock', 'unLock')->name('unlock');
            Route::get('/contact', 'conTact')->name('contact');
            Route::get('/expo-fact-sheet', 'expoFactSheet')->name('expo-fact-sheet');
            Route::get('/them-design', 'themDesign')->name('them-design');
            Route::get('/sponsorship-package', 'sponsorshipPackage')->name('sponsorship-package');
            Route::get('/zoning-design', 'zoningDesign')->name('zoning-design');
            Route::get('/siminar-workshop', 'siminarWorkShop')->name('siminar-workshop');
            Route::get('/compitition', 'compitition')->name('compitition');
        });

        // Admin All Route 
        Route::middleware(['auth'])->group(function () {
            Route::controller(AdminController::class)->group(function () {
                Route::get('/admin/logout', 'destroy')->name('admin.logout');
                Route::get('/admin/profile', 'Profile')->name('admin.profile');
                Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
                Route::post('/store/profile', 'StoreProfile')->name('store.profile');
                Route::get('/change/password', 'ChangePassword')->name('change.password');
                Route::post('/update/password', 'UpdatePassword')->name('update.password');
            });
        });

        Route::get('/admin', function () {
            return view('admin.index');
        })->middleware(['auth'])->name('dashboard');
    },

);

require __DIR__ . '/auth.php';
