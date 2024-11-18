<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Mahasiswa extends BaseController
{
    public function index()
    {
        // Data dummy mahasiswa
        $data['mahasiswa'] = [
            ['nama' => 'Aisyah', 'prodi' => 'Teknik Informatika'],
            ['nama' => 'Budi', 'prodi' => 'Sistem Informasi'],
            ['nama' => 'Citra', 'prodi' => 'Teknik Elektro'],
            ['nama' => 'Dimas', 'prodi' => 'Manajemen Informatika'],
            ['nama' => 'Eka', 'prodi' => 'Teknik Mesin'],
            ['nama' => 'Fajar', 'prodi' => 'Teknik Sipil'],
            ['nama' => 'Gina', 'prodi' => 'Teknik Arsitektur'],
            ['nama' => 'Hadi', 'prodi' => 'Teknik Industri'],
            ['nama' => 'Ira', 'prodi' => 'Teknik Kimia'],
            ['nama' => 'Joko', 'prodi' => 'Teknik Lingkungan'],
        ];

        return view('/data-mahasiswa', $data);
    }
}
