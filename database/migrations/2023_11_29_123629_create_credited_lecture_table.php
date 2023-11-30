<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('credited_lecture', function (Blueprint $table) {
            $table->id();
            $table->dateTime('credited_datetime');
            $table->foreignId('student_id');
            $table->foreignId('lecture_id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credited_lecture');
    }
};
