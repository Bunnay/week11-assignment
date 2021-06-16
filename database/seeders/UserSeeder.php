<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role' => 'admin',
            'name' => 'admin1',
            'email' => 'admin1@abc.com',
            'password' => '$2y$10$pRpP/biu8IHkmUFwcRiVdO/AZczif55e/STJEp09xHIIwgRkrl.u2',
        ]);
    }
}
