<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

namespace App\Controllers;

class Prodi extends BaseController
{
    public function index()
    {
        // Data program studi
        $data['prodi'] = [
            ['kode' => 'TI', 'nama' => 'Teknik Informatika'],
            ['kode' => 'SI', 'nama' => 'Sistem Informasi'],
            ['kode' => 'TE', 'nama' => 'Teknik Elektro'],
            ['kode' => 'MI', 'nama' => 'Manajemen Informatika'],
            ['kode' => 'TM', 'nama' => 'Teknik Mesin'],
            ['kode' => 'TS', 'nama' => 'Teknik Sipil'],
            ['kode' => 'TA', 'nama' => 'Teknik Arsitektur'],
            ['kode' => 'TI', 'nama' => 'Teknik Industri'],
            ['kode' => 'TK', 'nama' => 'Teknik Kimia'],
            ['kode' => 'TL', 'nama' => 'Teknik Lingkungan'],
        ];

        return view('/data-program-studi', $data);
    }
}

