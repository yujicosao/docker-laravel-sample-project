<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class IndexController extends Controller
{
    public function index()
    {
        $url = "https://weather.tsukumijima.net/api/forecast/city/130010";
        $method = "GET";

        $client = new Client();

        $response = $client->request($method, $url);

        $response = $response->getBody();
        $response = json_decode($response, true);
        $weather_text = $response['forecasts'][0]['image']['title'];
        $weather_image = $response['forecasts'][0]['image']['url'];
        $weather_body = $response['description']['text'];
        $weather_info = [
            'weather_text' => $weather_text,
            'weather_image' => $weather_image,
            'weather_body' => $weather_body
        ];
        return view('index', ['weather_info' => $weather_info]);
    }
}
