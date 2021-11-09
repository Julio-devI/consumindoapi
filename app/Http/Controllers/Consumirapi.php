<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Consumirapi extends Controller
{

    public function index()
    {
        $response = Http::get('bmapi.loc/api/cars');

        dd($response->body());

        return view('api');
    }
}