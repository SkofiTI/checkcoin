<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\CurrencyController;

Route::prefix('v1')->group(function () {
    Route::get('/cryptocurrencies', [CurrencyController::class, 'getCryptocurrencies']);
});