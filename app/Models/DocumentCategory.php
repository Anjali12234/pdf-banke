<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentCategory extends Model
{
    use HasFactory, SoftDeletes;
  
    protected $fillable = [
        'title',
        'english_title',
        'slug',
        'position',
        'status'
    ];

    public function documentLists()
    {
        return $this->hasMany(DocumentList::class);
    }
}
