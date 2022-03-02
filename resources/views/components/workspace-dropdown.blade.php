<select name="workspace" id="workspaces" class="mt-1 py-2 px-3 block rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" value="{{ request('workspace') }}">
    @foreach ($workspaces as $workspace)
        @if($workspace->institution->type->id == 1)
            <option value="{{ $workspace->id }}" class="block text-left text-sm leading-6 hover:bg-blue-300 focus:bg-blue-300 hover:text-white focus:text-white">
                {{ $workspace->name . ' - ' . $workspace->unit->name }}
            </option>
            {{-- @if($workspace->institution->type->id == 2) --}}
        @elseif ($workspace->institution->type->id == 2)
            <option value="{{ $workspace->id }}" class="block text-left text-sm leading-6 hover:bg-blue-300 focus:bg-blue-300 hover:text-white focus:text-white">
                {{ $workspace->institution->type->initials . ' '. $workspace->institution->county->name . ' - ' . $workspace->unit->initials . ' ' . ucwords($workspace->name) }}
            </option>
        @endif
    @endforeach
</select>

