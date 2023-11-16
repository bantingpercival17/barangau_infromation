<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Material extends Component
{
    public $name;
    public $type;
    public $unit;
    public $quantity;
    public function render()
    {
        return view('livewire.material');
    }
}
