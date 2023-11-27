<?php

namespace App\Http\Controllers\Api;

use App\Models\DocumentCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DocumentCategory\StoreDocumentCategory;
use App\Http\Requests\DocumentCategory\UpdateDocumentCategory;
use App\Http\Resources\DocumentCategoryResource;

class DocumentCategoryApiController extends Controller
{
    public function index()
    {
        return response()->json([
            'documentCategory' => DocumentCategory::get()
        ]);
    }

    public function store(StoreDocumentCategory $request)
    {
        $documentCategory = DocumentCategory::create($request->validated());
        return new DocumentCategoryResource($documentCategory);
    }

    
    public function show(DocumentCategory $documentCategory)
    {
        return response()->json(['documentCategory' => $documentCategory]);
       
    }

    
    public function update(UpdateDocumentCategory $request, DocumentCategory $documentCategory)
    {
        $documentCategory->update($request->validated());
        return new DocumentCategoryResource($documentCategory);
    }

   
    public function destroy(DocumentCategory $documentCategory)
    {
        $documentCategory->delete();
        return response()->json([
            'message' => 'deleted successfully',
            'status' => 'success'
        ]);
    }
}
