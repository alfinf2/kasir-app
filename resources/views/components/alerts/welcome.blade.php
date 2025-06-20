<div id="welcomeAlert" class="fixed top-4 right-4 z-50 hidden fade-slide-in">
   <div class="bg-white rounded-lg border border-amber-500 shadow-lg shadow-amber-100 p-4 flex items-center">

        <div class="flex-shrink-0">
            <i class="fas fa-smile text-amber-500 text-xl animate-bounce"></i>
        </div>
        <div class="ml-3 mr-4">
            <p class="font-semibold text-amber-500">Selamat Datang!</p>
            <h3 class="text-sm text-gray-600">{{$message}}</h3>
        </div>
        <button onclick="hideAlert('welcomeAlert')" class="text-gray-400 hover:text-gray-500">
            <i class="fas fa-times"></i>
        </button>
    </div>
</div>