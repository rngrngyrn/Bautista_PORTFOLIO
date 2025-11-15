<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\mainController;

route::get('/', [mainController::class, 'index']);