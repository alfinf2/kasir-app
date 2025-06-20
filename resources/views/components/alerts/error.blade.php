<div id="errorAlert" class="fixed top-4 right-4 z-50 hidden">
    <div class="bg-white rounded-lg border-l-4 border-red-500 shadow-lg p-4 flex items-center">
        <div class="flex-shrink-0">
            <i class="fas fa-exclamation-circle text-red-500 text-xl"></i>
        </div>
        <div class="ml-3 mr-4">
            <p class="font-semibold text-red-500">Error!</p>
            <p class="text-sm text-gray-600">{{ $message }}</p>
        </div>
        <button onclick="hideAlert('errorAlert')" class="text-gray-400 hover:text-gray-500">
            <i class="fas fa-times"></i>
        </button>
    </div>
</div>