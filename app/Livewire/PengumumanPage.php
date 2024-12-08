<?php

namespace App\Livewire;
use App\Models\Berita;
use Livewire\Component;
use Carbon\Carbon;
use Livewire\WithPagination;

class PengumumanPage extends Component
{
    public $search;
    use WithPagination;

    public function searchUpdated()
    {
        $this->resetPage();
    }
    public function render()
    {
        
        $beritas = Berita::orderBy('created_at', 'desc')
            ->when($this->search, function($query) {
                $query->where(function($q) {
                    $q->where('judul', 'like', '%' . $this->search . '%')
                      ->orWhere('deskripsi', 'like', '%' . $this->search . '%');
                });
            })
            ->take(3)
            ->get()
            ->map(function($berita) {
                $berita->created_at = Carbon::parse($berita->created_at)->format('H:i');
                return $berita;
            });

        return view('livewire.pengumuman-page', [
            'beritas' => $beritas
        ]);
    }
}
