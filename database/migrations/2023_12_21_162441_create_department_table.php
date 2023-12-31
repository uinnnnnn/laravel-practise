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
        Schema::create('department', function (Blueprint $table) {
            $table->id();
            $table->string('description', 100)->comment('系名');
            $table->unsignedBigInteger('college_id')->comment('歸屬於哪一個系');
            $table->foreign('college_id')
                ->references('id')
                ->on('college');
        });
        Schema::table('user', function (Blueprint $table) {
            $table->unsignedBigInteger('department_id')->after('line_id')->comment('歸屬於哪一個系');
            $table->foreign('department_id')
                ->references('id')
                ->on('department');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            // Drop foreign key constraint
            $table->dropForeign(['department_id']);
            $table->dropColumn('department_id');
        });
        Schema::dropIfExists('department');
    }
};
