<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('orders_id')->nullable();
            $table->unsignedBigInteger('products_id')->nullable();
            $table->unsignedBigInteger('value_attributes_id')->nullable();
            $table->decimal('price')->nullable();
            $table->Integer('quantity')->nullable();
            $table->decimal('total')->nullable();
            $table->timestamps();

            $table->foreign('orders_id')
                ->references('id')
                ->on('orders');
            $table->foreign('products_id')
                ->references('id')
                ->on('products');
            $table->foreign('value_attributes_id')
                ->references('id')
                ->on('value_attributes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_products');
    }
}
