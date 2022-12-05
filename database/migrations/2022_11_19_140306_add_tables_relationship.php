<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('department_id')->constrained();
        });

        Schema::table('tasks', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });

        Schema::table('work_times', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });

        Schema::table('absences', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });

        Schema::table('rates', function (Blueprint $table) {
            $table->foreignId('rated_user_id')->constrained()->on('users');
            $table->foreignId('rater_user_id')->constrained()->on('users');
        });
    }
};
