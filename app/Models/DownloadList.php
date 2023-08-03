<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class DownloadList extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'english_title',
        'slug',
        'download_category_id',
        'publisher',
        'english_publisher',
        'publish_date',
        'status'
    ];

    public function downloadCategory()
    {
        return $this->belongsTo(DownloadCategory::class);
    }

    public function files()
    {
        return $this->morphMany(File::class, 'model');    
    }
}
