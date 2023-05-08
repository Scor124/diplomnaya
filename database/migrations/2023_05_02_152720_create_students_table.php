<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('UserID')->unique();
            $table->integer('Class');
            $table->date('Studying_since');
            /**
            $table->foreign('UserID')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('Class')
                ->references('id')->on('classes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
             */
            });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
