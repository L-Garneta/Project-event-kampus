<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [

            [
                'nama_kategori' => 'Seminar',
                'created_by' => 1,
            ],

            [
                'nama_kategori' => 'Workshop',
                'created_by' => 1,
            ],

            [
                'nama_kategori' => 'Webinar',
                'created_by' => 1,
            ],

            [
                'nama_kategori' => 'Lomba',
                'created_by' => 1,
            ],

        ];

        foreach ($categories as $category) {

            Category::updateOrCreate(
                [
                    'nama_kategori' => $category['nama_kategori']
                ],
                $category
            );

        }
    }
}
