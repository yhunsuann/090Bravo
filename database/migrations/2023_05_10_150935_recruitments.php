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
        Schema::create('recruitments',function(Blueprint $table){
            $table->increments('id');
            $table->string('title',255);
            $table->string('content',255);
            $table->string('description',255);
            $table->string('image',50);
            $table->enum('status',['Active','UnActive','Expired','Closed']);
            $table->timestamp('created_at');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recruitments');
    }
};
