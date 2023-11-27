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
        Schema::create('pwd_persons', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->string('registration_number');

            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');

            $table->enum('disability', 
                [
                    'psychological',
                    'mental',
                    'hearing',
                    'chronic',
                    'visual',
                    'speech',
                    'learning',
                    'orthopedic',
                    'multiple'
                ]
            );

            $table->string('house_street_village_sitio');
            $table->string('barangay');
            $table->string('municipality');
            $table->string('region');
            $table->string('province');

            $table->string('telephone_number');
            $table->string('mobile_number');
            $table->string('email_address');
            $table->date('birthdate');
            $table->string('gender');
            $table->string('nationality');
            $table->string('blood_type');

            $table->string('civil_status');
            $table->string('educational_attainment');
            $table->string('employment_status');
            $table->string('nature_of_employer');
            $table->string('type_of_employment');
            $table->string('type_of_skill');

            $table->string('sss_number')->nullable();
            $table->string('gsis_number')->nullable();
            $table->string('philhealth_number')->nullable();
            $table->boolean('philhealth_dependent')->nullable();

            $table->string('organization_name')->nullable();
            $table->string('organization_contact_person')->nullable();
            $table->string('organization_address')->nullable();
            $table->string('organization_telephone_number')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pwd_persons');
    }
};
