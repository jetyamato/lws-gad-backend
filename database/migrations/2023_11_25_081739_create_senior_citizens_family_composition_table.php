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
        Schema::create('senior_citizens_family_composition', function (Blueprint $table) {
            $table->id();

            $table->foreignId('senior_citizen_id');
            $table->string('name');
            $table->string('relation_to_senior_citizen');
            $table->unsignedTinyInteger('age');
            $table->string('civil_status');
            $table->decimal('income', 11, 2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('senior_citizens_family_composition');
    }
};
