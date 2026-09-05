<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('home', [
            'nama' => 'Kamal Zaky Adinata',
            'nrp' => '5025241153',
        ]);
    }
}