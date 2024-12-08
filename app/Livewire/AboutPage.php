<?php

namespace App\Livewire;

use App\Models\Jadwal;
use App\Models\Donasi;
use App\Models\Event;
use App\Models\Berita;
use Livewire\Component;
use Carbon\Carbon;

class AboutPage extends Component
{
    public function render()
    {
        $jadwals = Jadwal::all()->map(function ($jadwal) {
            $jadwal->waktu = Carbon::parse($jadwal->waktu)->format('H:i');
            return $jadwal;
        });

        $donasis = Donasi::all();

        $events = Event::all()->map(function($event){
            $event->waktu_mulai = Carbon::parse($event->waktu_mulai)->format('H:i');
            $event->waktu_selesai = Carbon::parse($event->waktu_selesai)->format('H:i');
            return $event;
        });
           $beritas = Berita::orderBy('created_at', 'desc')->take(3)->get()->map(function($berita){
            $berita->created_at = Carbon::parse($berita->created_at)->format('H:i');
            return $berita;
        });
  
          return view('livewire.about-page', [
              'jadwals' => $jadwals,
              'events' => $events, 
              'donasis' => $donasis, 
              'beritas' => $beritas, 
          ]);
        
    }
}

