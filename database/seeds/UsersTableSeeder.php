<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Muhammad Fariz',
            'email' => 'Fariz123@gmail.com',
            'password' => Hash::make('fariz123'),
        ]);

        // Tambahkan data pengguna lainnya di sini jika diperlukan

    }
}
