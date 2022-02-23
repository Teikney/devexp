<?php

namespace App\Http\Controllers;

use App\Models\Workspace;

class DashController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
}
