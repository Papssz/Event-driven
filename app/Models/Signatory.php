<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Signatory extends Model
{
    protected $fillable = ['employee_id', 'highersuperior', 'status'];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function higherSuperiorEmployee()
    {
        return $this->belongsTo(Employee::class, 'highersuperior');
    }
}

