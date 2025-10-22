<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBuku extends Model
{
    use HasFactory;

    protected $table = 'kategori_buku';

    protected $primaryKey = 'id_kategori_buku';

    // database column name is 'kategori' as defined in migration
    protected $fillable = ['kategori'];

    public function buku()
    {
        return $this->

        hasMany("App\Models\Buku", 'id_kategori_buku');
    }
}
