<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\StoreEmployeeRequest;
use App\Http\Requests\Employee\UpdateEmployeeRequest;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
    public function index()
    {
        $employees = Employee:: with('department','designation')->latest()->paginate(10);
        return view('admin.employee.index',compact('employees'));
    }

    
    public function create(Employee $employee)
    {
        $designations = Designation::all();
        $departments = Department::all();
        return view('admin.employee.create',compact('designations','departments','employee'));
    }

   
    public function store(StoreEmployeeRequest $request)
    {
        Employee::create($request->validated());
        toast('Employee added successsfully','success');
        return redirect(route('admin.employee.index'));
    }

   
    public function edit(Employee $employee)
    {
        $designations = Designation::all();
        $departments = Department::all();
        return view('admin.employee.edit',compact('employee','designations','departments'));
    }

    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        if ($request->hasFile('image') && $employee->image) {
            $this->deleteFile($employee->image);
        }
        $employee->update($request->validated());
        toast('Employee updated successfully','success');
        return redirect(route('admin.employee.index'));

    }

   
    public function destroy(Employee $employee)
    {
        $this->deleteFile($employee->image);

        $employee->delete();
        toast('Employee is deleted successfully','success');
        return back();
    }
}
