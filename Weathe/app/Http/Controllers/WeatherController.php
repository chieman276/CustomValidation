<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    function index()
    {

        $response = Http::get('https://api.openweathermap.org/data/2.5/weather', [

            "q" => "HaNam",

            "appid" => "02e3323f29bc461c2346db2fe3989729"

        ]);

        $data = json_decode($response->body());

        $currentTime = time();

        return view('weather', compact('data', 'currentTime'));
    }
}
