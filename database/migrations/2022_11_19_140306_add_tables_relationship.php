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
            $table->foreign('department_id')->references('id')->on('departments'); 
        });
        
        Schema::table('tasks', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users'); 
        });

        Schema::table('work_times', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users'); 
        });

        Schema::table('absences', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users'); 
        });

        Schema::table('rates', function (Blueprint $table) {
            $table->foreign('rated_user_id')->references('id')->on('users'); 
            $table->foreign('rater_user_id')->references('id')->on('users'); 
        });
    }
};
