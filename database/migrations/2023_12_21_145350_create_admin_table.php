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
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('使用者 id');
            $table->timestamps();
            $table->timestamp('start_at')->nullable()->comment('開始時間');
            $table->timestamp('end_at')->nullable()->comment('結束時間');
            $table->foreign('user_id')
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
        Schema::dropIfExists('admin');
    }
};
