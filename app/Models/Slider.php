<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
    use HasFactory, SoftDeletes; 
    
    protected $fillable = [
        'title',
        'english_title',
        'image'
    ];

    public function setImageAttribute($value){
        if(!empty($value) && !is_string($value)){
            $this->attributes['image'] = $value->store('slider','public');
        }
    }
    public function getImageUrlAttribute(){
        return $this->attributes['image']  ? Storage::disk('public')->url($this->attributes['image']): '';
    }

   
}
