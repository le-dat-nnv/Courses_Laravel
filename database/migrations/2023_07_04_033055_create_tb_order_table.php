<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_order', function (Blueprint $table) {
            $table->id();
            $table->date('order_date');
            $table->decimal('initial_amount', 10, 2);
            $table->decimal('paid_amount', 10, 2);
            $table->integer('product_id');
            $table->integer('user_id');
            $table->string('status')->default(1);
            $table->string('session_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('address');
            $table->string('phone');
            $table->text('comments')->nullable();
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
        Schema::dropIfExists('tb_order');
    }
};
