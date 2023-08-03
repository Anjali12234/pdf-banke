<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class OfficeSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'office_name',
        'office_english_name',
        'office_address',
        'office_english_address',
        'office_phone',
        'office_email',
        'office_cover_photo',
        'office_logo',
        'flag',
        'office_ad_photo',
        'office_chief_id',
        'information_officer_id',
        'map_url',
        'facebook_url',
        'twiter_url',

    ];

    protected function officeLogo(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Storage::disk('public')->url($value),
            set: fn ($value) => $value->store('setting','public'),
        );
    }
    protected function flag(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Storage::disk('public')->url($value),
            set: fn ($value) => $value->store('setting','public'),
        );
    }
    protected function officeCoverPhoto(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Storage::disk('public')->url($value),
            set: fn ($value) => $value->store('cover','public'),
        );
    }
 
    protected function officeAdPhoto(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn ($value) => $value ? $value->store('office', 'public') : null,
        );
    }
   
   
    

    public function officeChiefId()
    {
        return $this->belongsTo(Employee::class, 'office_chief_id');
    }

    public function informationOfficerId()
    {
        return $this->belongsTo(Employee::class, 'information_officer_id');
    }
}
