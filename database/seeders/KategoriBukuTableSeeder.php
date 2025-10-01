<?php

namespace Database\Seeders;

use App\Models\KategoriBuku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriBukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoriBuku1 = new KategoriBuku;
        $kategoriBuku1->kategori = "Web";
        $kategoriBuku1->save();

        $kategoriBuku2 = new KategoriBuku;
        $kategoriBuku2->kategori = 'mobile';
        $kategoriBuku2->save();

        $kategoriBuku3 = new KategoriBuku;
        $kategoriBuku3->kategori = 'desain';
        $kategoriBuku3->save();
    }
}
