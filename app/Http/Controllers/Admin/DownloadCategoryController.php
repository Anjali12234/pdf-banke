<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DownloadCategory\StoreDownloadCategoryRequest;
use App\Http\Requests\DownloadCategory\UpdateDownloadCategoryRequest;
use App\Models\DownloadCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DownloadCategoryController extends Controller
{
   
    public function index(DownloadCategory $downloadCategory)
    {
        $downloadCategorys = DownloadCategory::latest()->paginate(10);
        return view('admin.downloadCategory.index',compact('downloadCategorys','downloadCategory'));
    }

   
    public function store(StoreDownloadCategoryRequest $request)
    {
        $downloadCategory = DownloadCategory::create($request->validated());
        toast('Download Category added successfully','success');
        return back();
    }

   
    public function edit(DownloadCategory $downloadCategory)
    {
        return view('admin.downloadCategory.edit',compact('downloadCategory'));
    }

    public function update(UpdateDownloadCategoryRequest $request, DownloadCategory $downloadCategory)
    {
        $downloadCategory->update($request->validated());
        toast('download category updated successfully','success');
        return redirect(route('admin.downloadCategory.index'));
    }

  
    public function destroy(DownloadCategory $downloadCategory)
    {
        $downloadCategory->delete();
        toast('download category deleted successfully','success');
        return back();
    }

    public function updateStatus(DownloadCategory $downloadCategory)
    {
        $downloadCategory->update([
            'status' => !$downloadCategory->status
        ]);

        toast('Status updated successfully', 'success');
        return back();
    }
}
