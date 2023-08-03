<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfficeHeader\StoreOfficeHeaderRequest;
use App\Http\Requests\OfficeHeader\UpdateOfficeHeaderRequest;
use App\Models\OfficeHeader;
use Illuminate\Http\Request;

class OfficeHeaderController extends Controller
{   


    public function store(StoreOfficeHeaderRequest $request)
    {
        $inputs = $request->input('addMoreInputFields');

        foreach ($inputs as $input) {
            OfficeHeader::create($input);
        }
        toast('OfficeHeader addedd Successfully', 'success');
        return redirect(route('admin.officesetting.index'));
    }


    public function edit(OfficeHeader $officeHeader)
    {
        return view('admin.officeSetting.officeHeaderEdit',compact('officeHeader'));
    }


    public function update(UpdateOfficeHeaderRequest $request, OfficeHeader $officeHeader)
    {
        $officeHeader->update($request->validated());
        toast('OfficeHeader updated successfully','success');
        return redirect(route('admin.officesetting.index'));
    }


    public function destroy(OfficeHeader $officeHeader)
    {
        $officeHeader->delete();
        toast('Office header deleted successfully','success');
        return back();
    }
}
