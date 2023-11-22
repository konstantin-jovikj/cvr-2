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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('app_type_id')->nullable();
            $table->dateTime('app_date')->default(now())->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->unsignedBigInteger('mediator_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('manufacturer_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->unsignedBigInteger('type_id')->nullable();
            $table->unsignedBigInteger('confirmation_id')->nullable();
            // $table->unsignedBigInteger('attached_doc_id');
            $table->unsignedBigInteger('modification_id')->nullable();
            $table->unsignedBigInteger('mod_or_rep_id')->nullable();
            $table->unsignedBigInteger('vehicle_type_id')->nullable();
            $table->unsignedBigInteger('fuel_id')->nullable();
            $table->unsignedBigInteger('color_id')->nullable();
            $table->unsignedBigInteger('shape_id')->nullable();
            $table->unsignedBigInteger('note_id')->nullable();
            $table->unsignedBigInteger('correction_id')->nullable();
            $table->unsignedBigInteger('legalisation_id')->nullable();

            $table->string('app_number')->nullable();
            $table->string('vin_number')->nullable();
            $table->string('engine_type')->nullable();
            $table->string('engine_number')->nullable();
            $table->string('is_change')->nullable();
            $table->string('note')->nullable();
            $table->string('agreed_price')->nullable();
            $table->string('reg_number')->nullable();
            $table->string('mod_repair_note')->nullable();
            $table->string('traffic_permit_nr')->nullable();
            $table->string('production_year')->nullable();
            $table->string('approval_number')->nullable();
            $table->dateTime('approval_date')->default(now())->nullable();
            $table->string('cert_issued_by')->nullable();



            $table->timestamps();

            $table->foreign('app_type_id')->references('id')->on('application_types');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('mediator_id')->references('id')->on('mediators');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('confirmation_id')->references('id')->on('confirmation_types');
            $table->foreign('modification_id')->references('id')->on('modification_types');
            $table->foreign('mod_or_rep_id')->references('id')->on('modified_or_repaireds');
            $table->foreign('vehicle_type_id')->references('id')->on('vehicle_types');
            $table->foreign('fuel_id')->references('id')->on('fuels');
            $table->foreign('color_id')->references('id')->on('colors');
            $table->foreign('shape_id')->references('id')->on('shapes');
            $table->foreign('note_id')->references('id')->on('notes');
            $table->foreign('correction_id')->references('id')->on('corrections');
            $table->foreign('legalisation_id')->references('id')->on('legalisations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
