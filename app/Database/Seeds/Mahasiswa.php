<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $datamahasiswa = [

            [
                'npm'    => '2017051009',
                'nama'   => 'Nesa Dwi Cahyani',
                'alamat' => 'Bataranila',
                'created_at' => Time::now()
            ],
            [
                'npm'    => '2017051083',
                'nama'   => 'Sarah Cantika Putri',
                'alamat' => 'Sukabumi',
                'created_at' => Time::now()
            ],
            [
                'npm'    => '2017051051',
                'nama'   => 'Nasywa Nathania W',
                'alamat' => 'Tanjung Karang',
                'created_at' => Time::now()
            ],
        ];
        foreach ($datamahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
