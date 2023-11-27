<?php

namespace App\Http\Controllers\Api;

use App\Models\DocumentList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DocumentList\StoreDocumentList;
use App\Http\Resources\DocumentListResource;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DocumentListApiController extends Controller
{

    public function index()
    {
        return DocumentListResource::collection(DocumentList::latest()->get());
    }


    public function store(StoreDocumentList $request)
    {
        return DB::transaction(function () use ($request) {
            $documentList = DocumentList::create($request->validated());

            $files = $request->file('files'); // Get the files from the request

            foreach ($files as $file) {
                $fileName = $file->getClientOriginalName();
                $filePath = $file->store('documents/' . Str::slug($request->input('english_title'), '_'), 'public');

                $documentList->files()->create([
                    'file_name' => $fileName,
                    'file' => $filePath,
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }

            return response()->json([
                'message' => 'Document List Created Successfully',
                'data' => DocumentListResource::make($documentList)
            ], 201);
        });
    }



    public function show(DocumentList $documentList)
    {
        return DocumentListResource::make($documentList);
    }


    public function update(Request $request, DocumentList $documentList)
    {
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
        return response()->json([
            'message' => 'DOcument List Updated Successfully',
            'data' => DocumentListResource::make($documentList)
        ]);
    }


    public function destroy(DocumentList $documentList)
    {
        $documentList->delete();

        return response()->json([
            'message' => 'Document List Deleted Successfully'
        ]);
    }
}
