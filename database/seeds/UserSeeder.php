<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = "administrator";
        $admin->email = "admin@admin.com";
        $admin->password = Hash::make("password");
        $admin->save();
    }
}
