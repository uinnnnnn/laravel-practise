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
        Schema::create('user_book_photo', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->comment('書況圖片');
            $table->unsignedBigInteger('user_book_id')->comment('上架/期望書籍 id');
            $table->foreign('user_book_id')
                ->references('id')
                ->on('user_book');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_book_photo');
    }
};
