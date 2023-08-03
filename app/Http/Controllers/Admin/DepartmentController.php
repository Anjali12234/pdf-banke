<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Department\StoreDepartmentRequest;
use App\Http\Requests\Department\UpdateDepartmentRequest;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    
    public function index(Department $department)
    {
        $departments = Department::latest()->paginate(10);
        return view('admin.department.index',compact('departments','department'));
    }

   
    public function store(StoreDepartmentRequest $request)
    {
        Department::create($request->validated());
        toast('Department added successfully','success');
        return redirect(route('admin.department.index'));
    }

  
    public function edit(Department $department)
    {
        return view('admin.department.edit',compact('department'));
    }

   
    public function update( UpdateDepartmentRequest $request, Department $department )
    {
        $department->update($request->validated());
        toast('Department updated successfully','success');
        return redirect(route('admin.department.index'));
    }

   
    public function destroy(Department $department)
    {
        $department->delete();
        toast('Department deleted successfully','success');
        return back();
    }
}
