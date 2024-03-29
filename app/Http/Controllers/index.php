<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class index extends Controller
{
    public function index()
    {
        $response = Http::get('bmapi.loc/api/cars');

        $names = json_decode($response);
        $years = json_decode($response);

        /* foreach ($names as $name) {
            echo $name->name;
        } */

        return view('index', ['names' => $names], ['years' => $years]);
    }
}