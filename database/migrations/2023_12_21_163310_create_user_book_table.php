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
        Schema::create('user_book', function (Blueprint $table) {
            $table->id();
            $table->string('description')->comment('書況說明');
            $table->integer('book_condition')->comment('幾成新（全新、近全新、良好、普通）');
            $table->integer('price')->comment('書籍建議價格');
            $table->integer('status')->comment('交易狀態');
            $table->string('rejection_description')->comment('拒絕原因描述');
            $table->unsignedBigInteger('seller_id')->comment('賣家 id');
            $table->unsignedBigInteger('buyer_id')->comment('買家 id');
            $table->unsignedBigInteger('book_id')->comment('書本 id');
            $table->timestamps();
            $table->foreign('seller_id')
                ->references('id')
                ->on('user');
            $table->foreign('buyer_id')
                ->references('id')
                ->on('user');
            $table->foreign('book_id')
            ->references('id')
            ->on('book');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_book');
    }
};
