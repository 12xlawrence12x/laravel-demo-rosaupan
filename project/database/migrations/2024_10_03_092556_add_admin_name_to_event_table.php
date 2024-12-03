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
        Schema::table('event', function (Blueprint $table) {
            $table->string('adminName')->after('event_date');
        });


        // $table->foreign('job_id')->references('id')->on('job_title_')->onDelete('restrict');
        // $table->foreign('country_id')->references('id')->on('country_')->onDelete('restrict');
        // $table->foreign('department_id')->references('id')->on('department_')->onDelete('restrict');
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('event', function (Blueprint $table) {
            //
        });
    }
};
