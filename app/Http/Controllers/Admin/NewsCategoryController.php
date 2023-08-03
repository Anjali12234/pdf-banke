<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsCategory\StoreNewsCategoryRequest;
use App\Http\Requests\NewsCategory\UpdateNewsCategoryRequest;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index(NewsCategory $newsCategory)
    {
        $newsCategorys = NewsCategory::latest()->paginate(10);
        return view('admin.newsCategory.index', compact('newsCategorys','newsCategory'));
    }

    public function store(StoreNewsCategoryRequest $request)
    {
        NewsCategory::create($request->validated());
        toast('News Category added successfully ', 'success');
        return back();
    }

    public function edit(NewsCategory $newsCategory)
    {
        return view('admin.newsCategory.edit', compact('newsCategory'));
    }


    public function update(UpdateNewsCategoryRequest $request, NewsCategory $newsCategory)
    {
        $newsCategory->update($request->validated());
        toast('News added successfully ', 'success');
        return redirect(route('admin.newsCategory.index'));
    }


    public function destroy(NewsCategory $newsCategory)
    {
        $newsCategory->delete();
        toast('Category deleted successfully', 'success');
        return back();
    }

    public function updateStatus(NewsCategory $newsCategory)
    {
        $newsCategory->update([
            'status' => !$newsCategory->status
        ]);

        toast('Status updated successfully', 'success');
        return back();
    }
}

