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
        Schema::create('pwd_family_composition', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pwd_person_id');
            $table->string('name');
            $table->string('relation_to_pwd_person');
            $table->unsignedTinyInteger('age');
            $table->string('occupation');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pwd_family_composition');
    }
};
