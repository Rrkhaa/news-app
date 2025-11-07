// resources/views/news/show.blade.php
@extends('layouts.app') 

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 shadow-lg rounded-lg">

    <a href="{{ route('news.index') }}" class="text-blue-500 hover:text-blue-700 mb-4 inline-block">&larr; Kembali ke Daftar Berita</a>

    {{-- JUDUL BERITA --}}
    <h1 class="text-4xl font-extrabold text-gray-900 mb-4">{{ $news->judul }}</h1> 

    {{-- INFORMASI PENULIS & TANGGAL --}}
    <p class="text-sm text-gray-600 mb-6 border-b pb-4">
        Oleh: 
        <span class="font-semibold text-gray-800">{{ $news->wartawan->nama }}</span> 
        | Diterbitkan pada: 
        <span class="text-gray-700">{{ $news->created_at->format('d F Y, H:i') }}</span>
    </p>

    {{-- ISI BERITA --}}
    <div class="text-gray-800 leading-relaxed mb-10">
        {{-- nl2br untuk memastikan baris baru di database diubah menjadi tag <br> di HTML --}}
        {!! nl2br(e($news->isi)) !!} 
    </div>

    <hr class="my-6">

    {{-- KOMENTAR SECTION --}}
    <h2 class="text-2xl font-bold text-gray-900 mb-6">Komentar ({{ $news->komentar->count() }})</h2>

    {{-- 1. Daftar Komentar --}}
    <div class="space-y-4 mb-10">
        @forelse ($news->komentar as $komentar)
            <div class="border border-gray-200 p-4 rounded-lg bg-gray-50">
                <p class="font-bold text-gray-800">{{ $komentar->nama }}</p>
                <p class="text-gray-600 text-sm mt-1">{{ $komentar->created_at->diffForHumans() }}</p>
                <p class="text-gray-700 mt-2">{{ $komentar->isi }}</p>
            </div>
        @empty
            <p class="text-gray-500">Belum ada komentar untuk berita ini. Jadilah yang pertama berkomentar!</p>
        @endforelse
    </div>
    
    {{-- 2. Form Komentar (Akan digunakan pada Langkah 3) --}}
    <h3 class="text-xl font-bold text-gray-900 mb-4">Tulis Komentar Anda</h3>
    {{-- Placeholder untuk form komentar --}}
    <form action="" method="POST">
        @csrf
        {{-- Input form akan ditambahkan di Langkah 3 --}}
        <p class="text-red-500">FORM AKAN DIIMPLEMENTASIKAN DI BAGIAN 3</p>
    </form>
    
</div>
@endsection