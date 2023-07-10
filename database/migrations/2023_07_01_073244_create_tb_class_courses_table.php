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
        Schema::create('tb_class_courses', function (Blueprint $table) {
            $table->id();
            $table->integer('id_class')->unique();
            $table->integer('id_course')->unique();
            $table->integer('id_lecture');
            $table->string('schema');  //Một cột có tên "schedule" để lưu trữ lịch học của lớp học - khóa học.
            $table->integer('enrollment')->default(0);
            $table->integer('capacity');
            $table->enum('status', ['ongoing', 'finished', 'upcoming'])->default('upcoming');
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
        Schema::dropIfExists('tb_class_courses');
    }
};
