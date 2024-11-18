<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dosen extends BaseController
{
    public function index()
    {
        // Data dummy dosen
        $data['dosen'] = [
            ['nama' => 'Dr. Andi Wijaya', 'prodi' => 'Teknik Informatika'],
            ['nama' => 'Dr. Bambang Supriyadi', 'prodi' => 'Sistem Informasi'],
            ['nama' => 'Dr. Cahyono Jati', 'prodi' => 'Teknik Elektro'],
            ['nama' => 'Dr. Dewi Saraswati', 'prodi' => 'Manajemen Informatika'],
            ['nama' => 'Dr. Eka Purwanti', 'prodi' => 'Teknik Mesin'],
            ['nama' => 'Dr. Farida Amalia', 'prodi' => 'Teknik Sipil'],
            ['nama' => 'Dr. Gunawan Putra', 'prodi' => 'Teknik Arsitektur'],
            ['nama' => 'Dr. Haryanto', 'prodi' => 'Teknik Industri'],
            ['nama' => 'Dr. Intan Wulandari', 'prodi' => 'Teknik Kimia'],
            ['nama' => 'Dr. Jajang Sudrajat', 'prodi' => 'Teknik Lingkungan'],
        ];

        return view('/data-dosen', $data);
    }
}
