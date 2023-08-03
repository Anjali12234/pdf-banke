<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsList extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'title',
        'english_title',
        'slug',
        'news_category_id',
        'publisher',
        'english_publisher',
        'publish_date',
        'status'
    ];

    public function newsCategory()
    {
        return $this->belongsTo(NewsCategory::class);
    }
    public function files()
    {
        return $this->morphMany(File::class, 'model');
    }
}
