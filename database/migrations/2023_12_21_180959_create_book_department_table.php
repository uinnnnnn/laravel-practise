<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_department', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id')->comment('書籍 id');
            $table->unsignedBigInteger('department_id')->comment('書籍所屬的系 id');
            $table->foreign('book_id')
                ->references('id')
                ->on('book');
            $table->foreign('department_id')
                ->references('id')
                ->on('department');
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
        Schema::dropIfExists('book_department');
    }
};
