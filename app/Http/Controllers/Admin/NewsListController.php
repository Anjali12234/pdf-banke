<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsList\StoreNewsListRequest;
use App\Http\Requests\NewsList\UpdateNewsListRequest;
use App\Models\NewsCategory;
use App\Models\NewsList;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsListController extends Controller
{
    public function index()
    {
        $newsLists = NewsList::latest()->paginate(10);
        return view('admin.newsList.index', compact('newsLists'));
    }

    public function create(NewsList $newsList)
    {
        $newsCategorys = NewsCategory::all();
        return view('admin.newsList.create', compact('newsCategorys','newsList'));
    }


    public function store(StoreNewsListRequest $request)
    {
        DB::transaction(function () use ($request) {
            $newsList = newsList::create($request->validated());
            foreach ($request->validated(['files']) as $file) {
                $newsList->files()->create([
                        'file_name' => $file->getClientOriginalName(),
                        'file' => $file->store('news/' . Str::slug($request->input('english_title'), '_'), 'public'),
                        'size' => $file->getSize(),
                        'extension' => $file->getClientOriginalExtension()
                ]);
            }
        });
        toast('News List are added Successfully', 'success');
        return redirect(route('admin.newsList.index'));
    }

   
    public function show(NewsList $newsList)
    {
        $newsList->load('files');
        return view("admin.newsList.show", compact('newsList'));
    }

   
    public function edit(NewsList $newsList)
    {
        $newsCategorys = NewsCategory::all();
        return view('admin.newsList.edit',compact('newsCategorys','newsList'));
    }   

   
    public function update(UpdateNewsListRequest $request, NewsList $newsList)
    {
        {
            if ($request->hasFile('files')) {
                foreach ($request->file('files') as $file) {
                    $newsList->files()->create([
                        'file_name' => $file->getClientOriginalName(),
                        'file' => $file->store('news/' . Str::slug($request->input('english_title'), '_'), 'public'),
                        'size' => $file->getSize(),
                        'extension' => $file->getClientOriginalExtension()
                ]);
                }
            }
            $newsList->update($request->validated());
            toast('newsList updated successfully', 'success');
            return redirect(route('admin.newsList.index'));
        }
    }

    
    public function destroy(NewsList $newsList)
    {
        foreach ($newsList->files as $file) {
            $this->deleteFile($file->file);
        }
        $newsList->delete();
        toast('newsList deleted successfully', 'success');
        return back();
    }

    public function updateStatus(NewsList $newsList)
    {
        $newsList->update([
            'status' => !$newsList->status
        ]);
        toast('Status updated successfully', 'success');
        return back();
    }
}
