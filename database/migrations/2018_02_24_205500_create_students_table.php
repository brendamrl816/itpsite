<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
        $table->increments('id');
        $table->string('firstname');
        $table->string('lastname');
        $table->string('email')->nullable();
        $table->date('dob');
        $table->bigInteger('phone');
        $table->string('parents')->nullable();
        $table->string('pic')->nullable();
        $table->string('idform')->nullable();
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
        Schema::drop('students');
    }
}

