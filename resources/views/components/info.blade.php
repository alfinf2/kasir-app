 <div class="fixed bottom-4 right-4 flex flex-col space-y-3 z-50">
        <div class="group relative">
            <a href="https://api.whatsapp.com/send?phone=6285765128662" target="_blank"
                class="relative block transition-all duration-300 transform hover:scale-110">
                <div
                    class="absolute -inset-2 bg-green-500 rounded-full opacity-20 group-hover:opacity-30 blur transition-all duration-300">
                </div>
                <img src="{{ asset('images/whatsapp.png') }}"
                    class="w-12 h-12 md:w-14 md:h-14 rounded-full shadow-lg relative z-10" alt="WhatsApp">
            </a>
            <div class="absolute right-full mr-3 top-1/2 -translate-y-1/2 hidden group-hover:block">
                <div class="bg-white text-gray-800 px-3 py-1 rounded-lg shadow-md text-sm whitespace-nowrap">
                    Chat via WhatsApp
                    <div
                        class="absolute top-1/2 right-0 transform translate-x-1/2 -translate-y-1/2 rotate-45 w-2 h-2 bg-white">
                    </div>
                </div>
            </div>
        </div>

        <div class="group relative">
            <a href="https://www.instagram.com/a.alfinf" target="_blank"
                class="relative block transition-all duration-300 transform hover:scale-110">
                <div
                    class="absolute -inset-2 bg-gradient-to-br from-pink-500 via-red-500 to-yellow-500 rounded-full opacity-20 group-hover:opacity-30 blur transition-all duration-300">
                </div>
                <img src="{{ asset('images/instagram.png') }}"
                    class="w-12 h-12 md:w-14 md:h-14 rounded-full shadow-lg relative z-10" alt="Instagram">
            </a>
            <div class="absolute right-full mr-3 top-1/2 -translate-y-1/2 hidden group-hover:block">
                <div class="bg-white text-gray-800 px-3 py-1 rounded-lg shadow-md text-sm whitespace-nowrap">
                    Follow on Instagram
                    <div
                        class="absolute top-1/2 right-0 transform translate-x-1/2 -translate-y-1/2 rotate-45 w-2 h-2 bg-white">
                    </div>
                </div>
            </div>
        </div>
    </div>