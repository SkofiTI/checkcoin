<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $baseCurrencies = ['bitcoin', 'tether', 'ethereum', 'litecoin'];
        $data = [];

        foreach ($baseCurrencies as $currency) {
            $jsonData = $this->fetchCurrencyData($currency);

            if (isset($jsonData)) {
                $data[] = $this->formatCurrencyData($jsonData, $currency);
            } else {
                $data[] = [
                    'currency' => $currency,
                    'error' => "Not found $currency",
                ];
            }

        }

        return view('main', compact('data'));
    }

    private function fetchCurrencyData($currency)
    {
        $headers = [
            'X-API-KEY' => env('API_KEY'),
            'accept' => 'application/json',
        ];

        $response = Http::withHeaders($headers)->get(env('API_BASE_URL') . $currency);

        return $response->json();
    }

    private function formatCurrencyData($jsonData, $currency)
    {
        $name = $jsonData['name'];
        $price = number_format(floatval($jsonData['price']), 2);
        $percent = number_format(floatval($jsonData['priceChange1d']), 2);
        $priceUp = $percent >= 0;

        return [
            'currency' => $currency,
            'name' => $name,
            'price' => $price,
            'percent' => $percent,
            'priceUp' => $priceUp,
        ];
    }
}
