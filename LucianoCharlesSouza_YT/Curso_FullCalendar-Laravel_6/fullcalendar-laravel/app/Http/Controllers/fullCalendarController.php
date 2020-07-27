<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fullCalendarController extends Controller
{
    public function index()
    {
        return view('fullcalendar.principal');
    }
}
