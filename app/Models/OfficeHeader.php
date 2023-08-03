<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficeHeader extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'english_title',
        'position',
        'font_color',
        'font_size',
        'font_family'
    ];
}
