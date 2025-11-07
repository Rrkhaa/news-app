// resources/views/news/index.blade.php
@extends('layouts.app') 

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-8 border-b pb-2">Daftar Berita Terbaru</h1>

    <div class="space-y-8">
        @forelse ($news_list as $news)
            <div class="bg-white p-6 shadow-lg rounded-lg border border-gray-200 hover:shadow-xl transition duration-300">
                <h2 class="text-2xl font-bold text-blue-600 hover:text-blue-800 mb-2">
                    <a href="{{ route('news.show', $news) }}">
                        {{ $news->judul }}
                    </a>
                </h2>
                
                <p class="text-sm text-gray-500 mb-3">
                    Oleh: <span class="font-semibold">{{ $news->wartawan->nama }}</span> | 
                    {{ $news->created_at->format('d F Y') }} | 
                    {{ $news->komentar->count() }} Komentar
                </p>

                <p class="text-gray-700 mb-4">{{ $news->ringkasan }}</p>

                <a href="{{ route('news.show', $news) }}" class="text-blue-500 font-medium hover:underline">Baca Selengkapnya &rarr;</a>
            </div>
        @empty
            <div class="p-6 bg-yellow-100 border border-yellow-300 rounded-lg">
                <p class="text-yellow-800 font-semibold">Tidak ada berita yang ditemukan.</p>
                <p class="text-yellow-700 text-sm">Coba jalankan `php artisan migrate:fresh --seed` untuk mengisi data dummy.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection