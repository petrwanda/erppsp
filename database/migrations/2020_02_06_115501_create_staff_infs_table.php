<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffInfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_infs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('serial_no');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('location');
            $table->date('dob');
            $table->integer('facult_id');
            $table->integer('department_id');
            $table->string('role');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_infs');
    }
}
