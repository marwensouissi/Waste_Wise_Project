<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waste_tips', function (Blueprint $table) {
            $table->id();
            $table->string('title'); 
            $table->text('content'); 
            $table->string('author')->nullable();
            $table->date('Creation_date')->nullable();
            $table->foreignId('advice_type_id')->constrained()->onDelete('cascade');
            $table->string('image')->nullable(); 
            $table->timestamps(); 
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('waste_tips');
    }
};
