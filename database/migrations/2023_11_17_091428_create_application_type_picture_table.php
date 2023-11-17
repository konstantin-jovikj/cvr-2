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
        Schema::create('application_type_picture', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('application_type_id');
            $table->unsignedBigInteger('picture_id');
            $table->string('picture_path')->nullable();
            $table->timestamps();

            $table->foreign('application_type_id')->references('id')->on('application_types');
            $table->foreign('picture_id')->references('id')->on('pictures');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_type_picture');
    }
};
