<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class IndexController extends Controller
{
    public function index()
    {
        $tag_id = "laravel";

        $url = "https://weather.tsukumijima.net/api/forecast/city/130010";
        $method = "GET";

        $client = new Client();

        $response = $client->request($method, $url);

        $response = $response->getBody();
        $response = json_decode($response, true);
        $wheather_text = $response['forecasts'][0]['image']['title'];
        $wheather_image = $response['forecasts'][0]['image']['url'];
        $wheather_body = $response['description']['text'];
        $wheather_info = [
            'wheather_text' => $wheather_text,
            'wheather_image' => $wheather_image,
            'wheather_body' => $wheather_body
        ];
        return view('index', ['wheather_info' => $wheather_info]);
    }
}
