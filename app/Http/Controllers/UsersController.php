<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => User::latest()->paginate(10)->withQueryString()
        ]);
    }

    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }

}
