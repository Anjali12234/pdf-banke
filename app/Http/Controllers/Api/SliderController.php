<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Http\Requests\Slider\StoreSliderRequest;
use App\Http\Requests\Slider\UpdateSliderRequest;
use App\Http\Resources\SliderResource;
use App\Models\Link;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        return response()->json([
            'slider' => Slider::get()
        ]);
    }

    public function store(StoreSliderRequest $request)
    {
        $slider = Slider::create($request->all());
        return new SliderResource($slider);
    }

    public function show(Slider $slider)
    {
        return response()->json(['slider'=>$slider]);
    }
    
 
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        $slider->update($request->all());
        return new SliderResource($slider);
    }

   
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return response()->json([
            'message' => 'deleted successfully',
            'status' => 'success'
        ]);
    }
}
