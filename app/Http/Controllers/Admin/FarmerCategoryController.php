<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FarmerCategory\StoreFarmerCategoryRequest;
use App\Http\Requests\FarmerCategory\UpdateFarmerCategoryRequest;
use App\Models\FarmerCategory;
use Illuminate\Http\Request;

class FarmerCategoryController extends Controller
{
    public function index(FarmerCategory $farmerCategory)
    {
        $farmerCategorys = FarmerCategory::latest()->paginate(10);
        return view('admin.farmerCategory.index', compact('farmerCategorys','farmerCategory'));
    }


    public function store(StoreFarmerCategoryRequest $request)
    {
        FarmerCategory::create($request->validated());
        toast('Farmer Category added successfully ', 'success');
        return redirect(route('admin.farmerCategory.index'));
    }

    public function edit(FarmerCategory $farmerCategory)
    {
        return view('admin.farmerCategory.edit', compact('farmerCategory'));
    }


    public function update(UpdateFarmerCategoryRequest $request, FarmerCategory $farmerCategory)
    {
        $farmerCategory->update($request->validated());
        toast('Category added successfully ', 'success');
        return redirect(route('admin.farmerCategory.index'));
    }


    public function destroy(FarmerCategory $farmerCategory)
    {
        $farmerCategory->delete();
        toast('Category deleted successfully', 'success');
        return   back();
    }

    public function updateStatus(FarmerCategory $farmerCategory)
    {
        $farmerCategory->update([
            'status' => !$farmerCategory->status
        ]);

        toast('Status updated successfully', 'success');
        return back();
    }
}
