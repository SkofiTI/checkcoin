<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/all-currency', function () {
    $responseApi = Http::get('cbr.ru/scripts/XML_daily.asp');

    $xml = simplexml_load_string($responseApi->getBody());
    $json = json_encode($xml);
    $jsonData = json_decode($json, true);

    $valueArray = $jsonData['Valute'];
    
    foreach ($valueArray as $value) {
        $currencyName = $value['Name'];
        $currencyValue = $value['Value'];

        echo "Валюта: $currencyName, Значение: $currencyValue <br>";
    }
});

Route::get('/all-crypto', function () {
    $responseApi = Http::get('api.coincap.io/v2/assets');
    $jsonData = $responseApi->json();

    $valueArray = $jsonData['data'];

    foreach ($valueArray as $value) {
        $currencyName = $value['name'];
        $currencyValue = $value['priceUsd'];

        echo "Валюта: $currencyName, Значение: $currencyValue <br>";
    }
});