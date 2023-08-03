<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;


class Employee extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'image',
        'name',
        'department_id',
        'designation_id',
        'email',
        'phone',
        'address',
        'position'
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Storage::disk('public')->url($value),
            set: fn ($value) => $value->store('employee','public'),
        );
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
    public function designation()
    {
        return $this->belongsTo(Designation::class, 'designation_id');
    }
   
}
