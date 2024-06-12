<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'phone' => '01100531939',
            'password' => bcrypt(1234567890),
            'type' => 'admin',
            'status' => 1,
            'image' => '',
         ]);

    }
}
