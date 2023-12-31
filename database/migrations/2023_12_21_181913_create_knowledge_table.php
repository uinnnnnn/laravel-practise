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
        Schema::create('knowledge', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->comment('意見回饋標題');
            $table->string('content', 100)->comment('意見回饋內容');
            $table->unsignedBigInteger('knowledge_tag_id')->comment('問題類型');
            $table->timestamps();
            $table->foreign('knowledge_tag_id')
                ->references('id')
                ->on('knowledge_tag');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('knowledge');
    }
};
