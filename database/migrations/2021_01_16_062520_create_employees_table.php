<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id("EmployeeID");
            $table->string("Firstname");
            $table->string("Lastname");
            $table->string("MiddleName");
            $table->string("Address");
            $table->char("Gender");
            $table->date("Birthdate");
            $table->unsignedBigInteger("Position_Code");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
