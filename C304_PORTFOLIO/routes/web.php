<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\mainController;

route::get('/', [mainController::class, 'index']);
route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
route::get('/register', [AuthController::class, 'performRegister'])->name('register');
route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
route::get('/login', [AuthController::class, 'performLogin'])->name('login');