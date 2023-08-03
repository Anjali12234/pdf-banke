<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DownloadCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'english_title',
        'slug',
        'status',
        'position'
    ];
 
    public function downloadLists()
    {
        return $this->hasMany(DownloadList::class);
    }
}
