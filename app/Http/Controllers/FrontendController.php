<?php

namespace App\Http\Controllers;

class FrontendController extends Controller
{
    public function index()
    {

        return view('frontend.app');
    }

    public function data()
    {
    }
}
