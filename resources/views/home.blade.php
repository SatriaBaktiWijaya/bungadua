<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
    @vite('resources/css/satoshi.css')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body {
            font-family: 'Satoshi', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .font-bold {
            font-weight: 800;
        }
    </style>

</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-gradient-to-r from-pink-600 to-rose-500 shadow-lg z-50" x-data="{ isOpen: false, cartOpen: false }">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-24 items-center justify-between">
                    <!-- Logo and Navigation -->
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <a href="/" class="flex items-center">
                                <svg class="h-10 w-10 text-white" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2L3 9l9 7 9-7-9-7z" />
                                    <path d="M12 22l9-7-9-7-9 7 9 7z" />
                                </svg>
                                <span class="ml-2 text-2xl font-bold text-white">Bunga Collection</span>
                            </a>
                        </div>
                        <div class="hidden md:ml-10 md:block">
                            <div class="flex space-x-4">
                                <a href="/"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-white bg-pink-700 transition duration-300 hover:bg-pink-800">Beranda</a>
                                <a href="/katalog"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-pink-700 transition duration-300">Katalog</a>
                            </div>
                        </div>
                    </div>

                    <!-- Right side elements -->
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6 space-x-4">


                            <a href="https://wa.me/6281390112566?text=Halo,%20saya%20ingin%20bertanya%20layanan%20Anda.%20Bisakah%20saya%20mendapatkan%20info%20lebih%20lanjut?"
                                target="_blank"
                                class="flex items-center gap-2 bg-white text-pink-600 px-4 py-2 rounded-full font-medium hover:bg-gray-100 transition duration-300">
                                <span class="hidden sm:inline">Tanya Via WhatsApp</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="-mr-2 flex md:hidden">
                        <button @click="isOpen = !isOpen" type="button"
                            class="inline-flex items-center justify-center p-2 rounded-md text-white hover:bg-pink-700 focus:outline-none">
                            <span class="sr-only">Open main menu</span>
                            <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12H4L5 9z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu -->
            <div x-show="isOpen" @click.away="isOpen = false" class="md:hidden bg-pink-700">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <a href="/"
                        class="block px-3 py-2 rounded-md text-base font-medium text-white bg-pink-800">Beranda</a>
                    <a href="/katalog"
                        class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-pink-800">Katalog</a>

                </div>
                <div class="pt-4 pb-3 border-t border-pink-800">
                    <div class="flex items-center px-5 space-x-4">
                        <a href="#"
                            class="flex-1 flex items-center justify-center gap-2 bg-white text-pink-600 px-4 py-2 rounded-full font-medium hover:bg-gray-100 transition duration-300">
                            <span>Tanya Via WhatsApp</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path
                                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg>
                        </a>

                    </div>
                </div>
            </div>
        </nav>
        <main>
            <div id="default-carousel" class="relative mx-auto" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-68 overflow-hidden md:h-150">
                    <!-- Item 1 -->
                    @foreach ($banner as $banners)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ Storage::url($banners->image) }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 lg:max-w-5xl lg:rounded-3xl"
                                alt="...">
                        </div>
                    @endforeach
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    @foreach ($banner as $banners)
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="{{ $banners->id }}"></button>
                    @endforeach
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
            <div class="h-20"></div>
            <div class="mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl mb-2 md:text-4xl font-bold text-gray-900 dark:text-white">
                    Produk Unggulan 🛍️
                </h1>
                <span class="text-base md:text-lg text-gray-600 dark:text-white">
                    Berbagai produk unggulan dari kami
                </span>
                <div class="grid grid-cols-2 gap-x-4 gap-y-6 mt-5 sm:grid-cols-2 lg:grid-cols-4 lg:gap-x-6">
                    @foreach ($barangUnggulan as $barang)
                        <div
                            class="group relative flex flex-col overflow-hidden rounded-xl border border-gray-100 bg-white shadow-sm transition-shadow duration-300 hover:shadow-lg">
                            <div class="aspect-square bg-gray-50 p-4">
                                <img src="{{ Storage::url($barang->gambar) }}" alt="{{ $barang->nama }}"
                                    class="h-full w-full object-contain object-center transition-transform duration-300 group-hover:scale-105" />
                            </div>
                            <div class="flex flex-1 flex-col space-y-2 p-4">
                                <h3 class="text-base font-semibold text-gray-800">
                                    <a href="{{ route('barang.show', $barang->id) }}"
                                        class="hover:text-pink-600 transition-colors duration-200">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{ $barang->nama }}
                                    </a>
                                </h3>
                                <p class="text-sm text-gray-500">{{ $barang->kategori->nama ?? 'Tanpa Kategori' }}</p>
                                <div class="flex items-center justify-between pt-2">
                                    <p class="text-lg font-bold text-gray-900">{{ $barang->harga }}</p>
                                    <a href="{{ route('barang.show', $barang->id) }}"
                                        class="hidden md:inline-flex items-center px-3 py-1.5 text-sm font-medium text-pink-600 hover:bg-pink-50 rounded-full transition-colors duration-200">
                                        Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="h-20"></div>
            <div class="mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl mb-2 md:text-4xl font-bold text-gray-900 dark:text-white">
                    Produk Paling Baru 😋
                </h1>
                <span class="text-base md:text-lg text-gray-600 dark:text-white">
                    Berbagai produk unggulan dari kami
                </span>
                <div class="grid grid-cols-2 gap-x-4 gap-y-6 mt-5 sm:grid-cols-2 lg:grid-cols-4 lg:gap-x-6">
                    @foreach ($barangUnggulan as $barang)
                        <div
                            class="group relative flex flex-col overflow-hidden rounded-xl border border-gray-100 bg-white shadow-sm transition-shadow duration-300 hover:shadow-lg">
                            <div class="aspect-square bg-gray-50 p-4">
                                <img src="{{ Storage::url($barang->gambar) }}" alt="{{ $barang->nama }}"
                                    class="h-full w-full object-contain object-center transition-transform duration-300 group-hover:scale-105" />
                            </div>
                            <div class="flex flex-1 flex-col space-y-2 p-4">
                                <h3 class="text-base font-semibold text-gray-800">
                                    <a href="{{ route('barang.show', $barang->id) }}"
                                        class="hover:text-pink-600 transition-colors duration-200">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{ $barang->nama }}
                                    </a>
                                </h3>
                                <p class="text-sm text-gray-500">{{ $barang->kategori->nama ?? 'Tanpa Kategori' }}</p>
                                <div class="flex items-center justify-between pt-2">
                                    <p class="text-lg font-bold text-gray-900">{{ $barang->harga }}</p>
                                    <a href="{{ route('barang.show', $barang->id) }}"
                                        class="hidden md:inline-flex items-center px-3 py-1.5 text-sm font-medium text-pink-600 hover:bg-pink-50 rounded-full transition-colors duration-200">
                                        Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </main>
    </div>
    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Tentang Kami</h3>
                    <p class="text-gray-600">Toko online terpercaya untuk kebutuhan fashion Anda dengan kualitas
                        terbaik dan harga terjangkau.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-600 hover:text-pink-600 transition-colors">Beranda</a>
                        </li>
                        <li><a href="/katalog" class="text-gray-600 hover:text-pink-600 transition-colors">Katalog
                                Produk</a></li>

                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Hubungi Kami</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-600">
                            <a href="https://maps.app.goo.gl/zMBrF3hEoHTpD5HS8" target="_blank"> <i
                                    class="fas fa-map-marker-alt mr-2 text-pink-600"></i>
                                <span>Jl. Anggrek No.7 Perum Bumi Nusantara 1, Banjarnegoro, Mertoyudan, Kab.
                                    Magelang</span></a>

                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-phone-alt mr-2 text-pink-600"></i>
                            <span>+62 856 4317 147</span>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-200 mt-8 pt-8 text-center text-gray-500 text-sm">
                <p>&copy; <?= date('Y') ?> Bunga Collection. Website by <a
                        href="https://www.instagram.com/satria.build/" target="_blank">Satria 🫐</a></p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>


</html>
