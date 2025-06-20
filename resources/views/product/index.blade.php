@extends('template.app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <a href="/produk">

            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Daftar Produk</h2>
                <a href="{{ route('product.create') }}"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                    <i class="fas fa-plus"></i> Tambah Produk
                </a>
            </div>
        </a>

        <x-alerts.delete />

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                No
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Kode
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Gambar
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nama Produk
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Kategori
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Harga
                            </th>
                            <th class="px-20 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($products as $index => $product)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $index + 1 }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $product->code }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="relative">
                                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}"
                                            class="h-16 w-16 object-cover rounded-lg cursor-pointer"
                                            onclick="openImageModal('{{ asset($product->image) }}')"
                                            onerror="this.src='{{ asset('images/prabowo.jpg') }}'">
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="{{ route('product.show', $product->name) }}" class="hover:underline">
                                        <div class="text-sm font-medium text-gray-900">{{ $product->name }}</div>
                                    </a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                        {{ $product->category }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-blue-600 font-bold">Rp
                                        {{ number_format($product->price, 0, ',', '.') }}
                                    </div>
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('product.edit', $product->code) }}"
                                        class="bg-yellow-500 text-white px-3 py-1 rounded text-sm hover:bg-yellow-600 mr-2">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="{{ route('product.show', $product->name) }}">
                                        <button class="bg-gray-500 text-white px-3 py-1 rounded text-sm hover:bg-gray-600 mr-2">
                                            <i class="fas fa-eye"></i> Lihat
                                        </button>
                                    </a>
                                    <button onclick="showDeleteConfirmation('{{ $product->code }}')"
                                        class="bg-red-500 text-white px-3 py-1 rounded text-sm hover:bg-red-600">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-4 whitespace-nowrap text-center text-gray-500">
                                    Tidak ada data produk
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="px-6 py-4">
                    {{ $products->links() }}
                </div>
            </div>

            <div id="imageModal" class="fixed inset-0 items-center justify-center hidden">

                <div class="relative">
                    <button onclick="closeImageModal()"
                        class="absolute top-0 right-0 mt-2 mr-2 text-white border-black text-3xl font-bold">&times;</button>
                    <img id="modalImage" src="" class="max-h-96 w-auto object-cover rounded shadow-lg" alt="Preview">
                </div>
            </div>

        </div>
    </div>
    <script>
        function openImageModal(imageUrl) {
            const modal = document.getElementById('imageModal');
            const img = document.getElementById('modalImage');

            img.src = imageUrl;
            modal.classList.remove('hidden');
            modal.classList.add('flex'); // ← tampilkan modal dengan flex
        }

        function closeImageModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        }

    </script>
@endsection