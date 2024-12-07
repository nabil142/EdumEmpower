<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('lastname')->nullable();
            $table->string('address')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('work_experience')->nullable();
            $table->string('AcademicAchievement')->nullable();
            $table->string('SkillsMastered')->nullable();
            $table->string('CompletedCourses')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['lastname', 'address', 'contact_number', 'city', 'state', 'work_experience','AcademicAchievement', 'SkillsMastered', 'CompletedCourses',]);
        });
    }
};
