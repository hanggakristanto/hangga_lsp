<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()   
    {
        Admin::create([
            "name" => "Admin",
            "email" => "a@a.com",
            // "password" => bcrypt(12345678),
            "password" => Hash::make('admin'),
            "image" => "avatar-1.png"
        ]);
    }
}