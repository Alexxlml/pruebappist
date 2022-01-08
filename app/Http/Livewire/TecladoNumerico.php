<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TecladoNumerico extends Component
{

    public $texto;
    public $numero_actual = 0, $numero_anterior = 0, $contador = 0, $repeticion = false;
    public $temp = 0;

    public function mount()
    {
    }

    public function render()
    {
        return view('livewire.teclado-numerico');
    }

    public function clicks($numero)
    {
        if ($this->temp != 0) {
            $this->numero_anterior = $this->temp;
        }

        $this->numero_actual = $numero;

        if ($this->numero_anterior == 0 && $this->temp == 0 && $this->numero_actual > 0 && $this->contador == 0 && $this->repeticion == false) {
            $this->casosClicks(1);
        } elseif ($this->numero_anterior > 0 && $this->temp != $this->numero_actual && $this->numero_actual > 0 && $this->contador > 0 && $this->repeticion == false) {
            $this->casosClicks(2);
        } elseif ($this->numero_anterior > 0 && $this->temp != $this->numero_actual && $this->numero_actual > 0 && $this->contador > 0 && $this->repeticion == false) {
            $this->casosClicks(2);
        } elseif ($this->numero_anterior > 0 && $this->temp > 0 && $this->numero_actual > 0 && $this->contador > 0 && $this->repeticion == false) {
            $this->casosClicks(3);
        } elseif ($this->numero_anterior != $this->numero_actual && $this->temp != $this->numero_actual && $this->repeticion == true) {
            $this->casosClicks(2);
        } elseif ($this->numero_anterior > 0 && $this->temp > 0 && $this->numero_actual > 0 && $this->contador > 0 && $this->repeticion == true) {
            $this->casosClicks(1);
        }

        $this->temp = $this->numero_actual;
    }

    public function casosClicks($i)
    {
        switch ($i) {
            case 1:
                $this->contador++;
                break;
            case 2:
                $this->contador = 0;
                $this->contador++;
                $this->repeticion = false;
                break;
            case 3:
                $this->contador++;
                $this->repeticion = true;
                break;

            default:

                break;
        }
    }

    public function resetVariables(){
     $this->numero_actual = 0;
     $this->numero_anterior = 0;
     $this->contador = 0;
     $this->repeticion = false;
     $this->temp = 0;
    }
}
