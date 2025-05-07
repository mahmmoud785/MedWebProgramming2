<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class StarWarsController extends Controller
{
    public function index()
    {
       
        $client = new Client();

       
        $response = $client->get('https://swapi.dev/api/people/1/'); 
        $data = json_decode($response->getBody()->getContents(), true);

        
        return response()->json($data);
    }
}