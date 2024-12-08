<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Berita;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PengumumanDetail extends Component
{
    public $pengumuman;
    public $berita;

    public function mount($id)
    {
        // Ambil produk berdasarkan ID
        $this->pengumuman = $id;

        try {
            $this->berita = Berita::findOrFail($id);
            // Format created_at untuk berita
            $this->berita->created_at = Carbon::parse($this->berita->created_at)->format('Y-m-d');
        } catch (ModelNotFoundException $e) {
            // Tindakan ketika berita tidak ditemukan, misalnya redirect atau pesan error
            return redirect()->route('pengumuman')->with('error', 'Berita tidak ditemukan');
        }
    }

    public function render()
    {
        // Ambil 3 berita terbaru
        $beritas = Berita::orderBy('created_at', 'desc')->take(3)->get()->map(function ($berita) {
            $berita->created_at = Carbon::parse($berita->created_at)->format('H:i');
            return $berita;
        });

        return view('livewire.pengumuman-detail', [
            'beritas' => $beritas,
            'pengumuman' => $this->pengumuman
        ]);
    }
}
