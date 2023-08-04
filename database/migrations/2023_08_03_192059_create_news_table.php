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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title',50);
            $table->text('description');
            $table->integer('create_by');
            $table->string('image_1',250);
            $table->string('image_2',250)->nullable();
            $table->string('image_3',250)->nullable();
            $table->string('image_4',250)->nullable();
            $table->foreignId("catogry_id")->constrained('catogries')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
