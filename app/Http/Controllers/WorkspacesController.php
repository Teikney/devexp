<?php

namespace App\Http\Controllers;

use App\Models\Workspace;

class WorkspacesController extends Controller
{
    public function index()
    {
        $results = Workspace::filter(request(['search']));
        if($results->count() == 0) {
            return back()->with('error','Não foram encontrados resultados para a pesquisa pretendida.');
        }
        return view('workspaces.index',[
            'workspaces' => $results->sortable()->paginate(10)->withQueryString()
        ]);
    }
}
