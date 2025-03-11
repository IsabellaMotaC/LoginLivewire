<?php

use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class)->name('login');

Route::get('/admin', function(){
    return 'login admin';
})->middleware(['auth', 'role:admin'])->name('admin.dashboard');

Route::get('/user', function(){
    return 'login user';
})->middleware(['auth', 'role:user'])->name('user.dashboard');