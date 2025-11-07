@extends('layouts.main')

@section('container')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class = "border border-black-500 shadow-lg text-black px-4 py-2 rounded-md hover:bg-black-100 focus:ring-2 focus:ring-black-300 bg-black-500 text-black px-4 py-2 rounded-md hover:bg-black-600">

        <h1 class="text-3xl font-bold mb-4 text-gray-800">{{ $news->judul}}</h1>

        <p class="text-black-600 mb-4">
            Oleh: {{ $news->wartawan->nama ?? 'Tidak diketahui' }} |
            Dipublikasikan pada: {{ $news->created_at->format('d M Y') }}
        </p>

        <p class="text-black-800 leading-relaxed mb-6">{{ $news->isi }}</p>
    </div>
         <form action="{{ route('komentar.store', $news->id) }}" method="POST" class="mb-6">
        @csrf
        <div class="mb-3">
            <label class="block text-sm font-medium text-black-700 mb-1">Nama</label>
            <input type="text" name="nama" class="w-full border shadow-lg border-black-300 rounded-md p-2 focus:ring focus:ring-blac-200">
        </div>

        <div class="mb-3">
            <label class="block text-sm font-medium shadow-lg text-gray-700 mb-1">Komen</label>
            <textarea name="isi" rows="2" class="w-full border border-black-300 rounded-md p-2 focus:ring focus:ring-black-200"></textarea>
        </div>

        <button type="submit" class="border border-black-500 shadow-lg text-black px-4 py-2 rounded-md hover:bg-black-100 focus:ring-2 focus:ring-black-300 bg-black-500 text-black px-4 py-2 rounded-md hover:bg-black-600">
            Kirim
        </button>
    </form>
    <div class="border border-black-500 shadow-lg text-black px-4 py-2 rounded-md hover:bg-black-100 focus:ring-2 focus:ring-black-300 bg-black-500 text-black px-4 py-2 rounded-md hover:bg-black-600">
        @foreach ($news->komentar as $komentar)
        <p class="text-black-600 mb-4">
            Oleh: {{ $komentar->nama ?? 'Tidak diketahui' }} <br>
            Isi: {{ $komentar->isi }}
        </p>
        @endforeach
    </div>

    
        <a href="{{ route('news.index') }}" class="text-blue-500 hover:underline">
            ← Kembali ke Daftar Berita
        </a>
    </div>
@endsection
