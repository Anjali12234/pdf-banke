<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DocumentList\StoreDocumentList;
use App\Http\Requests\DocumentList\UpdateDocumentList;
use App\Models\DocumentCategory;
use App\Models\DocumentList;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DocumentListController extends Controller
{

    public function index()
    {
        $documentLists = DocumentList::latest()->paginate(10);
        return view('admin.documentList.index', compact('documentLists'));
    }

    public function create(DocumentList $documentList)
    {
        $documentCategorys = DocumentCategory::all();
        return view('admin.documentList.create', compact('documentCategorys', 'documentList'));
    }


    public function store(StoreDocumentList $request)
    {
        DB::transaction(function () use ($request) {
            $documentList = DocumentList::create($request->validated());
            foreach ($request->validated(['files']) as $file) {
                $documentList->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('documents/' . Str::slug($request->input('english_title'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        });
        toast('Document List are added Successfully', 'success');
        return redirect(route('admin.documentList.index'));
    }


    public function show(DocumentList $documentList)
    {
        $documentList->load('files');
        return view("admin.documentList.show", compact('documentList'));
    }


    public function edit(DocumentList $documentList)
    {
        $documentCategorys = DocumentCategory::all();
        return view('admin.documentList.edit', compact('documentCategorys', 'documentList'));
    }


    public function update(UpdateDocumentList $request, DocumentList $documentList)
    { {
            if ($request->hasFile('files')) {
                foreach ($request->file('files') as $file) {
                    $documentList->files()->create([
                        'file_name' => $file->getClientOriginalName(),
                        'file' => $file->store('documents/' . Str::slug($request->input('english_title'), '_'), 'public'),
                        'size' => $file->getSize(),
                        'extension' => $file->getClientOriginalExtension()
                    ]);
                }
            }
            $documentList->update($request->validated());
            toast('DocumentList updated successfully', 'success');
            return redirect(route('admin.documentList.index'));
        }
    }


    public function destroy(DocumentList $documentList)
    {
        foreach ($documentList->files as $file) {
            $this->deleteFile($file->file);
        }
        $documentList->delete();
        toast('DocumentList deleted successfully', 'success');
        return back();
    }

    public function updateDocumentListStatus(DocumentList $documentList)
    {
        $documentList->update([
            'status' => !$documentList->status
        ]);
        toast('Status updated successfully', 'success');
        return back();
    }
}
