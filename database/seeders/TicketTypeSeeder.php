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
            'price' => '0',
            'quota' => '200',
            'title' => 'Ticket Terusan',
            'detail' => '(2 hari show)',
            'code' => '11',
            'status' => true,
        ]);

        DB::table('ticket_types')->insert([
            'name' => 'Presale 1',
            'price' => '250000',
            'quota' => '200',
            'title' => 'Ticket Terusan',
            'detail' => '(2 hari show)',
            'code' => '21',
            'status' => true,
        ]);

        DB::table('ticket_types')->insert([
            'name' => 'Presale 1',
            'price' => '150000',
            'quota' => '200',
            'title' => 'Ticket Harian',
            'detail' => '(Hari 1 show)',
            'code' => '31',
            'status' => true,
        ]);

        DB::table('ticket_types')->insert([
            'name' => 'Presale 1',
            'price' => '150000',
            'quota' => '200',
            'title' => 'Ticket Harian',
            'detail' => '(Hari 2 show)',
            'code' => '23',
            'status' => true,
        ]);

        DB::table('ticket_types')->insert([
            'name' => 'Invitation',
            'price' => '300000',
            'quota' => '200',
            'title' => null,
            'detail' => null,
            'code' => '41',
            'status' => false,
        ]);

        DB::table('ticket_types')->insert([
            'name' => 'Presale 2',
            'price' => '1',
            'quota' => '200',
            'title' => 'Ticket Harian',
            'detail' => '(1 hari show)',
            'code' => '31',
            'status' => false,
        ]);
    }
}
