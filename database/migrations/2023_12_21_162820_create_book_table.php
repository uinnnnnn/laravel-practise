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
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->comment('用base64格式');
            $table->string('name')->comment('書名');
            $table->string('isbn', 13)->comment('書籍的 ISBN');
            $table->string('author')->comment('書籍的作者');
            $table->unsignedBigInteger('college_id')->comment('歸屬於哪一個院');
            $table->integer('price')->comment('書籍建議價格');
            $table->timestamps();
            $table->softDeletes()->comment('軟刪除時間');
            $table->foreign('college_id')
                ->references('id')
                ->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
};
