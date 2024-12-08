<div class="bg-[#dcdcdc]">
    <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <!-- Judul Pengumuman -->
        <h1 class="text-xl text-center font-bold text-gray-700 sm:text-2xl lg:text-4xl lg:leading-tight mb-6">
            Pengumuman Gereja Katolik Semarang Indah
        </h1>

        <!-- Main Content -->
        <main class="pt-8 lg:pt-16 bg-white antialiased rounded-lg">
            <div class="flex flex-wrap justify-between px-4 mx-auto max-w-screen-xl">
                <div class="mb-8 w-full flex flex-col justify-between h-full">
                    <div>
                        <h2 class="text-lg font-bold">{{ $berita->judul }}</h2>
                        <p class="text-gray-500 flex justify-end">{{ $berita->created_at }}</p>
                        <p class="text-gray-600">{{ $berita->deskripsi }}</p>
                    </div>

                    @if (count($berita->gambar) > 1)
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-12">
                            @foreach ($berita->gambar as $index => $img)
                                @if ($index > 0)
                                    <!-- Menghindari gambar dengan indeks 0 -->
                                    <img src="{{ Storage::url($img) }}"
                                        class="rounded-lg w-full h-64 object-cover cursor-pointer"
                                        alt="Gambar {{ $berita->judul }}"
                                        onclick="openModal('{{ Storage::url($img) }}')">
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </main>

        <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 hidden flex justify-center items-center z-50">
            <span class="absolute top-4 right-4 text-white cursor-pointer" onclick="closeModal()">&times;</span>
            <img id="modalImage" src="" class="max-w-full max-h-full" alt="Zoomed Image">
        </div>

        <aside aria-label="Related articles" class="py-8 lg:py-24 bg-gray-50 dark:bg-gray-800">
            <div class="px-4 mx-auto max-w-screen-xl">
                <h2 class="mb-8 text-center text-2xl font-bold text-gray-900 dark:text-white">
                    Pengumuman Lainnya
                </h2>
                <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($beritas as $beritaLain)
                        <!-- Menggunakan variabel berbeda untuk berita lainnya -->
                        <article class="max-w-xs">
                            <!-- Gambar Pengumuman -->
                            <a href="{{ route('pengumuman.detail', ['id' => $beritaLain->id]) }}">
                                @if (isset($beritaLain->gambar[0]))
                                    <img src="{{ Storage::url($beritaLain->gambar[0]) }}" class="mb-5 rounded-lg"
                                        alt="Gambar {{ $beritaLain->judul }}">
                                @endif
                            </a>

                            <!-- Judul dan Deskripsi Pengumuman -->
                            <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                                <a
                                    href="{{ route('pengumuman.detail', ['id' => $beritaLain->id]) }}">{{ $beritaLain->judul }}</a>
                            </h2>
                            <p class="mb-4 text-gray-500 dark:text-gray-400">
                                {{ \Illuminate\Support\Str::limit($beritaLain->deskripsi, 100, '...') }}
                            </p>
                        </article>
                    @endforeach
                </div>
            </div>
        </aside>
    </div>
</div>

<script>
    function openModal(imageSrc) {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        modalImage.src = imageSrc;
        modal.classList.remove('hidden');
    }

    function closeModal() {
        const modal = document.getElementById('imageModal');
        modal.classList.add('hidden'); // Sembunyikan modal
    }
</script>
