<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DownloadList\StoreDownloadListRequest;
use App\Http\Requests\DownloadList\UpdateDownloadListRequest;
use App\Models\DownloadCategory;
use App\Models\DownloadList;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DownloadListController extends Controller
{

    public function index()
    {
        $downloadLists = DownloadList::latest()->paginate(10);
        return view('admin.downloadList.index', compact('downloadLists'));
    }


    public function create(DownloadList $downloadList)
    {
        $downloadCategorys = DownloadCategory::all();
        return view('admin.downloadList.create', compact('downloadCategorys', 'downloadList'));
    }


    public function store(StoreDownloadListRequest $request)
    {
        DB::transaction(function () use ($request) {
            $downloadList = DownloadList::create($request->validated());
            foreach ($request->validated(['files']) as $file) {
                $downloadList->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('downlads/' . STR::slug($request->input('english_title'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        });
        toast('Downloads are added successfully', 'success');
        return redirect(route('admin.downloadList.index'));
    }


    public function show(DownloadList $downloadList)
    {
        $downloadList->load('files');
        return view('admin.downloadList.show', compact('downloadList'));
    }


    public function edit(DownloadList $downloadList)
    {
        $downloadCategorys = DownloadCategory::all();
        return view('admin.downloadList.edit', compact('downloadCategorys', 'downloadList'));
    }


    public function update(UpdateDownloadListRequest $request, DownloadList $downloadList)
    { {
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $downloadList->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('downloads/' . Str::slug($request->input('english_title'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        }
        $downloadList->update($request->validated());
        toast('downloadList updated successfully', 'success');
        return redirect(route('admin.downloadList.index'));
    }
}

    public function destroy(DownloadList $downloadList)
    {
        foreach ($downloadList->files as $file) {
            $this->deleteFile($file->file);
        }
        $downloadList->delete();
        toast('DownloadList deleted successfully', 'success');
        return back();
    }

    public function updateStatus(DownloadList $downloadList)
    {
        $downloadList->update([
            'status' => !$downloadList->status
        ]);
        toast('Status updated successfully', 'success');
        return back();
    }
}
