<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [

            [
                'organization_id' => 1,
                'category_id' => 1,
                'created_by' => 1,
                'judul' => 'Seminar Artificial Intelligence',
                'tema' => 'AI untuk Masa Depan Pendidikan',
                'deskripsi' => 'Seminar yang membahas perkembangan Artificial Intelligence dalam dunia pendidikan.',
                'tanggal' => '2026-08-10',
                'waktu' => '09:00:00',
                'lokasi' => 'Aula Kampus',
                'kuota' => 150,
                'poster' => null,
                'status' => 'Gratis',
            ],

            [
                'organization_id' => 2,
                'category_id' => 2,
                'created_by' => 1,
                'judul' => 'Workshop Laravel 12',
                'tema' => 'Membangun Aplikasi Web Modern',
                'deskripsi' => 'Workshop pengembangan aplikasi web menggunakan Laravel 12.',
                'tanggal' => '2026-08-15',
                'waktu' => '08:30:00',
                'lokasi' => 'Laboratorium Komputer',
                'kuota' => 50,
                'poster' => null,
                'status' => 'Gratis',
            ],

            [
                'organization_id' => 3,
                'category_id' => 4,
                'created_by' => 1,
                'judul' => 'Lomba UI/UX Nasional',
                'tema' => 'Design for Better Experience',
                'deskripsi' => 'Kompetisi UI/UX untuk mahasiswa seluruh Indonesia.',
                'tanggal' => '2026-09-01',
                'waktu' => '08:00:00',
                'lokasi' => 'Gedung Serbaguna',
                'kuota' => 200,
                'poster' => null,
                'status' => 'Berbayar',
            ],

        ];

        foreach ($events as $event) {

            Event::updateOrCreate(
                [
                    'judul' => $event['judul']
                ],
                $event
            );
        }
    }
}
