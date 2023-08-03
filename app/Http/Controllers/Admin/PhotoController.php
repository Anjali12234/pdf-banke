<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Photo\StorePhotoRequest;
use App\Http\Requests\Photo\UpdatePhotoRequest;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PhotoController extends Controller
{

    public function index()
    {
        $photos = Photo::with('files')->latest()->paginate(10);
        return view('admin.photo.index', compact('photos'));
    }

    public function create(PhotoController $photo)
    {
        return view('admin.photo.create',compact('photo'));
    }


    public function store(StorePhotoRequest $request)
    {
        DB::transaction(function () use ($request) {
            $photo = Photo::create($request->validated());
            foreach ($request->validated(['files']) as $file) {
                $photo->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('photo/' . Str::slug($request->input('english_title'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        });
        toast('Photo added Successfullly', 'success');
        return redirect(route('admin.photo.index'));
    }
   


    public function show(Photo $photo)
    {
        $photo->load('files');
        return view("admin.photo.show", compact('photo'));
    }


    public function edit(photo $photo)
    {
        return view('admin.photo.edit', compact('photo'));
    }


    public function update(UpdatePhotoRequest $request, Photo $photo)
    {
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $photo->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('photo/' . Str::slug($request->input('english_title'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        }
        $photo->update($request->validated());
        toast('Photo updated successfully', 'success');
        return redirect(route('admin.photo.index'));
    }


    public function destroy(Photo $photo)
    {
        foreach ($photo->files as $file) {
            $this->deleteFile($file->file);
        }
        $photo->delete();
        toast('Photo deleted successfully', 'success');
        return back();
    }
}
