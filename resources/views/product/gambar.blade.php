@extends('template.app')
@section('content')

    <div class="flex justify-center items-center min-h-screen">
        <img src="{{ $imageUrl }}" alt="Gambar Produk" class="h-20 w-20 rounded shadow">
    </div>

    <div class="flex justify-center mt-4">
        <a href="{{ route('product.index') }}"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
            Kembali ke Daftar Produk
        </a>
    </div>

@endsection