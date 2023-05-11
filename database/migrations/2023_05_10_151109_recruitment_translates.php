<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recruitment_translates',function(Blueprint $table){
            $table->increments('id');
            $table->string('language_code',5);
            $table->unsignedInteger('recruitment_id');
            $table->foreign('recruitment_id')->references('id')->on('recruitments')->onDelete('cascade');
            $table->string('title',255);
            $table->string('content',255);
            $table->string('description',255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recruitment_translates', function (Blueprint $table) {
            $table->dropForeign(['recruitment_id']);
            $table->dropColumn('recruitment_id');
        });
        Schema::dropIfExists('recruitment_translates');
    }
};
