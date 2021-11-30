<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Light extends Component
{
    // On va créer un attribut $brightness et lui donner la valeur de 10 (cette attribut va être accessible depuis notre vue light.blade.php) 
    public $brightness = 50;
    public $shadow = 10;

    public function off()
    {
        $this->brightness = 0;
        $this->shadow = $this->brightness / 5;
    }

    public function on()
    {
        $this->brightness = 100;
        $this->shadow = $this->brightness / 5;
    }

    public function plus()
    {
        if ($this->brightness <= 90) {
            $this->brightness += 10 ;
            $this->shadow = $this->brightness / 5;
        }
        // on peut limiter la valeur maximum avec une autre méthode: 
        // $this->brightness = min(100, $this->brightness + 10) //on prend la plus petite valeur entre 100 et 10
        
    }

    public function moins()
    {
        if ($this->brightness >= 10) {
            $this->brightness -= 10 ;
            $this->shadow = $this->brightness / 5;
        }
    }

    public function render()
    {
        return view('livewire.light');
    }
}
