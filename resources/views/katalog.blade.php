<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Katalog Produk - {{ $judulHalaman }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite('resources/css/app.css')
    @vite('resources/css/satoshi.css')
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

<body class="font-sans antialiased text-gray-900" x-data="{ mobileMenuOpen: false }">
    <nav class="bg-gradient-to-r from-pink-600 to-rose-500 shadow-lg z-50" x-data="{ isOpen: false, cartOpen: false }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-24 items-center justify-between">
                <!-- Logo and Navigation -->
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="#" class="flex items-center">
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
                                class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-pink-700 transition duration-300">Beranda</a>
                            <a href="/katalog"
                                class="rounded-md px-3 py-2 text-sm font-medium text-white bg-pink-700 transition duration-300 hover:bg-pink-800">Katalog</a>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-whatsapp" viewBox="0 0 16 16">
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
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                <a href="#"
                    class="block px-3 py-2 rounded-md text-base font-medium text-white bg-pink-800">Beranda</a>
                <a href="#"
                    class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-pink-800">Katalog</a>
                <a href="#"
                    class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-pink-800">Koleksi
                    Terbaru</a>
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

    <!-- Main Content -->
    <main class="min-h-screen bg-gray-50 py-8">
        <div class="mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row gap-8">
                <!-- Sidebar Kategori - Desktop -->
                <aside class="hidden md:block w-full md:w-80 flex-shrink-0">
                    <div class="bg-white rounded-xl border border-gray-200 p-6 shadow-sm sticky top-24">
                        <h2 class="text-xl font-bold mb-6 text-gray-800 flex items-center">
                            <i class="fas fa-list-ul mr-2 text-blue-600"></i>
                            Kategori
                        </h2>
                        <div class="space-y-2">
                            <!-- Kategori Semua Barang -->
                            <a href="?kategori=all"
                                class="flex items-center p-3 rounded-lg hover:bg-blue-50 group transition-colors duration-200 <?= $kategoriAktif === 'all' ? 'bg-blue-50' : '' ?>">
                                <div
                                    class="p-2 rounded-lg bg-blue-100 text-blue-600 mr-3 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-200">
                                    <i class="fas fa-box w-5 h-5"></i>
                                </div>
                                <span class="font-medium text-gray-700 group-hover:text-blue-600">Semua Barang</span>
                                <span
                                    class="ml-auto bg-gray-100 text-gray-600 text-xs font-medium px-2.5 py-0.5 rounded-full group-hover:bg-blue-100 group-hover:text-blue-800">
                                    <?= App\Models\Barang::count() ?>
                                </span>
                            </a>

                            <!-- Kategori Unggulan -->
                            <a href="?kategori=unggulan"
                                class="flex items-center p-3 rounded-lg hover:bg-green-50 group transition-colors duration-200 <?= $kategoriAktif === 'unggulan' ? 'bg-green-50' : '' ?>">
                                <div
                                    class="p-2 rounded-lg bg-green-100 text-green-600 mr-3 group-hover:bg-green-600 group-hover:text-white transition-colors duration-200">
                                    <i class="fas fa-star w-5 h-5"></i>
                                </div>
                                <span class="font-medium text-gray-700 group-hover:text-green-600">Produk
                                    Unggulan</span>
                                <span
                                    class="ml-auto bg-gray-100 text-gray-600 text-xs font-medium px-2.5 py-0.5 rounded-full group-hover:bg-green-100 group-hover:text-green-800">
                                    <?= App\Models\Barang::where('unggulan', true)->count() ?>
                                </span>
                            </a>

                            <!-- Daftar Kategori Lainnya -->
                            <?php
                            $colors = ['purple', 'pink', 'indigo', 'teal', 'yellow', 'red'];
                            $icons = ['tshirt', 'socks', 'hat-cowboy', 'scarf', 'mitten', 'shoe-prints'];
                            ?>

                            <?php foreach ($kategoris as $index => $kategori): 
                                $color = $colors[$index % count($colors)];
                                $icon = $icons[$index % count($icons)];
                            ?>
                            <a href="?kategori=<?= $kategori->id ?>"
                                class="flex items-center p-3 rounded-lg hover:bg-<?= $color ?>-50 group transition-colors duration-200 <?= $kategoriAktif == $kategori->id ? 'bg-' . $color . '-50' : '' ?>">
                                <div
                                    class="p-2 rounded-lg bg-<?= $color ?>-100 text-<?= $color ?>-600 mr-3 group-hover:bg-<?= $color ?>-600 group-hover:text-white transition-colors duration-200">
                                    <i class="fas fa-<?= $icon ?> w-5 h-5"></i>
                                </div>
                                <span
                                    class="font-medium text-gray-700 group-hover:text-<?= $color ?>-600"><?= $kategori->nama ?></span>
                                <span
                                    class="ml-auto bg-gray-100 text-gray-600 text-xs font-medium px-2.5 py-0.5 rounded-full group-hover:bg-<?= $color ?>-100 group-hover:text-<?= $color ?>-800">
                                    <?= $kategori->barang_count ?>
                                </span>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </aside>

                <!-- Daftar Produk -->
                <div class="w-full">
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6"><?= $judulHalaman ?></h1>

                    <?php if ($barang->count() > 0): ?>
                    <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-6">
                        <?php foreach ($barang as $item): ?>
                        <div
                            class="group relative flex flex-col overflow-hidden rounded-xl border border-gray-100 bg-white shadow-sm transition-shadow duration-300 hover:shadow-lg">
                            <div class="aspect-square bg-gray-50 p-4">
                                <?php if ($item->gambar): ?>
                                <img src="<?= asset('storage/' . $item->gambar) ?>" alt="<?= $item->nama ?>"
                                    class="h-full w-full object-contain object-center transition-transform duration-300 group-hover:scale-105" />
                                <?php else: ?>
                                <div class="h-full w-full flex items-center justify-center bg-gray-100 text-gray-400">
                                    <i class="fas fa-image fa-3x"></i>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="flex flex-1 flex-col p-4">
                                <h3 class="text-base font-semibold text-gray-800 mb-1">
                                    <a href="<?= route('barang.show', $item->id) ?>"
                                        class="hover:text-pink-600 transition-colors">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        <?= $item->nama ?>
                                    </a>
                                </h3>
                                <?php if ($item->kategori): ?>
                                <p class="text-sm text-gray-500 mb-2"><?= $item->kategori->nama ?></p>
                                <?php endif; ?>
                                <div class="mt-auto flex items-center justify-between pt-2">
                                    <p class="text-lg font-bold text-gray-900">{{ $item->harga }}</p>
                                    <a href="<?= route('barang.show', $item->id) ?>"
                                        class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-pink-600 hover:bg-pink-50 rounded-full transition-colors duration-200">
                                        Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-8">
                        <?= $barang->withQueryString()->links() ?>
                    </div>
                    <?php else: ?>
                    <div class="text-center py-12 bg-white rounded-xl border border-gray-200">
                        <i class="fas fa-box-open text-4xl text-gray-300 mb-3"></i>
                        <p class="text-gray-600">Belum ada produk yang tersedia</p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>

    <!-- Floating Category Button for Mobile -->
    <div class="fixed bottom-6 right-6 z-50 md:hidden">
        <button type="button"
            class="p-4 bg-pink-600 text-white rounded-full shadow-lg hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2"
            onclick="document.getElementById('mobile-categories').classList.toggle('translate-x-0')">
            <i class="fas fa-filter text-xl"></i>
        </button>
    </div>

    <!-- Mobile Categories Drawer -->
    <div id="mobile-categories"
        class="fixed top-0 left-0 z-50 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80">
        <div class="flex justify-between items-center mb-6">
            <h5 class="text-xl font-semibold text-gray-900">Kategori</h5>
            <button type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex items-center"
                onclick="document.getElementById('mobile-categories').classList.toggle('translate-x-0')">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="space-y-2">
            <!-- Kategori Semua Barang -->
            <a href="?kategori=all"
                class="flex items-center p-3 rounded-lg hover:bg-blue-50 group transition-colors duration-200 <?= $kategoriAktif === 'all' ? 'bg-blue-50' : '' ?>"
                onclick="document.getElementById('mobile-categories').classList.add('-translate-x-full')">
                <div
                    class="p-2 rounded-lg bg-blue-100 text-blue-600 mr-3 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-200">
                    <i class="fas fa-box w-5 h-5"></i>
                </div>
                <span class="font-medium text-gray-700 group-hover:text-blue-600">Semua Barang</span>
                <span
                    class="ml-auto bg-gray-100 text-gray-600 text-xs font-medium px-2.5 py-0.5 rounded-full group-hover:bg-blue-100 group-hover:text-blue-800">
                    <?= App\Models\Barang::count() ?>
                </span>
            </a>

            <!-- Kategori Unggulan -->
            <a href="?kategori=unggulan"
                class="flex items-center p-3 rounded-lg hover:bg-green-50 group transition-colors duration-200 <?= $kategoriAktif === 'unggulan' ? 'bg-green-50' : '' ?>"
                onclick="document.getElementById('mobile-categories').classList.add('-translate-x-full')">
                <div
                    class="p-2 rounded-lg bg-green-100 text-green-600 mr-3 group-hover:bg-green-600 group-hover:text-white transition-colors duration-200">
                    <i class="fas fa-star w-5 h-5"></i>
                </div>
                <span class="font-medium text-gray-700 group-hover:text-green-600">Produk Unggulan</span>
                <span
                    class="ml-auto bg-gray-100 text-gray-600 text-xs font-medium px-2.5 py-0.5 rounded-full group-hover:bg-green-100 group-hover:text-green-800">
                    <?= App\Models\Barang::where('unggulan', true)->count() ?>
                </span>
            </a>

            <!-- Daftar Kategori Lainnya -->
            <?php
            $colors = ['purple', 'pink', 'indigo', 'teal', 'yellow', 'red'];
            $icons = ['tshirt', 'socks', 'hat-cowboy', 'scarf', 'mitten', 'shoe-prints'];
            ?>

            <?php foreach ($kategoris as $index => $kategori): 
                $color = $colors[$index % count($colors)];
                $icon = $icons[$index % count($icons)];
            ?>
            <a href="?kategori=<?= $kategori->id ?>"
                class="flex items-center p-3 rounded-lg hover:bg-<?= $color ?>-50 group transition-colors duration-200 <?= $kategoriAktif == $kategori->id ? 'bg-' . $color . '-50' : '' ?>"
                onclick="document.getElementById('mobile-categories').classList.add('-translate-x-full')">
                <div
                    class="p-2 rounded-lg bg-<?= $color ?>-100 text-<?= $color ?>-600 mr-3 group-hover:bg-<?= $color ?>-600 group-hover:text-white transition-colors duration-200">
                    <i class="fas fa-<?= $icon ?> w-5 h-5"></i>
                </div>
                <span
                    class="font-medium text-gray-700 group-hover:text-<?= $color ?>-600"><?= $kategori->nama ?></span>
                <span
                    class="ml-auto bg-gray-100 text-gray-600 text-xs font-medium px-2.5 py-0.5 rounded-full group-hover:bg-<?= $color ?>-100 group-hover:text-<?= $color ?>-800">
                    <?= $kategori->barang_count ?>
                </span>
            </a>
            <?php endforeach; ?>
        </div>
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
                                Produk</a>
                        </li>
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
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>
