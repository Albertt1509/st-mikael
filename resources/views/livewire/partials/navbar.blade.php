<header class="flex z-50 top-0 flex-wrap md:justify-start md:flex-nowrap w-full bg-black text-base py-3 md:py-4">
    <nav class="max-w-[85rem] w-full mx-auto px-4 md:px-6 lg:px-8" aria-label="Global">
        <div class="relative flex items-center justify-between">
            <div class="">
                <a class="flex items-center gap-3 text-white" href="/" aria-label="Brand">
                    <img class="w-16" src={{ asset('images/profile.png') }} alt="">
                    <div class="flex flex-col">
                        <span class="text-xl font-bold">Santo Mikael</span>
                        <p class="text-white mx-auto text-sm">
                            Semarang indah
                        </p>
                    </div>
                </a>
            </div>

            <!-- Hamburger Menu (mobile) -->
            <button id="menu-toggle" class="block md:hidden text-white focus:outline-none z-50">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>

            <!-- Menu Links (Desktop View) -->
            <div id="navbar-collapse-with-animation"
                class="hidden md:flex flex-col md:flex-row md:items-center md:justify-end md:gap-x-8 md:mt-0 md:ps-7 w-full md:w-auto">
                <a wire:navigate
                    class="font-semibold {{ request()->is('/') ? 'text-white' : 'text-gray-500 hover:text-gray-300' }} text-lg"
                    href="/">Home</a>
                <a wire:navigate
                    class="font-semibold {{ request()->is('pengumuman') ? 'text-white' : 'text-gray-500 hover:text-gray-300' }} text-lg"
                    href="/pengumuman">Blog</a>
                <!-- Dropdown Menu -->
                <div class="relative group">
                    <button class="font-semibold text-gray-500 hover:text-gray-300 text-lg">
                        Kegiatan
                    </button>
                    <div
                        class="absolute w-32 mx-auto hidden group-hover:block bg-white text-black shadow-lg rounded-md">
                        <a wire:navigate href="/jadwal" class="block px-4 py-2 text-sm hover:bg-gray-100">Jadwal
                            Misa</a>
                        <a wire:navigate href="/visi-misi" class="block px-4 py-2 text-sm hover:bg-gray-100">Media</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Responsive Menu (Mobile View with Slide Animation) -->
        <div id="mobile-menu"
            class="fixed top-0 left-0 w-64 h-full bg-gray-100 transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden z-40">
            <div class="flex flex-col p-4 gap-4">
                <a wire:navigate class="font-semibold {{ request()->is('/') ? 'text-white' : 'text-gray-700' }} text-lg"
                    href="/">Home</a>
                <a wire:navigate
                    class="font-semibold {{ request()->is('pengumuman') ? 'text-white' : 'text-gray-700' }} text-lg"
                    href="/pengumuman">Blog</a>
                <!-- Mobile Dropdown -->
                <div class="relative">
                    <button class="font-semibold text-gray-500 hover:text-gray-300 text-lg" id="kegiatan-toggle">
                        Kegiatan
                    </button>
                    <div id="kegiatan-dropdown"
                        class="absolute w-32 mx-auto hidden bg-white text-black shadow-lg rounded-md">
                        <a wire:navigate href="/jadwal" class="block px-4 py-2 text-sm hover:bg-gray-100">Jadwal
                            Misa</a>
                        <a wire:navigate href="/visi-misi" class="block px-4 py-2 text-sm hover:bg-gray-100">Media</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Overlay (Background when menu is open) -->
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden md:hidden z-30"></div>
    </nav>
</header>

<script>
    // JavaScript for toggling mobile menu with slide-in animation
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('overlay');

    menuToggle.addEventListener('click', () => {
        if (mobileMenu.classList.contains('-translate-x-full')) {
            // Show menu (Slide-in)
            mobileMenu.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
            overlay.classList.add('block');
        } else {
            // Hide menu (Slide-out)
            mobileMenu.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        }
    });

    // Close the menu when the overlay is clicked
    overlay.addEventListener('click', () => {
        mobileMenu.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });

    // JavaScript for dropdown menu
    const kegiatanToggle = document.getElementById('kegiatan-toggle');
    const kegiatanDropdown = document.getElementById('kegiatan-dropdown');

    kegiatanToggle.addEventListener('click', (event) => {
        event.stopPropagation(); // Mencegah klik dari menutup dropdown
        kegiatanDropdown.classList.toggle('hidden'); // Tampilkan atau sembunyikan dropdown
    });

    // Menutup dropdown jika mengklik di luar dropdown
    document.addEventListener('click', () => {
        kegiatanDropdown.classList.add('hidden'); // Sembunyikan dropdown
    });
</script>
