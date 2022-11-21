<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketBoxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ticket_boxs')->insert([
            'name' => '01',
            'status' => true,
        ]);
        DB::table('ticket_boxs')->insert([
            'name' => '02',
            'status' => true,
        ]);
    }
}
