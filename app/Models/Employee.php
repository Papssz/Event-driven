<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'emp_num',
        'firstname',
        'middlename',
        'lastname',
        'address_line',
        'brgy',
        'province',
        'country',
        'zipcode',

    ];

    public function assignDesignation()
    {
        return $this->hasOne(AssignDesignation::class, 'emp_num', 'emp_num');
    }
}
