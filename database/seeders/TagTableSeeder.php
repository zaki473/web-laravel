<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tag1 = new Tag;
        $tag1->tag = "PHP";
        $tag1->save();

        $tag2 = new Tag;
        $tag2->tag = "MySQL";
        $tag2->save();

        $tag3 = new Tag;
        $tag3->tag = "Android";
        $tag3->save();
    }
}
