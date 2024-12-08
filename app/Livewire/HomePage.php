<?php

namespace App\Livewire;

use App\Models\Jadwal;
use App\Models\ImageHome;
use App\Models\Berita;
use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        $jadwals = Jadwal::all();
        $imageHomes = ImageHome::all(); 
            return view('livewire.home-page', [
            'jadwals' => $jadwals,
            'imageHomes' => $imageHomes,  
        ]);
    }
}
