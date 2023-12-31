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
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->string('news', 20)->comment('活動名稱');
            $table->text('description')->comment('詳細內容');
            $table->string('link')->comment('活動連結');
            $table->integer('category')->comment('學期別(1)、永久至頂(0)');
            $table->timestamps();
            $table->timestamp('start_at')->nullable()->comment('開始時間');
            $table->timestamp('end_at')->nullable()->comment('結束時間');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event');
    }
};
