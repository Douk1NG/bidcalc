<?php

use App\Http\Controllers\BidCalculationToolController;
use Illuminate\Support\Facades\Route;

Route::get('/bid', [BidCalculationToolController::class, 'index']);
