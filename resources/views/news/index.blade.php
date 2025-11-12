@extends('layouts.app')

@section('content')
    <h1 class="mb-4 fw-bold text-center">📰 Daftar Berita Terbaru</h1>

    <div class="row">
        @foreach ($news_list as $news)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ route('news.show', $news) }}" class="text-decoration-none text-dark">
                                {{ $news->judul }}
                            </a>
                        </h5>
                        <p class="card-text text-muted small mb-2">
                            Oleh: {{ $news->wartawan->nama ?? 'Tidak diketahui' }} |
                            {{ $news->created_at->format('d M Y') }} |
                            {{ $news->komentar ? $news->komentar->count() : 0 }} komentar
                        </p>
                        <p class="card-text">
                            {{ Str::limit($news->isi, 120) }}
                        </p>
                        <a href="{{ route('news.show', $news) }}" class="btn btn-sm btn-outline-primary">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
