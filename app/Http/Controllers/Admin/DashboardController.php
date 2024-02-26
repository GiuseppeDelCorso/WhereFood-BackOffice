<?php

namespace App\Http\Controllers\Admin; // era "App\Http\Controllers"
use App\Http\Controllers\Controller; // Controller di base da importare

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
