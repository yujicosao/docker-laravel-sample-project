<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use GuzzleHttp\Client;
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
        $latest_weather = Weather::orderBy('id', 'desc')->get();
        if ($currentdate->addHours(-1) > $latest_weather[0]->created_at) {
            // 既存の最新データをdbから削除
            Weather::query()->delete();
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

            // 取得した天気情報をdbに保存
            $weather = new Weather();
            $weather->text = $weather_text;
            $weather->image = $weather_image;
            $weather->body = $weather_body;
            $weather->save();

            // 取得した天気情報をviewに渡すために連想配列に挿入
            $weather_info = [
                'weather_text' => $weather_text,
                'weather_image' => $weather_image,
                'weather_body' => $weather_body
            ];
        } else {
            //dbにある最新の天気情報を取得
            $weather_info = [
                'weather_text' => $latest_weather[0]->text,
                'weather_image' => $latest_weather[0]->image,
                'weather_body' => $latest_weather[0]->body
            ];
        }
        return $weather_info;
    }
}
