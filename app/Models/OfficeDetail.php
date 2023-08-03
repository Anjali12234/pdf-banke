<?php

namespace App\Models;

use App\Enums\OfficeDetailTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OfficeDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'type',
        'english_title',
        'slug',
        'position',
        'description',
        'english_description',
        'status'
    ];

    protected $casts=[
        OfficeDetailTypeEnum::class
    ];
}
