<div class="p-2">
    <div class="flex justify-end">
        <button wire:click="limpiar" type="button" class="inline-flex items-center px-2 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
            Limpiar
        </button>
    </div>

    <div class="mx-12 my-6">
        <label for="email" class="block text-sm font-medium text-gray-700">Entrada</label>
        <div class="mt-1">
            <input wire:poll.1000ms="revisarTiempo" @if($switch==false) wire:model="entrada_final" @else wire:model="entrada" @endif disabled type="email" name="email" id="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
        </div>
    </div>

    <div class="mx-12 my-6">
        <label for="email" class="block text-sm font-medium text-gray-700">Salida</label>
        <div class="mt-1">
            <input wire:model="salida" type="email" name="email" id="email" disabled class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
        </div>
    </div>



    <div class="grid grid-cols-3 gap-4 my-4">
        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(1)" class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
                1
            </button>
        </div>
        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(2)" class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
                2 ABC
            </button>
        </div>
        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(3)" class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
                3 DEF
            </button>
        </div>
        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(4)" class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
                4 GHI
            </button>
        </div>
        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(5)" class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
                5 JKL
            </button>
        </div>
        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(6)" class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
                6 MNO
            </button>
        </div>
        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(7)" class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
                7 PQRS
            </button>
        </div>
        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(8)" class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
                8 TUV
            </button>
        </div>
        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(9)" class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
                9 WXYZ
            </button>
        </div>

        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(10)" class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
                *
            </button>
        </div>

        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(11)" class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
                0 +
            </button>
        </div>
        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(12)" class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
                #</button>
        </div>
    </div>
</div>
