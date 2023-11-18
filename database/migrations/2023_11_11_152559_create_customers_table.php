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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('local_department_id');
            $table->unsignedBigInteger('customer_type_id');
            $table->unsignedBigInteger('city_id');
            $table->string('customer_name')->nullable();
            $table->string('embg')->unique()->nullable();
            $table->string('embs')->unique()->nullable();
            $table->string('id_number')->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->decimal('discount', 5, 2)->nullable()->default(0.00);
            $table->string('note');
            $table->timestamps();

            $table->foreign('local_department_id')->references('id')->on('local_departments');
            $table->foreign('customer_type_id')->references('id')->on('customer_types');
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
