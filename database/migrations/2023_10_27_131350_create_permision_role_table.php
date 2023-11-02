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
        Schema::create('permision_role', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('permision_id')->onDelete('cascade');
            $table->unsignedBigInteger('role_id')->onDelete('cascade');
            $table->timestamps();

            $table->foreign('permision_id')->references('id')->on('permisions');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permision_role');
    }
};
