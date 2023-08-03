<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentList extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'title',
        'english_title',
        'slug',
        'document_category_id',
        'publisher',
        'english_publisher',
        'publish_date',
        'status'
    ];
    
    public function documentCategory()
    {
        return $this->belongsTo(DocumentCategory::class);
    }

    public function files()
    {
        return $this->morphMany(File::class, 'model');
    }
}
