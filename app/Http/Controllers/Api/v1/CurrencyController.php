<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CurrencyController extends Controller
{
    public function getCryptocurrencies(Request $request)
    {
        $limit = $request->input('limit', 25);
        $jsonData = $this->fetchCryptocurrencyData($limit);

        if (!isset($jsonData)) {
            return response()->json([
                'status'=> 'error',
                'message'=> 'Unable to retrieve data',
            ], 404);
        }

        $cryptoData = collect($jsonData)->map(function ($coin) {
            return $this->formatCryptocurrencyData($coin);
        });

        return response()->json($cryptoData);
    }

    private function fetchCryptocurrencyData($limit)
    {
        $headers = [
            'X-API-KEY' => env('API_KEY'),
            'accept' => 'application/json',
        ];

        $response = Http::withHeaders($headers)
            ->withQueryParameters(['limit' => $limit])
            ->get(env('API_BASE_URL'));

        return $response->json()['result'];
    }

    private function formatCryptocurrencyData($coin)
    {
        $name = $coin['name'];
        $image = $coin['icon'];
        $price = number_format(floatval($coin['price']), 2);
        $percent = number_format(floatval($coin['priceChange1d']), 2);
        $priceUp = $percent >= 0;
        $marketCapital = number_format($coin['marketCap'], 0, '.', ',');

        return [
            'name' => $name,
            'image' => $image,
            'price' => $price,
            'percent' => $percent,
            'marketCapital' => $marketCapital,
            'priceUp' => $priceUp,
        ];
    }
}
