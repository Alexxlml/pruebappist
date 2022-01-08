<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TecladoNumerico extends Component
{

    public $entrada = "", $entrada_final, $salida = "", $salidaArray;
    public $numero_actual = 0, $numero_anterior = 0, $contador = 0, $repeticion = false;
    public $temp = 0;
    public $switch = false;

    public $tiempo = 0, $tiempo_inicial = 0, $tiempo_final = 0;

    public function mount()
    {
        $this->salidaArray = collect([]);
    }

    public function render()
    {
        return view('livewire.teclado-numerico');
    }

    public function revisarTiempo()
    {
        if ($this->tiempo_inicial == 0) {
        } else {
            $this->tiempo_final = microtime(true);
            $this->tiempo = round($this->tiempo_final - $this->tiempo_inicial);
        }

        if ($this->tiempo == 1) {
            $this->tiempo_inicial = 0;
            $this->tiempo = 0;
            $this->entrada_final .= $this->entrada;
            $this->entrada = "";
            $this->switch = false;
            $arraytmp = "[" . strval($this->numero_actual) . "," . strval($this->contador) . "]";
            $this->salidaArray->push($arraytmp);
            $this->salida = $this->salidaArray->all();
            $this->resetVariables();
        } else {
        }
    }

    public function clicks($numero)
    {
        $this->tiempo = 0;
        $this->tiempo_inicial = microtime(true);
        $this->switch = true;
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

        $this->casosLetras($this->numero_actual, $this->contador);
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

    public function casosLetras($numero, $letra)
    {
        switch ($numero) {
            case 1:
                $letra == 1 ? $this->entrada = ' ' : ($letra == 2 ? $this->entrada = '1' : '');
                $letra > 2 ? $this->resetVariables() : '';
                break;
            case 2:
                $letra == 1 ?  $this->entrada = 'A'  : ($letra == 2 ? $this->entrada = 'B'  : ($letra == 3 ? $this->entrada = 'C'  : ($letra == 4 ? $this->entrada = '2'  : ''
                )));
                $letra > 4 ? $this->resetVariables() : '';
                break;
            case 3:
                $letra == 1 ?  $this->entrada = 'D'  : ($letra == 2 ? $this->entrada = 'E'  : ($letra == 3 ? $this->entrada = 'F'  : ($letra == 4 ? $this->entrada = '3'  : ''
                )));
                $letra > 4 ? $this->resetVariables() : '';
                break;
            case 4:
                $letra == 1 ?  $this->entrada = 'G'  : ($letra == 2 ? $this->entrada = 'H'  : ($letra == 3 ? $this->entrada = 'I'  : ($letra == 4 ? $this->entrada = '4'  : ''
                )));
                $letra > 4 ? $this->resetVariables() : '';
                break;
            case 5:
                $letra == 1 ?  $this->entrada = 'J'  : ($letra == 2 ? $this->entrada = 'K'  : ($letra == 3 ? $this->entrada = 'L'  : ($letra == 4 ? $this->entrada = '5'  : ''
                )));
                $letra > 4 ? $this->resetVariables() : '';
                break;
            case 6:
                $letra == 1 ?  $this->entrada = 'M'  : ($letra == 2 ? $this->entrada = 'N'  : ($letra == 3 ? $this->entrada = 'O'  : ($letra == 4 ? $this->entrada = '6'  : ''
                )));
                $letra > 4 ? $this->resetVariables() : '';
                break;
            case 7:
                $letra == 1 ?  $this->entrada = 'P'  : ($letra == 2 ? $this->entrada = 'Q'  : ($letra == 3 ? $this->entrada = 'R'  : ($letra == 4 ? $this->entrada = 'S'  : ($letra == 5 ? $this->entrada = '7'  : '')
                )));
                $letra > 5 ? $this->resetVariables() : '';
                break;
            case 8:
                $letra == 1 ?  $this->entrada = 'T'  : ($letra == 2 ? $this->entrada = 'U'  : ($letra == 3 ? $this->entrada = 'V'  : ($letra == 4 ? $this->entrada = '8'  : ''
                )));
                $letra > 4 ? $this->resetVariables() : '';
                break;
            case 9:
                $letra == 1 ?  $this->entrada = 'W'  : ($letra == 2 ? $this->entrada = 'X'  : ($letra == 3 ? $this->entrada = 'Y'  : ($letra == 4 ? $this->entrada = 'Z'  : ($letra == 5 ? $this->entrada = '9'  : '')
                )));
                $letra > 5 ? $this->resetVariables() : '';
                break;
            case 10:
                $letra == 1 ? $this->entrada = '*' : '';
                break;
            case 11:
                $letra == 1 ? $this->entrada = '0' : ($letra == 2 ? $this->entrada = '+' : '');
                $letra > 2 ? $this->resetVariables() : '';
                break;
            case 12:
                $letra == 1 ? $this->entrada = '#' : '';
                break;

            default:

                break;
        }
    }

    public function resetVariables()
    {
        $this->numero_actual = 0;
        $this->numero_anterior = 0;
        $this->contador = 0;
        $this->repeticion = false;
        $this->temp = 0;
    }

    public function limpiar()
    {
        $this->resetVariables();
        $this->salida = "";
        $this->salidaArray = collect([]);
        $this->entrada = "";
        $this->entrada_final = "";
    }
}
