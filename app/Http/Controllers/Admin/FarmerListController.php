<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FarmerList\StoreFarmerListRequest;
use App\Http\Requests\FarmerList\UpdateFarmerListRequest;
use App\Models\FarmerCategory;
use App\Models\FarmerList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FarmerListController extends Controller
{
    public function index()
    {
        $farmerLists = FarmerList::latest()->paginate(10);
        return view('admin.farmerList.index', compact('farmerLists'));
    }

    public function create(FarmerList $farmerList)
    {
        $farmerCategorys = FarmerCategory::all();
        return view('admin.farmerList.create', compact('farmerCategorys', 'farmerList'));
    }


    public function store(StoreFarmerListRequest $request)
    {
        DB::transaction(function () use ($request) {
            $farmerList = FarmerList::create($request->validated());
            foreach ($request->validated(['files']) as $file) {
                $farmerList->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('farmers/' . Str::slug($request->input('english_title'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        });
        toast('Farmer List are added Successfully', 'success');
        return redirect(route('admin.farmerList.index'));
    }


    public function show(FarmerList $farmerList)
    {
        $farmerList->load('files');
        return view("admin.farmerList.show", compact('farmerList'));
    }


    public function edit(FarmerList $farmerList)
    {
        $farmerCategorys = FarmerCategory::all();
        return view('admin.farmerList.edit', compact('farmerCategorys', 'farmerList'));
    }


    public function update(UpdateFarmerListRequest $request, FarmerList $farmerList)
    {
        {
            if ($request->hasFile('files')) {
                foreach ($request->file('files') as $file) {
                    $farmerList->files()->create([
                        'file_name' => $file->getClientOriginalName(),
                        'file' => $file->store('farmers/' . Str::slug($request->input('english_title'), '_'), 'public'),
                        'size' => $file->getSize(),
                        'extension' => $file->getClientOriginalExtension()
                ]);
                }
            }
            $farmerList->update($request->validated());
            toast('farmerList updated successfully', 'success');
            return redirect(route('admin.farmerList.index'));
        }
    }


    public function destroy(FarmerList $farmerList)
    {
        foreach ($farmerList->files as $file) {
            $this->deleteFile($file->file);
        }
        $farmerList->delete();
        toast('FarmerList deleted successfully', 'success');
        return back();
    }

    public function updateStatus(FarmerList $farmerList)
    {
        $farmerList->update([
            'status' => !$farmerList->status
        ]);
        toast('Status updated successfully', 'success');
        return back();
    }
}
