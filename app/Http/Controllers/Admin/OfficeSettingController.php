<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfficeSetting\OfficeSettingRequest;
use App\Models\Employee;
use App\Models\OfficeHeader;
use App\Models\OfficeSetting;
use Illuminate\Support\Facades\Cache;

class OfficeSettingController extends Controller
{
    public function index()
    {
        $officeHeaders = OfficeHeader::latest()->paginate(10);
        $employees = Employee::orderBy('position')->get();
        $officeSetting = officeSetting();
        return view('admin.officeSetting.index', compact('officeSetting', 'employees','officeHeaders'));
    }


    public function store(OfficeSettingRequest $request)
    {
        if ($officeSetting = OfficeSetting::latest()->first()) {
            if ($request->hasFile('office_logo') && $officeLogo = $officeSetting->getRawOriginal('office_logo')) {
                $this->deleteFile($officeLogo);
            }
            if ($request->hasFile('flag') && $flag = $officeSetting->getRawOriginal('flag')) {
                $this->deleteFile($flag);
            }
            if ($request->hasFile('office_ad_photo') && $officeAdPhoto = $officeSetting->getRawOriginal('office_ad_photo')) {
                $this->deleteFile($officeAdPhoto);
            }
            if ($request->hasFile('office_cover_photo') && $coverPhoto= $officeSetting->getRawOriginal('office_cover_photo')) {

                $this->deleteFile($coverPhoto);
            }
            $officeSetting->update($request->validated());
        } else {
            OfficeSetting::create($request->validated());
        }

        Cache::forget('office_setting');

        toast('Office Setting Updated successsfully', 'success');
        return back();
    }
}
