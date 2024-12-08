<div class="bg-[#dcdcdc]">
    <div class="w-full max-w-[85rem]  py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <h1 class="text-3xl font-bold text-gray-700 sm:text-4xl lg:text-5xl lg:leading-tight mb-6">
            Jadwal Misa Gereja
        </h1>
        <div class="grid md:grid-cols-2 gap-8 xl:gap-20 rounded-lg ">
            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Jadwal Misa Mingguan</h2>
                <ul class="space-y-4">
                    @foreach ($jadwals as $jadwal)
                        <li class="flex justify-between items-center border-b border-gray-200 pb-3">
                            <span class="font-medium text-gray-600">Misa Harian</span>
                            <span class="text-gray-500">{{ $jadwal->hari }} </span>
                            <span class="text-gray-500">{{ $jadwal->waktu }} WIB</span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Acara Perayaan</h2>
                <ul class="space-y-4">
                    @foreach ($events as $event)
                        <li class="flex justify-between items-center border-b border-gray-200 pb-3">
                            <span class="font-medium text-gray-600">{{ $event->nama_acara }}</span>
                            <span class="font-medium text-gray-600">{{ $event->keterangan }}</span>
                            <span class="text-gray-500">{{ $event->waktu_mulai }} WIB -
                                {{ $event->waktu_selesai }} WIB</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="pt-12">
            <h1 class="text-3xl font-bold text-gray-700 sm:text-4xl lg:text-5xl lg:leading-tight mb-6">
                Donasi
            </h1>
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <p class="text-lg text-gray-600 mb-6">
                    Dukungan Anda sangat berarti bagi keberlanjutan pelayanan dan kegiatan gereja kami. Anda dapat
                    memberikan donasi melalui rekening berikut atau secara online melalui tombol di bawah ini.
                </p>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md border border-gray-200 mb-8">
                    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Informasi Rekening</h2>
                    @foreach ($donasis as $donasi)
                        <p class="text-gray-600 mb-2"><strong>Bank:</strong> {{ $donasi->bank }}</p>
                        <p class="text-gray-600 mb-2"><strong>No. Rekening:</strong>{{ $donasi->no_rekening }}</p>
                        <p class="text-gray-600"><strong>Atas Nama:</strong>{{ $donasi->atas_nama }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
