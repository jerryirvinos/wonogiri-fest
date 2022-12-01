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
            'name' => '2D Pass',
            'price' => '300000',
            'quota' => '200',
            'title' => 'Ticket Terusan',
            'detail' => '(2 hari show)',
            'code' => '31',
            'status' => true,
        ]);

        DB::table('ticket_types')->insert([
            'name' => 'Daily Pass',
            'price' => '300000',
            'quota' => '200',
            'title' => 'Ticket Terusan',
            'detail' => '(2 hari show)',
            'code' => '32',
            'status' => true,
        ]);

        DB::table('ticket_types')->insert([
            'name' => 'Invitation',
            'price' => '300000',
            'quota' => '200',
            'title' => 'Ticket Terusan',
            'detail' => '(2 hari show)',
            'code' => '41',
            'status' => true,
        ]);
    }
}
