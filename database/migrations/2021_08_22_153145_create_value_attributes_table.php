<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValueAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('value_attributes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('products_id')->nullable();
            $table->unsignedBigInteger('products_attributes_id')->nullable();
            $table->string('gallery');
            $table->unsignedInteger('quantity')->nullable();
            $table->decimal('price')->nullable();
            $table->string('description');
            $table->timestamps();

            $table->foreign('products_id')
                ->references('id')
                ->on('products');
            $table->foreign('products_attributes_id')
                ->references('id')
                ->on('products_attributes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('value_attributes');
    }
}
