<div>
    <div class="col-md-6">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Sorry!</strong> invalid input.<br><br>
                <ul style="list-style-type:none;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if($updateMode)
            @include('livewire.link-update')
        @else
            @include('livewire.link-create')
        @endif

        <x-jet-section-border />

        <table class="min-w-full bg-white mt-8">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">id</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">key</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">url</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm"></th>
                </tr>
            </thead>
            
            <tbody class="text-gray-700">
                @foreach($data as $row)
                    <tr>
                        <td class="text-left py-3 px-4">{{$row->id}}</td>
                        <td class="text-left py-3 px-4">{{$row->key}}</td>
                        <td class="text-left py-3 px-4">{{$row->url}}</td>
                        <td class="text-left py-3 px-4">
                            <button wire:click="edit({{$row->id}})" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Edit</button> | 
                            <button wire:click="destroy({{$row->id}})" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>