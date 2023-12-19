<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class StarkController extends Controller
{
    public function fetchData(Request $request)
    {
        $domain = $request->input('coinowo.stark');
        $url = "https://api.starknet.id/domain_to_data?domain={$domain}";

        $client = new Client();
        $response = $client->get($url);

        $data = json_decode($response->getBody(), true);
    }
}
