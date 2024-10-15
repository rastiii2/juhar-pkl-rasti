<?php

namespace Database\Seeders;

use App\Models\Admin\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'username' => 'admin1',
                'password' => bcrypt('password123'),
                'nama_admin' => 'Administrator 1',
                'foto' => null,
            ],
            [
                'username' => 'admin2',
                'password' => bcrypt('password123'),
                'nama_admin' => 'Administrator 2',
                'foto' => null,
            ]
        ];

        foreach ($admins as $admin) {
          Admin::create($admin);    
        }
    }
}
