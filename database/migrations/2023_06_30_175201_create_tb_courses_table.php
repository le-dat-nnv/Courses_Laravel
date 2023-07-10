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
        Schema::create('tb_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->text('image');
            $table->date('duration')->nullable(); // thời gian hoàn thành khóa học
            $table->boolean('is_featured')->default(true);
            $table->string('level')->nullable();
            $table->integer('rating')->nullable();
            $table->integer('enrollment_count')->nullable();
            $table->integer('id_category');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->boolean('is_published')->nullable();
            $table->boolean('is_trash')->default(true);
            $table->time('schedule_datetime_start')->default('08:00');
            $table->time('schedule_datetime_end')->default('10:00');
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
        Schema::dropIfExists('tb_courses');
    }
};
