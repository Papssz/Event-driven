<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('assign_designations', function (Blueprint $table) {
            $table->id();
            $table->string('emp_num', 255);
            $table->foreign('emp_num')->references('emp_num')->on('employees')->onDelete('cascade');
            $table->foreignId('designation_id')->constrained('designations');
            $table->enum('employee_type', ['R', 'PT', 'PB', 'D']);
            $table->enum('status', ['active', 'resigned', 'AWOL']);
            $table->timestamps();
        });
    }
    
    
    public function down(): void
    {
        Schema::dropIfExists('assign_designations');
    }
};
