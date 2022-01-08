<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class AutocompletarNombre extends Component
{
    public $archivos, $cadena = "", $tmpList, $test;

    public function mount()
    {
        $this->archivos = collect([]);
        $this->getNombreArchivos();
    }

    public function render()
    {
        return view('livewire.autocompletar-nombre');
    }

    public function getNombreArchivos()
    {
        $files = Storage::files('public/images');

        foreach ($files as $key => $value) {
            $tmpString = substr($value, 14);
            $this->archivos->push($tmpString);
        }
    }

    public function updatedCadena($cadena)
    {
        $cadena == "" ? $this->tmpList = collect([]) : $this->listGif();
    }

    public function listGif()
    {
        $this->tmpList = collect([]);
        $this->archivos->each(function ($item, $key) {
            str_contains($item, $this->cadena) ? $this->tmpList->push($item) : '';
        });
    }
}
