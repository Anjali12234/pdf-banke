<?php

use App\Models\DownloadCategory;
use App\Models\Link;
use App\Models\NewsCategory;
use App\Models\OfficeDetail;
use App\Models\OfficeHeader;
use App\Models\OfficeSetting;
use Illuminate\Support\Facades\Cache;

if (!function_exists('officeSetting')) {
    function officeSetting()
    {
        return Cache::rememberForever('office_setting', function () {
            return OfficeSetting::with('informationOfficerId', 'officeChiefId')->latest()->first();
        });
    }
}
if (!function_exists('links')) {
    function links()
    {
        return Link::latest()->limit(5)->get();
    }
}
if (!function_exists('downloadCategory')) {
    function downloadCategorys()
    {
        return DownloadCategory::all();
    }
}
if (!function_exists('newsCategory')) {
    function newsCategorys()
    {
        return NewsCategory::all();
    }
}

if (!function_exists('officeDetail')) {
    function officeDetails()
    {
        return OfficeDetail::all();
    }
}
if (!function_exists('officeHeader')) {
    function officeHeaders()
    {
        return OfficeHeader::orderBy('position')->get();
    }
}

