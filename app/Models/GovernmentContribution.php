<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GovernmentContribution extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'sss', 'pag_ibig', 'philhealth', 'tin', 'date'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
