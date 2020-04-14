<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimesheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timesheets', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('project_id');
            $table->datetime('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->float('total_hours',4,2);
            $table->float('effactive',5,2);
            $table->string('task_description');
            $table->float('approve_hours',4,2)->nullable();
            $table->float('approve_effactive',5,2)->nullable();
            $table->integer('update_from_user');
            $table->timestamps();
        });



        Schema::create('stampoftimes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('display_name');
            $table->dateTime('stamp_of_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timesheets');
        Schema::dropIfExists('stampoftimes');
    }
}
