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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->comment('意見回饋標題');
            $table->string('content', 100)->comment('意見回饋內容');
            $table->string('email', 120)->unique()->comment('學校信箱，pu.edu.tw');
            $table->integer('status')->comment('未解決的回饋(0)、已解決的回饋(1)、已婉拒的回饋(2)');
            $table->integer('category')->comment('外部使用者回饋建議(0)、購書後的回饋(1)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback');
    }
};
