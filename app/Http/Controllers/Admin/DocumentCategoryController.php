<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DocumentCategory\StoreDocumentCategory;
use App\Http\Requests\DocumentCategory\UpdateDocumentCategory;
use Illuminate\Http\Request;
use App\Models\DocumentCategory;

class DocumentCategoryController extends Controller
{
    public function index(DocumentCategory $documentCategory)
    {
        $documentCategorys = DocumentCategory::latest()->paginate(10);
        return view('admin.documentCategory.index', compact('documentCategorys','documentCategory'));
    }


    public function store(StoreDocumentCategory $request)
    {

        DocumentCategory::create($request->validated());
        toast( __('Document Category added successfully'), 'success');
        return back();
    }

    public function edit(DocumentCategory $documentCategory)
    {
        return view('admin.documentCategory.edit', compact('documentCategory'));
    }


    public function update(UpdateDocumentCategory $request, DocumentCategory $documentCategory)
    {
        $documentCategory->update($request->validated());
        toast( __('Category added successfully'), 'success');
        return redirect(route('admin.documentCategory.index'));
    }


    public function destroy(DocumentCategory $documentCategory)
    {
        $documentCategory->delete();
        toast( __('Category deleted successfully'), 'success');
        return   back();
    }

    public function updateStatus(DocumentCategory $documentCategory)
    {
        $documentCategory->update([
            'status' => !$documentCategory->status
        ]);

        toast( __('Status updated successfully'), 'success');
        return back();
    }
}
