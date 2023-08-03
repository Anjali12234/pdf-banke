<?php

namespace App\Http\Controllers;

use App\Http\Requests\DownloadList\StoreDownloadListRequest;
use App\Http\Requests\DownloadList\UpdateDownloadListRequest;
use App\Http\Resources\DownloadListResource;
use App\Models\DownloadList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DownloadListApiController extends Controller
{

    public function index()
    {
        return response()->json([
            'downloadList' => DownloadList::get()
        ]);
    }


    public function store(StoreDownloadListRequest $request)
    {
        return DB::transaction(function () use ($request) {
            $validatedData = $request->validated();

            $downloadList = DownloadList::create($validatedData);

            foreach ($request->file('files') as $file) {
                $downloadList->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('downloads/' . Str::slug($validatedData['title'], '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }

            return new DownloadListResource($downloadList);
        });
    }


    public function show(DownloadList $downloadList )
    {
        return response()->json(['downloadList' => $downloadList]);
    }


    public function update(UpdateDownloadListRequest $request, DownloadList $downloadList)
    { {
            if ($request->hasFile('files')) {
                foreach ($request->file('files') as $file) {
                    $downloadList->files()->create([
                        'file_name' => $file->getClientOriginalName(),
                        'file' => $file->store('downlads/' . Str::slug($request->input('title'), '_'), 'public'),
                        'size' => $file->getSize(),
                        'extension' => $file->getClientOriginalExtension()
                    ]);
                }
            }
            $downloadList->update($request->validated());
            return new DownloadListResource($downloadList);
        }
    }


    public function destroy(DownloadList $downloadList)
    {
        $downloadList->delete();
        return response()->json([
            'message'=>'deleted successfully',
            'status' => 'success'
        ]);
    }
}
