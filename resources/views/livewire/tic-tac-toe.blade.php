<div class="flex justify-center">
    <div class="p-4">
        <p class="text-xl">
            Matriz:
        </p>
        <div class="grid grid-cols-3 gap-4 my-6">
            <div class="grow text-2xl font-bold bg-gray-100 @if($e1 == 1) text-gray-800 @else text-red-600 @endif shadow-md rounded px-16 py-3">@if($e1 == 1) X @else O @endif</div>
            <div class="grow text-2xl font-bold bg-gray-100 @if($e2 == 1) text-gray-800 @else text-red-600 @endif shadow-md rounded px-16 py-3">@if($e2 == 1) X @else O @endif</div>
            <div class="grow text-2xl font-bold bg-gray-100 @if($e3 == 1) text-gray-800 @else text-red-600 @endif shadow-md rounded px-16 py-3">@if($e3 == 1) X @else O @endif</div>
            <div class="grow text-2xl font-bold bg-gray-100 @if($e4 == 1) text-gray-800 @else text-red-600 @endif shadow-md rounded px-16 py-3">@if($e4 == 1) X @else O @endif</div>
            <div class="grow text-2xl font-bold bg-gray-100 @if($e5 == 1) text-gray-800 @else text-red-600 @endif shadow-md rounded px-16 py-3">@if($e5 == 1) X @else O @endif</div>
            <div class="grow text-2xl font-bold bg-gray-100 @if($e6 == 1) text-gray-800 @else text-red-600 @endif shadow-md rounded px-16 py-3">@if($e6 == 1) X @else O @endif</div>
            <div class="grow text-2xl font-bold bg-gray-100 @if($e7 == 1) text-gray-800 @else text-red-600 @endif shadow-md rounded px-16 py-3">@if($e7 == 1) X @else O @endif</div>
            <div class="grow text-2xl font-bold bg-gray-100 @if($e8 == 1) text-gray-800 @else text-red-600 @endif shadow-md rounded px-16 py-3">@if($e8 == 1) X @else O @endif</div>
            <div class="grow text-2xl font-bold bg-gray-100 @if($e9 == 1) text-gray-800 @else text-red-600 @endif shadow-md rounded px-16 py-3">@if($e9 == 1) X @else O @endif</div>
        </div>

        <p class="text-xl">
            Resultado: {{ $salida }}
        </p>
    </div>
</div>
