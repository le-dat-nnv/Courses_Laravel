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
        Schema::create('tb_strengths', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Thêm trường tên (ví dụ)
            $table->text('icon_svg')->nullable();
            $table->text('name_short')->nullable();
            $table->text('description')->nullable(); // Thêm trường mô tả (ví dụ) và cho phép null
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
        Schema::dropIfExists('strengths');
    }
};
