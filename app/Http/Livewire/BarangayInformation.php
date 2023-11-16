<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BarangayInformation extends Component
{
    public function render()
    {
        $dataLists = [];
        return view('livewire.barangay-information', compact('dataLists'));
    }
}
