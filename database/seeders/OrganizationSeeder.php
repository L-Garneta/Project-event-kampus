<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $organizations = [

            [
                'nama_organisasi' => 'HIMA Sistem Informasi',
                'deskripsi' => 'Himpunan Mahasiswa Sistem Informasi',
                'logo' => null,
                'created_by' => 1,
            ],

            [
                'nama_organisasi' => 'BEM Universitas',
                'deskripsi' => 'Badan Eksekutif Mahasiswa Universitas',
                'logo' => null,
                'created_by' => 1,
            ],

            [
                'nama_organisasi' => 'UKM Desain',
                'deskripsi' => 'Unit Kegiatan Mahasiswa Desain',
                'logo' => null,
                'created_by' => 1,
            ],

        ];

        foreach ($organizations as $organization) {

            Organization::updateOrCreate(
                [
                    'nama_organisasi' => $organization['nama_organisasi']
                ],
                $organization
            );

        }
    }
}
