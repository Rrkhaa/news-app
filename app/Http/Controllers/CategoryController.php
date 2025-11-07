// app/Models/Category.php
<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = ['nama', 'slug'];

    // Relasi: Category has many News (One to Many)
    public function news()
    {
        return $this->hasMany(News::class);
    }
}