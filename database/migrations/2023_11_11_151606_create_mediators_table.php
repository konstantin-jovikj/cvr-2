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
        Schema::create('mediators', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('local_department_id')->nullable();
            $table->string('mediator_name')->nullable();
            $table->string('mediator_address')->nullable();
            $table->string('mediator_phone')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();

            $table->foreign('local_department_id')->references('id')->on('local_departments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mediators');
    }
};
