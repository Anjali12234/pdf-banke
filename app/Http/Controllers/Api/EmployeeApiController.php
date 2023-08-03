<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\StoreEmployeeRequest;
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
