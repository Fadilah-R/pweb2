<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Mhs extends Seeder
{
    public function run()
    {
        //ngisi datanya ke tabel
        $data = [
            [
            'npm' => 220102057,
            'nama'    => 'Fadilah R',
            'alamat'    => 'Kwt'
            ],
            [
            'npm' => 220102050,
            'nama'    => 'Fadilah Rom',
            'alamat'    => 'Pwt'
            ],
        ];

        // Using Query Builder
        $this->db->table('mhs')->insertBatch($data);
    }
}
