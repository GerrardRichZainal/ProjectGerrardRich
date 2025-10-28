<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // Nama tabel di database (opsional jika sama dengan plural model)
    protected $table = 'blogs';

    // Kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'title_en',
        'title_id',
        'content_en',
        'content_id',
        'slug',
        'image',
        'created_at',
        'updated_at'
    ];

    /**
     * Getter untuk judul sesuai bahasa
     */
    public function getTitleAttribute()
    {
        $lang = request()->get('lang') === 'id' ? 'id' : 'en';
        return $lang === 'id' ? $this->title_id : $this->title_en;
    }

    /**
     * Getter untuk isi konten sesuai bahasa
     */
    public function getContentAttribute()
    {
        $lang = request()->get('lang') === 'id' ? 'id' : 'en';
        return $lang === 'id' ? $this->content_id : $this->content_en;
    }
}
