<div id="successAlert" class="fixed top-4 right-4 z-50 hidden">
    <div class="bg-white rounded-lg border-l-4 border-green-500 shadow-lg p-4 flex items-center">
        <div class="flex-shrink-0">
            <i class="fas fa-check-circle text-green-500 text-xl"></i>
        </div>
        <div class="ml-3 mr-4">
            <p class="font-semibold text-green-500">Berhasil!</p>
            <p class="text-sm text-gray-600">{{ $message }}</p>
        </div>
        <button onclick="hideAlert('successAlert')" class="text-gray-400 hover:text-gray-500">
            <i class="fas fa-times"></i>
        </button>
    </div>
</div>