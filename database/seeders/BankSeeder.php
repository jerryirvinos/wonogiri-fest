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
            'name' => 'BCA',
            'account_number' => '12345671111',
            'owner' => 'Huda',
            'logos' => 'assets/media/bank/bca.png',
            'status' => true,
        ]);
    }
}
