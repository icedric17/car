<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends DashboardController
{
    public function index()
    {
        return view('dashboard');
    }
}
