<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('takes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('student_id');

            $table->foreignId('course_id')
                ->constrained('courses');

            $table->foreign('student_id')
                ->references('university_id')
                ->on('students')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('takes');
    }
};