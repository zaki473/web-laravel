<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $primaryKey = 'id_buku';
    protected $fillable = ['judul', 'pengarang', 'tahun_terbit', 'id_kategori_buku'];

    // Relasi ke tabel kategori_buku (Setiap buku punya satu kategori)
    public function kategori_buku()
    {
        return $this->belongsTo(\App\Models\KategoriBuku::class, 'id_kategori_buku');
    }

    // Relasi ke tabel tag melalui pivot tag_buku
    public function tag()
    {
        return $this->belongsToMany(\App\Models\Tag::class, 'tag_buku', 'id_buku', 'id_tags');
    }
}
