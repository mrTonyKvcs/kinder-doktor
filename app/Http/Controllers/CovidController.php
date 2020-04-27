<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CovidController extends Controller
{
    public function index ()
    {
        $client = new \GuzzleHttp\Client();
        dd($client);
        //$response = $client->request('GET', 'https://api.instagram.com/v1/users/self/media/recent/', ['query' => [
        //'access_token'  => '8185877104.1677ed0.3e53841b9025452486577408a753a48b'

        //$posts = collect(json_decode($response->getBody())->data);

        dd($client);
        return view('covid.index');
    }
}
