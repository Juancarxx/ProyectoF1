<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->string('slug')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->integer('user_id')->nullable();
        
            $table->string('quote_number')->default('xxxxx');            
            $table->timestamp('date_quoted')->useCurrent();
            $table->string('firt_name')->default('xxxxx');
            $table->string('last_name')->default('xxxxx');
            $table->string('phone')->default('xxxxx');
            $table->string('email')->default('xxxxx');
            $table->integer('tariff')->default('100');
            $table->integer('deposit')->default('100');
            $table->timestamp('estimated_ship_date')->useCurrent();
            $table->integer('year')->default('2000');
            $table->string('make')->default('xxxxx');
            $table->string('model')->default('xxxxx');
            $table->string('vehicle_type')->default('xxxxx');
            $table->string('ship_via')->default('xxxxx');
            $table->string('vehicle_runs')->default('xxxxx');
            $table->string('pickup_city')->default('xxxxx');
            $table->string('pickup_state')->default('xxxxx');
            $table->integer('pickup_zip')->default('10000');
            $table->string('dropoff_city')->default('xxxxx');
            $table->string('dropoff_state')->default('xxxxx');
            $table->integer('dropoff_zip')->default('10000');
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
        Schema::dropIfExists('tickets');
    }
}
