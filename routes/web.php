<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CountryStateCityController;


Route::get('country-state-city', [CountryStateCityController::class, 'index']);
Route::post('get-states-by-country', [CountryStateCityController::class, 'getState']);
Route::post('get-cities-by-state', [CountryStateCityController::class, 'getCity']);
