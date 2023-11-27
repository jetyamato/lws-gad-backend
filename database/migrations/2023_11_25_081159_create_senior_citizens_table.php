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
        Schema::create('senior_citizens', function (Blueprint $table) {
            $table->id();

            $table->string('registration_number');

            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');

            $table->date('birthdate');
            $table->unsignedTinyInteger('age');
            $table->string('gender');
            $table->string('birthplace');
            $table->string('address');
            $table->string('telephone_number');
            $table->string('civil_status');
            $table->string('educational_attainment');
            $table->string('occupation');
            $table->decimal('annual_income', 11, 2);
            $table->string('other_skills');

            $table->string('association_name');
            $table->string('association_address');
            $table->date('membership_date');
            $table->string('association_position');
            $table->date('election_date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('senior_citizens');
    }
};
