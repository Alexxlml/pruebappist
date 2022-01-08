<div class="flex flex-col justify-center p-4">
    <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Nombre del archivo</label>
        <div class="mt-1">
            <input wire:model="cadena" type="email" name="email" id="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">

        </div>
    </div>

    <div class="flex flex-col justify-center bg-slate-200 shadow-lg rounded">
        @if($tmpList)
            @foreach($tmpList as $key => $nombre)
            <p class="mx-4">
                {{ $nombre }}
            </p>
            @endforeach
        @else
            
        @endif
    </div>
</div>
