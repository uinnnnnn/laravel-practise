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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20)->comment('名字');
            $table->integer('student_number')->comment('學號');
            $table->string('email', 120)->unique()->comment('學校信箱，pu.edu.tw');
            $table->timestamp('email_verified_at')->nullable()->comment('信箱驗證時間');
            $table->string('password', 60)->comment('密碼');
            $table->string('line_id')->comment('line 好友');
            $table->timestamp('end_at')->nullable()->comment('凍結時間');
            $table->timestamps();
            $table->softDeletes()->comment('軟刪除時間');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
};
