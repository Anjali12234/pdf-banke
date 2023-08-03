<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfficeDetail\StoreOfficeDetailRequest;
use App\Http\Requests\OfficeDetail\UpdateOfficeDetailRequest;
use App\Models\OfficeDetail;
use Illuminate\Http\Request;

class OfficeDetailController extends Controller
{
    
    public function index()
    {
        $officeDetails = OfficeDetail::latest()->paginate(10);
        return view('admin.officeDetail.index',compact('officeDetails'));
    }

    
    public function create(OfficeDetail $officeDetail)
    {
        return view('admin.officeDetail.create',compact('officeDetail'));
    }

    
    public function store(StoreOfficeDetailRequest $request)
    {
        OfficeDetail::create($request->validated());
        toast('OfficeDetail added successfully','success');
        return redirect(route('admin.officeDetail.index'));
    }


    public function edit(OfficeDetail $officeDetail)
    {
        return view('admin.officeDetail.edit',compact('officeDetail'));
    }

  
    public function update(UpdateOfficeDetailRequest $request, OfficeDetail $officeDetail)
    {
        $officeDetail->update($request->validated());
        toast('OfficeDetail updated successfully','success');
        return redirect(route('admin.officeDetail.index'));
    }

    public function destroy(OfficeDetail $officeDetail)
    {
        $officeDetail->delete();
        return back();
    }

    public function updateStatus(OfficeDetail $officeDetail)
    {
        $officeDetail->update([
            'status' => !$officeDetail->status
        ]);
        toast('Status updated successfully', 'success');
        return back();
    }
}
