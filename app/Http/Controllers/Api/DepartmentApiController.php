<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Department\StoreDepartmentRequest;
use App\Http\Requests\Department\UpdateDepartmentRequest;
use App\Http\Resources\DepartmentResource;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentApiController extends Controller
{
    
    public function index()
    {
       return response()->json([
        'department'=> Department::get()
       ]);
    }

  
    public function store(StoreDepartmentRequest $request)
    {
       $department = Department::create($request->validated());
        return new DepartmentResource($department);
    }

  
    public function show(Department $department)
    {
        return response()->json(['department' => $department]);
        
    }

  
    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        $department->update($request->all());
        return new DepartmentResource($department);
    }

 
    public function destroy(Department $department)
    {
        $department->delete();
        return response()->json([
            'message' => 'deleted successfully',
            'status' => 'success'
        ]);
    }
}
