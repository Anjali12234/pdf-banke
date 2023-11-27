<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Designation\StoreDesignationRequest;
use App\Http\Requests\Designation\UpdateDesignationRequest;
use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index(Designation $designation)
    {
        $designations = Designation::latest()->paginate(10);
        return view('admin.designation.index',compact('designations','designation'));
    }

   
    public function store(StoreDesignationRequest $request)
    {
        Designation::create($request->validated());
        toast( __('Designation added successfully'),'success');
        return redirect(route('admin.designation.index'));
    }

    public function edit(Designation $designation)
    {
        return view('admin.designation.edit',compact('designation'));
    }

   
    public function update( UpdateDesignationRequest $request, Designation $designation )
    {
        $designation->update($request->validated());
        toast( __('Designation updated successfully'),'success');
        return redirect(route('admin.designation.index'));
    }

   
    public function destroy(Designation $designation)
    {
        $designation->delete();
        toast( __('Designation deleted successfully'),'success');
        return back();
    }
}
