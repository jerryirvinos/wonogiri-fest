<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_code')->unique();
            $table->string('identity_number');
            $table->string('name');
            $table->text('address');
            $table->text('phone');
            $table->string('email');
            $table->integer('qty');
            $table->integer('total_price');
            $table->integer('total_pay');
            $table->string('account_number')->nullable();
            $table->string('account_name')->nullable();
            $table->boolean('payment_status');
            $table->integer('bank')->nullable();
            $table->foreignId('ticket_type');
            $table->string('ticket_box')->nullable();
            $table->string('code_ticket')->nullable();
            $table->boolean('is_online')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
