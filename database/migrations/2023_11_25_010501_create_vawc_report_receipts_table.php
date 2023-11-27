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
        Schema::create('vawc_report_receipts', function (Blueprint $table) {
            $table->id();

            $table->string('reporter_name');
            $table->string('reporter_address');
            $table->date('incident_datetime');
            $table->date('incident_place');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vawc_report_receipts');
    }
};
