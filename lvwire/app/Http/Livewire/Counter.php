<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 0;

    public function increase()

    {
         $this->count++;
    }

    public function decrease()
    {
        if ($this->count !=0){
            $this->count--;
        }
    }
    
    public function render()
    {
        return view('livewire.counter');
    }
}
