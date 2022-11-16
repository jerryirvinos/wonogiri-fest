<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ticket_types')->insert([
            'name' => 'Early Bird',
            'price' => '200000',
            'quota' => '200',
            'status' => true,
        ]);

        DB::table('ticket_types')->insert([
            'name' => 'Presale',
            'price' => '250000',
            'quota' => '200',
            'status' => true,
        ]);

        DB::table('ticket_types')->insert([
            'name' => 'Normal',
            'price' => '300000',
            'quota' => '200',
            'status' => true,
        ]);
    }
}
