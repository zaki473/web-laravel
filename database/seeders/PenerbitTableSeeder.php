<?php

namespace Database\Seeders;

use App\Models\Penerbit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenerbitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penerbit1 = new Penerbit;
        $penerbit1->penerbit = "Graha ilmu";
        $penerbit1->alamat = "Candi Gebang Permai Blok R-6 Yogyakarta";
        $penerbit1->save();

        $penerbit2 = new Penerbit;
        $penerbit2->penerbit = "Andi";
        $penerbit2->alamat = "JL Beo 38-40 Yogyakarta";
        $penerbit2->save();

        $penerbit3 = new Penerbit;
        $penerbit3->penerbit = "Lokomedia";
        $penerbit3->alamat ="JL. Jambon, Perum. Persona Alam Hijau Kav 2. B-4, Kricak Yogyakarta";
        $penerbit3->save();
    }
}
