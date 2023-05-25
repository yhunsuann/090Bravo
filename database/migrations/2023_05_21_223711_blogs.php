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
        Schema::create('blogs',function(Blueprint $table){
            $table->increments('id');
            $table->string('image',50);
            $table->enum('status',['Active','InActive']);
            $table->timestamp('created_at'); 
            $table->timestamp('updated_at'); 
            $table->softDeletes();
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
