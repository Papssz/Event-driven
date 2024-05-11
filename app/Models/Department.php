<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['department_name', 'status'];

    public function designations()
    {
        return $this->hasMany(Designation::class, 'department_id');
    }
}

