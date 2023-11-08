<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Admin extends Seeder
{
    public function run()
    {
        //
        $data = [
            'username' => 'admin',
            'password' => password_hash('12345', PASSWORD_DEFAULT),
            'nama_lengkap' => 'aril',
            'email' => 'syahril.pain8787@gmail.com',
        ];
        $this->db->table('admin')->insert($data);
    }
}