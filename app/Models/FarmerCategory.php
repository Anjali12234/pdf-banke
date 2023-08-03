<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FarmerCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'english_title',
        'slug',
        'position',
        'status'
    ];

    public function farmerLists()
    {
        return $this->hasMany(FarmerList::class);
    }
}
