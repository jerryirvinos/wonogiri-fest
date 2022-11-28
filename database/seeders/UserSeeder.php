<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'name' => 'Huda',
            'username' => 'huda',
            'identity_number' => '340',
            'address' => 'Jogja',
            'phone' => '085',
            'password' => Hash::make('wonogirifest'),
            'role' => 1,
            'modified_by' => 'Programmer',
            'status' => true,
        ]);

        DB::table('users')->insert([
            'name' => 'Jerry',
            'username' => 'jerry',
            'identity_number' => '341',
            'address' => 'Jogja',
            'phone' => '081',
            'password' => Hash::make('wonogirifest'),
            'role' => 1,
            'modified_by' => 'Programmer',
            'status' => true,
        ]);

        DB::table('users')->insert([
            'name' => 'Nico',
            'username' => 'nico',
            'identity_number' => '342',
            'address' => 'Jogja',
            'phone' => '082',
            'password' => Hash::make('wonogirifest'),
            'role' => 1,
            'modified_by' => 'Programmer',
            'status' => true,
        ]);
    }
}
