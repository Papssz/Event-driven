<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGovernmentContributionsTable extends Migration
{
    public function up()
    {
        Schema::create('government_contributions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->onDelete('cascade');
            $table->decimal('sss', 10, 2);
            $table->decimal('pag_ibig', 10, 2);
            $table->decimal('philhealth', 10, 2);
            $table->string('tin');
            $table->date('date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('government_contributions');
    }
}

