<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redis;
use App\Weather;

class IndexController extends Controller
{
    public function index()
    {
        $weather_info = $this->getWeather();

        return view('index', ['weather_info' => $weather_info]);
    }

    private function getWeather()
    {
        // 最後に取得した日付から1時間経過していたら、apiから最新データを取得する
        $currentdate = new Carbon();
        $latest_weather = Redis::command('GET', ['weather_created_at']);
        if ($currentdate->addHours(-1) > $latest_weather) {
            // 外部apiにて天気情報を取得
            $url = "https://weather.tsukumijima.net/api/forecast/city/130010";
            $method = "GET";

            $client = new Client();
            $response = $client->request($method, $url);
            $response = $response->getBody();
            $response = json_decode($response, true);
            $weather_text = $response['forecasts'][0]['image']['title'];
            $weather_image = $response['forecasts'][0]['image']['url'];
            $weather_body = $response['description']['text'];

            Redis::command('SET', ['weather_text', $weather_text]);
            Redis::command('SET', ['weather_image', $weather_image]);
            Redis::command('SET', ['weather_body', $weather_body]);
            Redis::command('SET', ['weather_created_at', $currentdate]);
        }

        //すでにredisにある天気情報もしくは上記if文内で取得した最新天気情報を代入
        $weather_info = [
            'weather_text' => Redis::command('GET', ['weather_text']),
            'weather_image' => Redis::command('GET', ['weather_image']),
            'weather_body' => Redis::command('GET', ['weather_body']),
            'weather_created_at' => Redis::command('GET', ['weather_created_at'])
        ];

        return $weather_info;
    }
}
