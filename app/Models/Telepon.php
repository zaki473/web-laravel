<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    use HasFactory;

    protected $table = 'telepon';
    protected $primaryKey = 'id_telepon';

    // Relasi: satu telepon dimiliki satu penerbit
    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class, 'id_penerbit', 'id_penerbit');
    }
}

