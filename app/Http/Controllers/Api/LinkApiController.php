<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LinkResource;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkApiController extends Controller
{

    public function index()

    {
        return response()->json([
            'link' => Link::get()
        ]);
    }



    public function store(Request $request)
    {
        $link = Link::create($request->all());
        return new LinkResource($link);
    }


    public function show(Link $link)
    {
        return response()->json(['link'=>$link]);
    }


    public function update(Request $request, Link $link)
    {
        $link->update($request->all());
        return new LinkResource($link);
    }


    public function destroy(Link $link)
    {
        $link->delete();
        return response()->json([
            'message' => 'deleted',
            'status' => 'success'
        ]);
    }
}
