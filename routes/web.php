<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/settings', \App\Livewire\Settings\ThemeManager::class)->name('settings');
    Route::get('/products', \App\Livewire\Product\Index::class)->name('products.index');
    Route::get('/dashboard', function () {
        $user = auth()->user();

        return match ($user->role) {
            'factory' => redirect()->route('factory.dashboard'),
            'retailer' => redirect()->route('retailer.dashboard'),
            'admin' => redirect()->route('admin.dashboard'),
        };
    })->name('dashboard');

    Route::get('/factory', \App\Livewire\Factory\Dashboard::class)->name('factory.dashboard');
    Route::get('/retailer', \App\Livewire\Retailer\Dashboard::class)->name('retailer.dashboard');
    Route::get('/admin', \App\Livewire\Admin\Dashboard::class)->name('admin.dashboard');
});

require __DIR__.'/auth.php';