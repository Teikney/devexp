<?php

namespace App\View\Components;

use App\Models\Workspace;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class WorkspaceDropdown extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $workspaces = Workspace::all();
        // dd($workspaces);
        // $workspaces = Collection::make(Workspace::all());
        // ddd(Workspace::all()->take(30));
        return view('components.workspace-dropdown' , [
            'workspaces' => $workspaces,
            // 'currentWorkspace' => Workspace::firstWhere('code',request('workspace'))
        ] );
    }
}
