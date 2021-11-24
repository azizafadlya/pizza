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
        Schema::disableForeignKeyConstraints();
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('date');
            $table->string('time');
            $table->unsignedBigInteger('pizza_id');
            $table->string('small_pizza')->defualt(0);
            $table->string('medium_pizza')->defualt(0);
            $table->string('large_pizza')->defualt(0);
            $table->text('body');
            $table->string('status')->default('pending');
            $table->foreign('pizza_id')->references('id')->on('pizzas')->onDelete('cascade');
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
        
        Schema::dropIfExists('orders');
    }
}
