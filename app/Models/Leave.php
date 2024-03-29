<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    protected $fillable = ['employee_id', 'start_leave', 'end_leave', 'leave_type', 'status'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
