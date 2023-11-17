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
            $table->unsignedBigInteger('app_type_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('mediator_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('manufacturer_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('confirmation_id');
            // $table->unsignedBigInteger('attached_doc_id');
            $table->unsignedBigInteger('modification_id');
            $table->unsignedBigInteger('mod_or_rep_id');
            $table->unsignedBigInteger('vehicle_type_id');
            $table->unsignedBigInteger('fuel_id');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('shape_id');
            $table->unsignedBigInteger('note_id');

            $table->string('vin_number')->unique();
            $table->string('engine_type');
            $table->string('engine_number')->unique();
            $table->boolean('is_correction');
            $table->string('is_change')->nullable();
            $table->string('note')->nullable();
            $table->string('agreed_price')->nullable();
            $table->string('reg_number');
            $table->string('mod_repair_note')->nullable();
            $table->string('traffic_permit_nr')->nullable();
            $table->string('production_year')->nullable();
            $table->string('application_number')->nullable();
            $table->date('application_date')->nullable();
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
            // $table->foreign('attached_doc_id')->references('id')->on('attachment_documents');
            $table->foreign('modification_id')->references('id')->on('modification_types');
            $table->foreign('mod_or_rep_id')->references('id')->on('modified_or_repaireds');
            $table->foreign('vehicle_type_id')->references('id')->on('vehicle_types');
            $table->foreign('fuel_id')->references('id')->on('fuels');
            $table->foreign('color_id')->references('id')->on('colors');
            $table->foreign('shape_id')->references('id')->on('shapes');
            $table->foreign('note_id')->references('id')->on('notes');
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
