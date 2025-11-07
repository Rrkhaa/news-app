<?php

// app/Models/News.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Wartawan; // PENTING: Harus ada!
use App\Models\Komentar; // PENTING: Harus ada!
use App\Models\Category; // Jika Anda sudah membuatnya

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    // Pastikan fillable mencakup kolom-kolom yang Anda gunakan
    protected $fillable = ['judul', 'ringkasan', 'isi', 'wartawan_id', 'category_id'];

    /**
     * Relasi: Berita dimiliki oleh satu Wartawan (Many to One).
     */
    public function wartawan()
    {
        // Pastikan Anda mengimport Model Wartawan di bagian atas file!
        return $this->belongsTo(Wartawan::class, 'wartawan_id');
    }

    /**
     * Relasi: Berita memiliki banyak Komentar (One to Many).
     */
    public function komentar()
    {
        // Pastikan Anda mengimport Model Komentar di bagian atas file!
        return $this->hasMany(Komentar::class, 'news_id');
    }
    
    // Tambahkan relasi category jika Anda sudah membuat Model Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}