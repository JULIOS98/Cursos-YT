<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{

    public function index()
    {
        return view('blog.main');
    }

    public function about()
    {
        return view('blog.about');
    }

    public function contacto()
    {
        return view('blog.contacto');
    }
}
