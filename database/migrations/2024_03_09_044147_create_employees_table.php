<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('emp_num', 255)->unique();
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('address_line');
            $table->string('brgy');
            $table->string('province');
            $table->string('country');
            $table->string('zipcode');
            $table->timestamps();
        });

        Schema::table('employees', function (Blueprint $table) {
            $table->index('emp_num');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
