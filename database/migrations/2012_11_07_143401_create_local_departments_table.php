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
        Schema::create('local_departments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_id');
            // $table->unsignedBigInteger('city_id');
            $table->string('local_department_name');
            $table->string('cert_no')->nullable();
            $table->string('local_department_prefix')->nullable();
            $table->string('department_address');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('loc_dep_dsc')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();

            $table->foreign('department_id')->references('id')->on('departments');
            // $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('local_departments');
    }
};
