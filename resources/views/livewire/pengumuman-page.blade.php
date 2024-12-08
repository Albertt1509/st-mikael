<div class="bg-[#dcdcdc]">
    <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <h1 class="text-xl text-center font-bold text-gray-700 sm:text-2xl lg:text-4xl lg:leading-tight mb-6">
            Lihat Lebih Dekat!!!
        </h1>
        <div class="px-3 py-2 flex justify-end pb-5">
            <input type="text"
                class="border-0 border-b-2 border-black bg-[#dcdcdc] focus:outline-none focus:border-black placeholder-gray-500"
                placeholder="Search" wire:model.debounce.500ms="search">
            <button type="submit" wire:click="searchUpdated" class="ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </button>
        </div>

        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($beritas as $berita)
                <div class="bg-white rounded-lg shadow-md">
                    <!-- Ubah href untuk menggunakan route detail pengumuman -->
                    <a href="{{ route('pengumuman.detail', ['id' => $berita->id]) }}">
                        @if (isset($berita->gambar[0]))
                            <!-- Tampilkan gambar pertama jika ada -->
                            <img class="w-full h-48 object-cover" src="{{ Storage::url($berita->gambar[0]) }}"
                                alt="Berita {{ $berita->judul }}">
                        @endif
                    </a>
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $berita->judul }}</h2>
                        <p class="text-gray-600 mb-4">
                            {{ \Illuminate\Support\Str::limit($berita->deskripsi, 100, '...') }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
