<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->insert([
            'name' => 'Mandiri',
            'account_number' => '1234567',
            'owner' => 'Yeremia',
            'status' => true,
        ]);

        DB::table('banks')->insert([
            'name' => 'BRI',
            'account_number' => '12345671111',
            'owner' => 'Huda',
            'status' => true,
        ]);
    }
}
