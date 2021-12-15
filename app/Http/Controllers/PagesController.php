<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pocetna()
    {
        return view('pocetna');
    }
    public function onama()
    {
        return view('onama');
    }
    public function udomi()
    {
        return view('udomi');
    }

}
