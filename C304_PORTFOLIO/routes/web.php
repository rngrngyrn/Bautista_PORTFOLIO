<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\mainController;

route::get('/', [mainController::class, 'index']);
route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
