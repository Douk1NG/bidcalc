<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BidCalculationToolController;

Route::get('/bid', [BidCalculationToolController::class, 'index']);


