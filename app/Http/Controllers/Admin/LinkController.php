<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Link\StoreLinkRequest;
use App\Http\Requests\Link\UpdateLinkRequest;
use App\Models\Link;

use Illuminate\Http\Request;

class LinkController extends Controller
{
   
    public function index()
    {
        $links = Link::latest()->paginate(10);
        return view('admin.link.index', compact('links'));
    }

   
    public function store(StoreLinkRequest $request)
    {
        Link::create($request->validated());
        toast('Link addedd Successfully','success');
        return redirect(route('admin.link.index'));
    }

    
    public function edit(Link $link)
    {
        return view('admin.link.edit',compact('link'));
    }

   
    public function update(UpdateLinkRequest $request, Link $link)
    {
        $link->update($request->validated());
        toast('Link updated successfully','success');
        return redirect(route('admin.link.index'));
    }

  
    public function destroy(Link $link)
    {
        $link->delete();
        toast('Link deleted successfully','success');
        return back();
    }
}
