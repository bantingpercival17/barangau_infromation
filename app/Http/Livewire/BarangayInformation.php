<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class BarangayInformation extends Component
{
    public $provinceSelect;
    public $selectMunicipalities;
    public function render()
    {
        $province =  Http::get('https://psgc.gitlab.io/api/provinces/');
        $province = json_decode($province);
        $municipality = [];
        $barangay = [];
        $dataLists = [];
        if ($this->provinceSelect != null) {
            $municipality = Http::get('https://psgc.gitlab.io/api/provinces/' . $this->provinceSelect . '/cities-municipalities');
            $municipality = json_decode($municipality);
            if ($this->selectMunicipalities != null) {
                $barangay = Http::get('https://psgc.gitlab.io/api/cities-municipalities/' . $this->selectMunicipalities . '/barangays');
                $dataLists = json_decode($barangay);
            }
        }

        return view('livewire.barangay-information', compact('dataLists', 'province', 'municipality'));
    }
}
