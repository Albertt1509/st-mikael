<div class="">
    <div class="">
        <img src="{{ asset('images/slide2.jpg') }}" class="w-full h-full " alt="Image Description">
    </div>
    <div class="bg-white">
        <div class="relative flex min-h-screen flex-col items-center justify-center">
            <h1 class="text-3xl font-bold mb-4 border-t-2 border-b-2 border-black py-2">HIGHLIGHTS</h1>
            <div class="carousel scrollbar-hide flex w-full snap-x snap-mandatory gap-3 overflow-x-scroll scroll-smooth">
                @foreach ($imageHomes as $index => $imageHome)
                    @foreach ($imageHome->gambar as $img)
                        <div
                            class="relative flex aspect-[1/1] shrink-0 snap-start snap-always rounded-xl bg-gray-200 w-full md:w-[calc(33.33%-(32px/3))]">
                            <img src="{{ Storage::url($img) }}" alt="{{ $imageHome->judul }}"
                                class="absolute inset-0 w-full h-full object-cover rounded-xl">
                            <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                                <div class="text-2xl font-bold text-white">{{ $imageHome->judul }}</div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>

            <div class="pagination my-4 flex gap-2">
                @for ($i = 0; $i < count($imageHomes); $i++)
                    <span class=" ease-out duration-300 "></span>
                @endfor
            </div>
        </div>
    </div>

    <div class="relative w-full h-96 overflow-hidden">
        <div class="absolute inset-0 bg-fixed bg-center bg-cover"
            style="background-image: url('{{ asset('images/slide1.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-30"></div> <!-- Optional overlay for contrast -->
        </div>
        <div class="relative z-10 flex items-center justify-center h-full">
            <div class="text-center px-4 sm:px-6 lg:px-8 p-6 rounded text-white">
                <h1 class="font-bold text-4xl">Gereja Katolik Semarang Indah</h1>
                <p class="text-center text-xl pt-3">
                    Gereja Santo Mikael merupakan bagian dari Keuskupan Agung Semarang dan aktif dalam kegiatan pastoral
                    yang mencakup pengembangan pendidikan, misi, dan kegiatan sosial. Kami berkomitmen untuk mendukung
                    jemaat dalam kehidupan spiritual mereka dan berperan aktif dalam komunitas
                </p>
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row justify-center items-center w-full p-6 bg-gray-100">
        <div class="w-full md:w-1/2 p-4">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-4xl font-bold text-center text-blue-600 mb-4">Visi</h2>
                <p class="text-gray-700 text-lg text-center">
                    Menjadi komunitas yang hidup, dinamis, dan saling mendukung dalam iman kepada Kristus
                </p>
            </div>
        </div>
        <div class="w-full md:w-1/2 p-4">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-4xl font-bold text-center text-blue-600 mb-4">Misi</h2>
                <ul class="list-disc list-inside text-gray-700 text-lg">
                    <p class="text-gray-700 text-lg text-center">
                        Mengembangkan iman umat melalui kegiatan-kegiatan
                        pastoral dan spiritual yang
                        melibatkan seluruh anggota komunitas
                    </p>
                </ul>
            </div>
        </div>
    </div>
    <section class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
            <div class="max-w-2xl lg:max-w-4xl mx-auto text-center">
                <h1 class="mt-4 text-4xl text-gray-500">Gereja Katolik Santo Mikael Semarang Indah</h1>
            </div>
            <div class="mt-16 lg:mt-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="rounded-lg overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11672.945750644447!2d110.3942127!3d-6.967845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f4c688e49321%3A0x9de8f11997aba1fe!2sGereja%20Katolik%20Santo%20Mikael%20Semarang%20Indah!5e0!3m2!1sen!2sid!4v1692494694010!5m2!1sen!2sid"
                            width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div>
                        <div class="max-w-full mx-auto rounded-lg overflow-hidden">
                            <div class="px-6 py-4">
                                <h3 class="text-lg font-medium text-gray-900">Alamat Kami</h3>
                                <p class="mt-1 text-gray-600">Semarang Indah Blok C2 No:19, Semarang, Jawa Tengah,
                                    Indonesia</p>
                            </div>
                            <div class="border-t border-gray-200 px-6 py-4">
                                <h3 class="text-lg font-medium text-gray-900">Jam Operasional</h3>
                                <p class="mt-1 text-gray-600">Senin - Jumat: 9 pagi - 5 sore</p>
                                <p class="mt-1 text-gray-600">Sabtu: 10 pagi - 4 sore</p>
                                <p class="mt-1 text-gray-600">Minggu: Tutup</p>
                            </div>
                            <div class="border-t border-gray-200 px-6 py-4">
                                <h3 class="text-lg font-medium text-gray-900">Kontak</h3>
                                <p class="mt-1 text-gray-600">Email: semarangindah@kas.id​</p>
                                <p class="mt-1 text-gray-600">Telepon: (024) 7622904</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <h1 class="text-center font-bold text-4xl mb-8 text-gray-800">Misa Online</h1>
    <div class="flex flex-wrap justify-center items-center gap-8 pb-6">
        @foreach ($jadwals as $jadwal)
            <div class="bg-white shadow-lg rounded-lg p-4">
                <h2 class="text-center text-2xl font-semibold text-gray-700 mb-4">{{ $jadwal->stream }}</h2>
                <div class="w-[350px] h-[250px]">
                    <iframe class="w-full h-full rounded-lg" src="https://www.youtube.com/embed/{{ $jadwal->url }}"
                        frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script>
    const container = document.querySelector('.carousel');
    const slides = document.querySelectorAll('.carousel > div');
    const dots = document.querySelectorAll('.pagination > span');
    const totalSlidesCount = slides.length;

    const slideWidth = slides[0].offsetWidth;
    let currentSlideIndex = 0;

    // Fungsi untuk mengganti slide
    function changeSlide() {
        currentSlideIndex = (currentSlideIndex + 1) % totalSlidesCount; // Kembali ke awal jika sudah di slide terakhir
        container.scrollTo({
            left: currentSlideIndex * slideWidth,
            behavior: 'smooth'
        });
        updateActiveDot(currentSlideIndex);
    }

    // Memperbarui titik aktif
    function updateActiveDot(centerSlideIndex) {
        dots.forEach((dot) => dot.classList.remove('w-8'));
        dots[centerSlideIndex].classList.add('w-8');
    }

    // Mengupdate index titik aktif pada awal
    updateActiveDot(currentSlideIndex);

    // Interval untuk mengganti slide setiap 3 detik
    setInterval(changeSlide, 3000);

    // Menangani swipe untuk mobile
    let touchStartX = 0;
    let touchEndX = 0;

    container.addEventListener('touchstart', (event) => {
        touchStartX = event.touches[0].clientX;
    });

    container.addEventListener('touchmove', (event) => {
        touchEndX = event.touches[0].clientX;
    });

    container.addEventListener('touchend', () => {
        if (touchStartX - touchEndX > 50) {
            changeSlide(); // Geser ke kanan
        } else if (touchEndX - touchStartX > 50) {
            currentSlideIndex = (currentSlideIndex - 1 + totalSlidesCount) % totalSlidesCount; // Geser ke kiri
            container.scrollTo({
                left: currentSlideIndex * slideWidth,
                behavior: 'smooth'
            });
            updateActiveDot(currentSlideIndex);
        }
    });
</script>
