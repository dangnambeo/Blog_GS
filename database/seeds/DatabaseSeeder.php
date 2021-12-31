<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('user')->insert([
           'full_name' => 'Đăng Nam',
            'user_name' => 'nam',
            'role_id' => '1',
            'password' => bcrypt('nam@123'),
        ]);

        DB::table('role')->insert([
            ['role_name' => 'Quản trị viên'],
            ['role_name' => 'Admin'],
            ['role_name' => 'Bloger']
        ]);
    }
}
