<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $results = User::filter(['search']);
        if($results->count() == 0) {
            return back()->with('error','Não foram encontrados resultados para a pesquisa pretendida.');
        }

        return view('users.index', [
            'users' => User::latest()->sortable()->paginate(10)->withQueryString()
        ]);
    }

    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }

}
