<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class Designation extends Model
{
    use HasFactory;

    protected $fillable = ['designation_name', 'department_id', 'status'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    protected static function boot()
    {
        parent::boot();

        // Listen for the created event
        static::created(function ($designation) {
            // Create a corresponding entry in the departments table
            Department::create([
                'department_name' => $designation->designation_name,
                'status' => $designation->status,
            ]);
        });
    }
}
