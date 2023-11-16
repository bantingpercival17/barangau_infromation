<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class BarangayProfile extends Component
{
    public $data;

    public function mount($data)
    {
        $this->data = $data;
    }
    public function render()
    {
        $profile =   Http::get('https://psgc.gitlab.io/api/barangays/' . $this->data);
        #$profile = json_decode($profile, true);
        return view('livewire.barangay-profile', compact('profile'));
    }
}
