<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    public function index()
    {
        return view('devices.index', [
            'devices' => Device::latest()->paginate(10)->withQueryString()
        ]);
    }
}
