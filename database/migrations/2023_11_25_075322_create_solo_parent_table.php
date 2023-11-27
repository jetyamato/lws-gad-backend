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
        Schema::create('solo_parent', function (Blueprint $table) {
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
            $table->string('occupation');
            $table->decimal('monthly_income', 11, 2);
            $table->decimal('total_monthly_income', 11, 2);
            $table->string('contact_number');

            $table->text('classification_or_circumstances');
            $table->text('needs_or_problems');
            $table->text('family_resources');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solo_parent');
    }
};
