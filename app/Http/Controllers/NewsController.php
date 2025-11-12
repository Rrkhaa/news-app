<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Halaman utama news
    public function index()
    {
        $semua_berita = News::with('wartawan', 'comments')
            ->latest()
            ->get();

        return view('news.index', [
            'news_list' => $semua_berita
        ]);
    }

    // Halaman detail berita
    public function show(News $news)
    {
        // load relasi wartawan dan comments
        $news->load('wartawan', 'comments');

        return view('news.show', [
            'news' => $news
        ]);
    }
}
