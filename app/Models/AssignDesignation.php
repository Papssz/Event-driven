<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignDesignation extends Model
{
    protected $fillable = ['emp_num', 'designation_id', 'employee_type', 'status'];

    public function designation()
    {
        return $this->belongsTo(Designation::class, 'designation_id');
    }
}
