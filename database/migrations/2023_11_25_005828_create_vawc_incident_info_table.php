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
        Schema::create('vawc_incident_info', function (Blueprint $table) {
            $table->id();

            $table->date('incident_date');
            $table->string('incident_place');
            $table->text('incident_narrative');
            $table->string('incident_photo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vawc_incident_info');
    }
};
