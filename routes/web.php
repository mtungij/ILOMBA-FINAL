<?php

use App\Livewire\Pages\Members;
use App\Livewire\Pages\Users;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('users', Users::class)
    ->middleware(['auth'])
    ->name('users');

Route::view('admins','livewire.customers')
    ->middleware(['auth'])
    ->name('admins');


    Route::get('members',Members::class)
    ->middleware(['auth'])
    ->name('members');

require __DIR__.'/auth.php';
