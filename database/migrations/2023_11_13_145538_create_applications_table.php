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
            $table->unsignedBigInteger('fuel_id')->nullable();  //selectedFuel
            $table->unsignedBigInteger('color_1_id')->nullable(); //selectedColor_1
            $table->unsignedBigInteger('color_2_id')->nullable(); //selectedColor_2
            $table->unsignedBigInteger('shape_id')->nullable(); //selectedChassis
            $table->unsignedBigInteger('note_id')->nullable(); //selectedNote
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
            $table->string('approval_number')->nullable();
            $table->boolean('has_certificate')->default(false);
            $table->dateTime('approval_date')->default(now())->nullable();
            $table->string('cert_issued_by')->nullable();

            // Certificate fields

            $table->dateTime('cert_date')->default(now())->nullable();
            $table->string('variant')->nullable();
            $table->string('edition')->nullable();
            $table->unsignedInteger('selected_production_year')->nullable()->digits(4);
            $table->unsignedInteger('const_total_mass')->nullable();
            $table->unsignedInteger('legal_total_mass')->nullable();
            $table->unsignedInteger('legal_total_group_mass')->nullable();
            $table->unsignedInteger('vehicle_mass')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('application_mark_mkd')->nullable();
            $table->string('application_mark_eu')->nullable();
            $table->string('coc_number')->nullable();
            $table->unsignedTinyInteger('number_of_axles')->nullable()->digitsBetween(0, 9);
            $table->string('allowed_pneumatics')->nullable();
            $table->unsignedInteger('length')->nullable();
            $table->unsignedInteger('width')->nullable();
            $table->unsignedInteger('height')->nullable();
            $table->unsignedInteger('axel_mass_distibution_1')->nullable();
            $table->unsignedInteger('axel_mass_distibution_2')->nullable();
            $table->unsignedInteger('axel_mass_distibution_3')->nullable();
            $table->unsignedInteger('axel_mass_distibution_4')->nullable();
            $table->unsignedInteger('axel_mass_distibution_5')->nullable();
            $table->unsignedInteger('connection_point_mass_distibution')->nullable();
            $table->unsignedInteger('max_structural_axle_load_1')->nullable();
            $table->unsignedInteger('max_structural_axle_load_2')->nullable();
            $table->unsignedInteger('max_structural_axle_load_3')->nullable();
            $table->unsignedInteger('max_structural_axle_load_4')->nullable();
            $table->unsignedInteger('max_structural_axle_load_5')->nullable();
            $table->unsignedInteger('max_connection_point_load')->nullable();
            $table->unsignedInteger('braked_trailer_max_mass')->nullable();
            $table->unsignedInteger('unbraked_trailer_max_mass')->nullable();
            $table->unsignedInteger('trailer_connection_point_max_load')->nullable();
            $table->string('plugin_device_approval_mark')->nullable();
            $table->unsignedInteger('engine_volume')->nullable();
            $table->unsignedInteger('engine_power')->nullable();
            $table->unsignedInteger('engine_revolutions')->nullable();
            $table->string('power_mass_distribution')->nullable();
            $table->unsignedInteger('number_of_seats')->nullable();
            $table->unsignedInteger('number_of_standing_places')->nullable();
            $table->unsignedInteger('number_of_lie_down_places')->nullable();
            $table->unsignedInteger('max_speed')->nullable();
            $table->unsignedInteger('stationary_noise_level')->nullable();
            $table->string('noise_at_rpm')->nullable();
            $table->unsignedInteger('co2')->nullable();
            $table->text('cert_note_text')->nullable();



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
            $table->foreign('color_1_id')->references('id')->on('colors');
            $table->foreign('color_2_id')->references('id')->on('colors');
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
