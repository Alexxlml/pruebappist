<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TicTacToe extends Component
{
    public $entrada, $salida;
    public $e1, $e2, $e3, $e4, $e5, $e6, $e7, $e8, $e9;
    public $winp1 = false, $winp2 = false;

    public function mount()
    {
        $this->entrada = collect([
            [1, 2, 0],
            [1, 2, 1],
            [1, 2, 1]
        ]);
        
        $this->checkCollection();
        $this->checkWin();
    }

    public function render()
    {
        return view('livewire.tic-tac-toe');
    }

    public function checkCollection()
    {
        foreach ($this->entrada as $key => $value) {
            if ($key == 0) {
                foreach ($value as $key2 => $value2) {
                    $key2 == 0 ? $this->e1 = $value2 : ($key2 == 1 ? $this->e2 = $value2 : ($key2 == 2 ? $this->e3 = $value2 : ''));
                }
            } elseif ($key == 1) {
                foreach ($value as $key2 => $value2) {
                    $key2 == 0 ? $this->e4 = $value2 : ($key2 == 1 ? $this->e5 = $value2 : ($key2 == 2 ? $this->e6 = $value2 : ''));
                }
            } elseif ($key == 2) {
                foreach ($value as $key2 => $value2) {
                    $key2 == 0 ? $this->e7 = $value2 : ($key2 == 1 ? $this->e8 = $value2 : ($key2 == 2 ? $this->e9 = $value2 : ''));
                }
            }
        }
    }

    public function checkWin()
    {
        $this->checkP1();
        $this->checkP2();
        $this->caseWin();
    }

    public function checkP1()
    {
        /* De arriba a abajo horizontal */
        if ($this->e1== 1 && $this->e2 == 1 && $this->e3 == 1) {
            $this->winp1 = true;
        } elseif ($this->e4== 1 && $this->e5 == 1 && $this->e6 == 1) {
            $this->winp1 = true;
        } elseif ($this->e7== 1 && $this->e8 == 1 && $this->e9 == 1) {
            $this->winp1 = true;
        }
        /* De izquierda a derecha vertical */ elseif ($this->e1== 1 && $this->e4 == 1 && $this->e7 == 1) {
            $this->winp1 = true;
        } elseif ($this->e2== 1 && $this->e5 == 1 && $this->e8 == 1) {
            $this->winp1 = true;
        } elseif ($this->e3== 1 && $this->e6 == 1 && $this->e9 == 1) {
            $this->winp1 = true;
        }
        /* Diagonales */ elseif (
            $this->e1 == 1 && $this->e5 == 1 && $this->e9 == 1
        ) {
            $this->winp1 = true;
        } elseif ($this->e3 == 1 && $this->e5 == 1 && $this->e7 == 1) {
            $this->winp1 = true;
        } else {
            $this->winp1 = false;
        }
    }

    public function checkP2()
    {
        /* De arriba a abajo horizontal */
        if ($this->e1== 2 && $this->e2 == 2 && $this->e3 == 2) {
            $this->winp2 = true;
        } elseif ($this->e4== 2 && $this->e5 == 2 && $this->e6 == 2) {
            $this->winp2 = true;
        } elseif ($this->e7== 2 && $this->e8 == 2 && $this->e9 == 2) {
            $this->winp2 = true;
        }
        /* De izquierda a derecha vertical */ elseif ($this->e1== 2 && $this->e4 == 2 && $this->e7 == 2) {
            $this->winp2 = true;
        } elseif ($this->e2== 2 && $this->e5 == 2 && $this->e8 == 2) {
            $this->winp2 = true;
        } elseif ($this->e3== 2 && $this->e6 == 2 && $this->e9 == 2) {
            $this->winp2 = true;
        }
        /* Diagonales */ elseif (
            $this->e1 == 2 && $this->e5 == 2 && $this->e9 == 2
        ) {
            $this->winp2 = true;
        } elseif ($this->e3 == 2 && $this-> e5 == 2 && $this->e7 == 2) {
            $this->winp2 = true;
        } else {
            $this->winp2 = false;
        }
    }

    public function caseWin()
    {
        /* dd($this->winp1, $this->winp2); */
        $i = 0;
        if ($this->winp1 == true && $this->winp2 == true) {
            $i = 3;
        } elseif($this->winp1 != true && $this->winp2 != true) {
            $i = 4;
        } elseif ($this->winp1 == true && $this->winp2 == false) {
            $i = 1;
        } elseif ($this->winp1 == false && $this->winp2 == true) {
            $i = 2;
        }

        switch ($i) {
            case 1:
                $this->salida = "Gana jugador 1";
                break;
            case 2:
                $this->salida = "Gana jugador 2";
                break;
            case 3:
                $this->salida = "Empate";
                break;
            case 4:
                $this->salida = "Empate";
                break;
            default:
            $this->salida = "Kha?";
                break;
        }
    }
}
