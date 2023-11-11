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
        Schema::create('finding_tables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('category_note')->nullable();
            $table->string('number')->nullable();
            $table->string('tsv_tech_spec')->nullable();
            $table->string('tech_spec_content')->nullable();
            $table->string('ece_regulation')->nullable();
            $table->string('eec_directive')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finding_tables');
    }
};
