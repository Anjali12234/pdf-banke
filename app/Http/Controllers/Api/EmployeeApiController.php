<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\StoreEmployeeRequest;
use App\Http\Requests\Employee\UpdateEmployeeRequest;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeApiController extends Controller
{
   
    public function index()
    {
        return response()->json([
            'employee' => Employee::all()
        ]);
    }

   
    public function store(StoreEmployeeRequest $request)
    {
       $employee = Employee::create($request->all());
        return new EmployeeResource($employee);
    }

    
    public function show(Employee $employee)
    {
        return response()->json(['employee' => $employee]);
    }

   
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());
        return new EmployeeResource($employee);
    }

   
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return response()->json([
            'message' => 'deleted successfully',
            'status' => 'success'
        ]);
    }
}
