@extends('template.app')

@section('content')


    <section class="flex items-center justify-center">
        <div class="container mx-auto flex px-4 flex-col md:flex-row items-center bg-white justify-between">
            <div class="text-center md:text-left">
                <h1 class="text-4xl text-slate-900 mt-2 font-semibold">Welcome to Kasir App <br>
                    <span class="text-amber-500">Transaksi Mudah dan Cepat</span>
                </h1>
                <p class="mb-4">Aplikasi kasir berbasis web untuk membantu anda mengelola transaksi penjualan dengan
                    mudah dan cepat.</p>
                <a href="/product" class="inline-flex items-center justify-center px-4 py-2 bg-amber-500
                        text-white font-semibold rounded-md shadow-md hover:bg-amber-600 transition duration-200">Mulai
                    Transaksi</a>
                <a href="/welcome" class="inline-flex items-center justify-center px-4 py-2 bg-blue-500
                        text-white font-semibold rounded-md shadow-md hover:bg-blue-600 transition duration-200">Tes
                    Notif Welcome</a>


            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/gambar1.png') }}" alt="Kasir App" class="mx-auto w-1/2 h-auto">
            </div>
        </div>
        
    </section>


@endsection