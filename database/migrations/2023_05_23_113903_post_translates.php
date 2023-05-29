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
        Schema::create('post_translates',function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('post_id');
            $table->string('language_code',5);
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('language_code')->references('language_code')->on('languages')->onDelete('cascade');
            $table->string('title',255);
            $table->text('content');
            $table->string('description',2000);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
