<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('items')->insert([
            [
                'title' => 'Item 1',
                'description' => 'Descripción del item 1',
                'image_url' => 'https://ejemplo.com/imagen1.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Item 2',
                'description' => 'Descripción del item 2',
                'image_url' => 'https://ejemplo.com/imagen2.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
