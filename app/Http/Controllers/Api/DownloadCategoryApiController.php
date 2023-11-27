<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DownloadCategory\StoreDownloadCategoryRequest;
use App\Http\Requests\DownloadCategory\UpdateDownloadCategoryRequest;
use App\Http\Resources\DownloadCategoryResource;
use App\Models\DownloadCategory;
use Illuminate\Http\Request;

class DownloadCategoryApiController extends Controller
{
    
    public function index()
    {
        return response()->json([
            'downloadList' => DownloadCategory::get()
        ]);
    }

    
    public function store(StoreDownloadCategoryRequest $request)
    {
        $documentList = DownloadCategory::create($request->validated());
        return response()->json([
            'message' => 'Download Category Created Successfully',
            'data' => DownloadCategoryResource::make($documentList)
        ], 201);
    }

   
    public function show(DownloadCategory $downloadCategory)
    {
        return DownloadCategoryResource::make($downloadCategory);
    }

    
    public function update(UpdateDownloadCategoryRequest $request, DownloadCategory $downloadCategory)
    {
        $downloadCategory->update($request->validated());
        return response()->json([
            'message' => 'Download Category Updated Successfully',
            'data' => DownloadCategoryResource::make($downloadCategory)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DownloadCategory $downloadCategory)
    {
        $downloadCategory->delete();

        return response()->json([
            'message' => 'Download Category Deleted Successfully'
        ]);
    }
}
