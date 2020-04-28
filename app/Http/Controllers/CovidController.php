<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class CovidController extends Controller
{
    public function index ()
    {
        $data = [];
        $url = 'https://koronavirus.gov.hu';
        $client = new Client();
        $crawler = $client->request('GET', $url);
        $data = $crawler->filter('.diagram-a > .number')->each(function ($node) {
            return str_replace(' ', '', $node->text());
        });

        return view('covid.index', compact('data'));
    }
}
