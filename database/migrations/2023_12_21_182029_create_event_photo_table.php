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
        Schema::create('event_photo', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->comment('活動照片');
            $table->unsignedBigInteger('event_id')->comment('活動公告 id');
            $table->foreign('event_id')
                ->references('id')
                ->on('event');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_photo');
    }
};
