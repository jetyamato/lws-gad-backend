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
        Schema::create('vawc_victims', function (Blueprint $table) {
            $table->id();

            $table->string('photo');

            $table->string('contact_number');
            $table->string('relation_to_suspect');
            $table->string('id_presented');
            
            $table->string('pronouns');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('name_extension');
            $table->string('nickname');

            $table->string('citizenship');
            $table->string('gender');
            $table->string('civil_status');
            $table->date('birthdate');

            $table->unsignedTinyInteger('age');
            $table->string('birthplace');
            $table->string('educational_attainment');
            $table->string('educational_status');
            $table->string('school');
            $table->string('occupation');

            $table->string('classification');

            $table->string('parent_guardian_name');
            $table->string('parent_guardian_occupation');
            $table->string('parent_guardian_marital_status');
            $table->string('parent_guardian_contact_number');

            $table->boolean('addressInQC');

            $table->string('house_street_village_sitio');
            $table->string('district');
            $table->string('barangay');
            $table->string('town_or_city');
            $table->string('province');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vawc_victims');
    }
};
