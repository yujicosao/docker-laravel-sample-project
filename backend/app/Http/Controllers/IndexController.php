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

        $posts = $response->getBody();
        $posts = json_decode($posts, true);
        $wheather_text = $posts['forecasts'][0]['image']['title'];
        $wheather_image = $posts['forecasts'][0]['image']['url'];
        $wheather_body = $posts['description']['text'];
        $wheather_info = [
            'wheather_text' => $wheather_text,
            'wheather_image' => $wheather_image,
            'wheather_body' => $wheather_body
        ];
        logger($wheather_info);
        return view('index', ['wheather_info' => $wheather_info]);
    }
}
