<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
    	return view('homepage');
    }

    public function about()
    {
    	return view('about_us');
    }

    public function admin()
    {
    	return view('templates.admin_');
    }
}
