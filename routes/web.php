<?php


use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\Route;

Route::get('/', action: App\Livewire\Tamu\Index::class)->name('home');
Route::get('/page-tamu', action: App\Livewire\Tamu\Page::class)->name('page');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
