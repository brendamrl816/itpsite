<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'username' => 'itpusa07',
            'email' => 'itpusa07@gmail.com',
            'password' => bcrypt('~111507e')]);
    }
}
