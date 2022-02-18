<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index()
    {
        return view('dashboard.index',[
            'institutions' => Institution::paginate(10)->withQueryString()
        ]);
    }


}
