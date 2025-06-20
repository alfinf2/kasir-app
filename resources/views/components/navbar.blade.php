<nav class="bg-blue-600 text-white shadow-md">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="font-bold text-2xl">Kasir App</a>

                <button id="mobile-menu-button" class="md:hidden rounded-md p-2 hover:bg-white focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>


                <ul class="hidden md:flex space-x-4 font-semibold">
                    <li>
                        <a href="/"
                            class="{{ request()->is('/') ? 'bg-blue-700 text-white' : 'hover:text-amber-200' }} px-3 py-2 rounded-md">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/product"
                            class="{{ request()->is('product') ? 'bg-blue-700 text-white' : 'hover:text-amber-200' }} px-3 py-2 rounded-md">
                            Produk
                        </a>
                    </li>
                    <li>
                        <a href="/transaksi"
                            class="{{ request()->is('transactions*') ? 'bg-blue-700 text-white' : 'hover:text-amber-200' }} px-3 py-2 rounded-md">
                            Transaksi
                        </a>
                    </li>
                    <li>
                        <a href="/laporan"
                            class="{{ request()->is('laporan*') ? 'bg-blue-700 text-white' : 'hover:text-amber-200' }} px-3 py-2 rounded-md">
                            Laporan
                        </a>
                    </li>
                </ul>

                <ul class="hidden md:flex items-center space-x-4 font-semibold">
                    {{-- <li class="relative">
                        <button id="messageButton" class="flex items-center px-3 py-2 hover:text-amber-200">
                            <i class="fas fa-comment"></i>
                            <span
                                class="absolute -top-1 -right-1 bg-red-500 text-xs rounded-full w-5 h-5 flex items-center justify-center">2</span>
                        </button>
                        <div id="messageDropdown"
                            class="hidden absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-lg text-gray-700 z-50">
                            <div class="p-4 border-b">
                                <h3 class="font-semibold text-lg">Pesan</h3>
                            </div>
                            <div class="max-h-96 overflow-y-auto">
                                <a href="#" class="block p-4 hover:bg-gray-50 border-b">
                                    <div class="flex items-start">
                                        <img src="https://ui-avatars.com/api/?name=Admin" alt="Admin"
                                            class="w-10 h-10 rounded-full">
                                        <div class="ml-3">
                                            <p class="font-medium">Admin</p>
                                            <p class="text-sm text-gray-500 truncate">Stok barang sudah diperbarui</p>
                                            <p class="text-xs text-gray-400 mt-1">5 menit yang lalu</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-4 border-t">
                                <a href="#" class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                                    Lihat Semua Pesan
                                </a>
                            </div>
                        </div>
                    </li> --}}
                    <li class="relative">
                        <button id="notificationButton" class="flex items-center px-3 py-2 hover:text-amber-200">
                            <i class="fas fa-bell"></i>
                            <span
                                class="absolute -top-1 -right-1 bg-red-500 text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                        </button>
                        <div id="notificationDropdown"
                            class="hidden absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-lg text-gray-700 z-50">
                            <div class="p-4 border-b">
                                <h3 class="font-semibold text-lg">Notifikasi</h3>
                            </div>
                            <div class="max-h-96 overflow-y-auto">
                                <a href="#" class="block p-4 hover:bg-gray-50 border-b">
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 bg-blue-100 rounded-full p-2">
                                            <i class="fas fa-shopping-cart text-blue-600"></i>
                                        </div>
                                        <div class="ml-3">
                                            <p class="font-medium">Transaksi Baru</p>
                                            <p class="text-sm text-gray-500">Transaksi #123 telah selesai</p>
                                            <p class="text-xs text-gray-400 mt-1">2 menit yang lalu</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-4 border-t">
                                <a href="#" class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                                    Lihat Semua Notifikasi
                                </a>
                            </div>
                        </div>
                    </li>
                    <span class="separator2 hidden-xs"></span>
                    <span class="separator hidden-xs"></span>
                    <li>
                        <div class="flex items-center space-x-2">
                            <a href="/">
                                <img src="{{ asset('images/profile.jpg') }}" alt="Pak Prabowo"
                                    class="h-14 w-14 rounded-full object-cover bg-white" />
                            </a>
                            <div class="ml-3">
                                <a href="/" class="hover:underline">
                                    <p class="font-medium">Alfin F</p>
                                </a>
                                <a href="/" class="hover:underline">
                                    <p class="text-sm text-gray-300 truncate">2022020081</p>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div id="mobile-menu" class="hidden md:hidden">
                {{-- <div class="flex justify-between items-center px-3 py-2">
                    <div class="relative">
                        <button id="mobileMessageButton" class="flex items-center hover:text-amber-200 relative">
                            <i class="fas fa-comment text-xl"></i>
                            <span
                                class="absolute-top-2 -right-2 bg-red-500 text-xs rounded-full w-5 h-5 flex items-center justify-center">2</span>
                        </button>
                        <div id="messageDropdownMobile"
                            class="hidden absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-lg text-gray-700 z-50">
                            <div class="p-4 border-b">
                                <h3 class="font-semibold text-lg">Pesan</h3>
                            </div>
                            <div class="max-h-96 overflow-y-auto">
                                <a href="#" class="block p-4 hover:bg-gray-50 border-b">
                                    <div class="flex items-start">
                                        <img src="https://ui-avatars.com/api/?name=Admin" alt="Admin"
                                            class="w-10 h-10 rounded-full">
                                        <div class="ml-3">
                                            <p class="font-medium">Admin</p>
                                            <p class="text-sm text-gray-500 truncate">Stok barang sudah
                                                diperbarui
                                            </p>
                                            <p class="text-xs text-gray-400 mt-1">5 menit yang lalu</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-4 border-t">
                                <a href="#" class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                                    Lihat Semua Pesan
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="border-t border-gray-700 pt-4 pb-3">


                    <div class="px-2 pt-2 pb-3 space-y-1">
                        <a href="/"
                            class="{{ request()->is('/') ? 'bg-blue-700 text-white' : 'hover:bg-blue-700' }} block px-3 py-2 rounded-md">
                            Home
                        </a>
                        <a href="/product"
                            class="{{ request()->is('produk*') ? 'bg-blue-700 text-white' : 'hover:bg-blue-700' }} block px-3 py-2 rounded-md">
                            Produk
                        </a>
                        <a href="/transaksi"
                            class="{{ request()->is('transactions*') ? 'bg-blue-700 text-white' : 'hover:bg-blue-700' }} block px-3 py-2 rounded-md">
                            Transaksi
                        </a>
                        <a href="/laporan"
                            class="{{ request()->is('laporan*') ? 'bg-blue-700 text-white' : 'hover:bg-blue-700' }} block px-3 py-2 rounded-md">
                            Laporan
                        </a>
                        <div class="border-t border-gray-700 pt-4 pb-3">
                            <div class="flex items-center space-x-2">
                                <a href="/">
                                    <img src="{{ asset('images/profile.jpg') }}" alt="Pak Prabowo"
                                        class="h-14 w-14 rounded-full object-cover bg-white" />
                                </a>
                                <div class="ml-3">
                                    <a href="/" class="hover:underline">
                                        <p class="font-medium">Alfin F</p>
                                    </a>
                                    <a href="/" class="hover:underline">
                                        <p class="text-sm text-gray-300 truncate">2022020081</p>
                                    </a>
                                </div>
                                <div class="flex justify-between items-center px-3 py-2">
                                    <div class="relative">
                                        <button id="mobileNotificationButton"
                                            class="flex items-center hover:text-amber-200 relative">
                                            <i class="fas fa-bell text-xl"></i>
                                            <span
                                                class="absolute -top-2 -right-2 bg-red-500 text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                                        </button>
                                        <div id="notificationDropdownMobile"
                                            class="hidden absolute left-15 mt-4 w-80 bg-white rounded-lg shadow-lg text-gray-700 z-50 transform -translate-x-1/2">
                                            <div class="p-4 border-b">
                                                <h3 class="font-semibold text-lg">Notifikasi</h3>
                                            </div>
                                            <div class="max-h-96 overflow-y-auto">
                                                <a href="#" class="block p-4 hover:bg-gray-50 border-b">
                                                    <div class="flex items-start">
                                                        <div class="flex-shrink-0 bg-blue-100 rounded-full p-2">
                                                            <i class="fas fa-shopping-cart text-blue-600"></i>
                                                        </div>
                                                        <div class="ml-3">
                                                            <p class="font-medium">Transaksi Baru</p>
                                                            <p class="text-sm text-gray-500">Transaksi #123 telah
                                                                selesai
                                                            </p>
                                                            <p class="text-xs text-gray-400 mt-1">2 menit yang lalu</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="p-4 border-t">
                                                <a href="#"
                                                    class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                                                    Lihat Semua Notifikasi
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>