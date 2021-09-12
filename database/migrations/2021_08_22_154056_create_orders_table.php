<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id')->nullable();
            $table->decimal('grand_total')->nullable;
            $table->Integer('status')->default(1);
            $table->string('note');
            $table->string('province',191)->unique();
            $table->string('district',191)->unique();
            $table->string('wards',191)->unique();
            $table->string('village',191)->unique();
            $table->string('house_number',191)->unique();
            $table->string('phone_number',10)->unique();
            $table->timestamps();

            $table->foreign('users_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
