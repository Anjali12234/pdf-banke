<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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

  
    public function store(Request $request)
    {
        //
    }

  
    public function show(Department $department)
    {
        //
    }

  
    public function update(Request $request, Department $department)
    {
        //
    }

 
    public function destroy(Department $department)
    {
        //
    }
}
