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
        Schema::create('local_department_roles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('local_department_id');
            $table->unsignedBigInteger('role_id');
            $table->timestamps();

            $table->foreign('local_department_id')->references('id')->on('local_departments');
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('local_department_roles');
    }
};
