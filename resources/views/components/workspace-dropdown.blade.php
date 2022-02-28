
<select name="workspaces" id="workspaces" class=" mt-1 block text-sm text-gray-700 w-full">
    @foreach ($workspaces as $workspace)
        <option value="{{ $workspace->id }}" class="block text-left px-3 text-sm leading-6 hover:bg-blue-300 focus:bg-blue-300 hover:text-white focus:text-white"> {{ $workspace->code }}</option>
    @endforeach
</select>
