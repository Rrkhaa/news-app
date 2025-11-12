<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Wartawan;
use App\Models\Comment; // ← gunakan Comment, bukan Komentar
use App\Models\Category;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    protected $fillable = ['judul', 'ringkasan', 'isi', 'wartawan_id', 'category_id'];

    public function wartawan()
    {
        return $this->belongsTo(Wartawan::class, 'wartawan_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
