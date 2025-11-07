<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Komentar;

class KomentarController extends Controller
{
    public function store(Request $request, $newsId)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        Komentar::create([
            'news_id' => $newsId,
            'nama' => $request->nama,
            'isi' => $request->isi,
        ]);

        return redirect()->back();
    }
}