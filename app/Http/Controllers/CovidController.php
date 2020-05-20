<?php

namespace App\Http\Controllers;

//use Goutte\Client;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class CovidController extends Controller
{
    public function index ()
    {
        $data = ['1654', '1371', '0', '131429'];
        //$url = 'https://koronavirus.gov.hu';
        //$client = new Client();
        //$crawler = $client->request('GET', $url);
        //$data = $crawler->filter('.diagram-a > .number')->each(function ($node) {
            //return str_replace(' ', '', $node->text());
        //});

        return view('covid.index', compact('data'));
    }

    public function sendAMessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        \Mail::to('info@covidvirusteszt.hu')
            ->send(new \App\Mail\ContactMail($request->all()));

        return back()->with('message', 'Sikeres üzenet küldés!');
    }
}
