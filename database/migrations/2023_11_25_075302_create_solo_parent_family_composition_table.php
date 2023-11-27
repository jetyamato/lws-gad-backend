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
        Schema::create('solo_parent_family_composition', function (Blueprint $table) {
            $table->id();

            $table->foreignId('solo_parent_id');
            $table->string('name');
            $table->string('relation_to_solo_parent');
            $table->unsignedTinyInteger('age');
            $table->string('status');
            $table->string('educational_attainment');
            $table->decimal('monthly_income', 11, 2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solo_parent_family_composition');
    }
};
