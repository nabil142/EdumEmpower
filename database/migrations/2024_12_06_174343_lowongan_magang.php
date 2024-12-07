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
        Schema::table('LowonganMagang', function (Blueprint $table){
        $table->id();
        $table->string('LogoImage')->nullable();
        $table->string('CompanyName')->nullable();
        $table->string('DatePublish')->nullable();
        $table->string('JobCategory')->nullable();
        $table->string('JobLocation')->nullable();
        $table->string('Salary')->nullable();
        $table->string('MinimumQualification')->nullable();
        $table->string('PreferredQualification')->nullable();
        $table->string('AbouttheJob')->nullable();
        $table->string('LocationImage')->nullable();
        $table->string('LocationSelect')->nullable();
    });
}
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
