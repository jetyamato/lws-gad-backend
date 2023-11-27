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
        Schema::create('vawc_reports', function (Blueprint $table) {
            $table->id();
            
            $table->string('report_type');
            $table->string('district');
            $table->string('agency');
            $table->string('sector');

            $table->timestamp('incident_datetime');
            $table->string('report_status');
            $table->string('referral');
            $table->string('incident_type');

            $table->string('referred_by');
            $table->string('disposition');

            $table->foreignId('complainant_id');
            $table->foreignId('suspect_id');
            $table->foreignId('victim_id');
            $table->foreignId('incident_info_id');
            $table->foreignId('receipt_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vawc_reports');
    }
};
