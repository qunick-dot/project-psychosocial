<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultationController;

Route::post('/check-availability', [ConsultationController::class, 'checkAvailability']);