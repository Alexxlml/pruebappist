<div>
    <div class="grid grid-cols-3 gap-4 my-4">
        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(1)"class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
            1
            </button>
        </div>
        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(2)"class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
            2 ABC
            </button>
        </div>
        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(3)"class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
            3 DEF
            </button>
        </div>
        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(4)"class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
            4 GHI
            </button>
        </div>
        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(5)"class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
            5 JKL
            </button>
        </div>
        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(6)"class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
            6 MNO
            </button>
        </div>
        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(7)"class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
            7 PQRS
            </button>
        </div>
        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(8)"class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
            8 TUV
            </button>
        </div>
        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(9)"class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
            9 WXYZ
            </button>
        </div>

        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(10)"class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
            *
            </button>
        </div>

        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(11)"class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
            0 +
            </button>
        </div>
        <div class="flex justify-center mx-12 cursor-pointer">
            <button wire:click="clicks(12)"class="grow bg-slate-800 text-gray-50 shadow-md rounded px-16 py-3 hover:scale-110 focus:outline-none focus:ring focus:ring-blue-500 focus:bg-blue-900">
            #</button>
        </div>
    </div>

    <section>
        <div>
            <p>
            numero anterior: 
            {{ $numero_anterior}}
            </p>
            <p>
            temp: 
            {{ $temp }}
            </p>
            <p>
            numero actual: 
            {{ $numero_actual }}
            </p>
            <p>
            contador: 
            {{ $contador }}
            </p>
            <p>
            repeticion: 
            @if($repeticion == false)
                Falso
            @else
                Cierto
            @endif
            </p>
        </div>
    </section>
</div>
