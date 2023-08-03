<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\StoreSliderRequest;
use App\Http\Requests\Slider\UpdateSliderRequest;
use App\Models\Slider;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{

    public function index()
    {
        
        $sliders = Slider::latest()->paginate(10);
        return view('admin.slider.index', compact('sliders'));
    }

    public function store(StoreSliderRequest $request)
    {
        $slider = Slider::create($request->validated());
        toast('Slider added Successfullly', 'success');
        return redirect(route('admin.slider.index'));
    }


    public function edit(Slider $slider)
    {
        return view("admin.slider.edit", compact('slider'));
    }
    

    public function update(UpdateSliderRequest $request, Slider $slider)
    {
       
        if ($request->hasFile('image') && $slider->image) {
            $this->deleteFile($slider->image);
        }           
        $slider->update($request->validated());
        toast('Service updated successfully', 'success');
        return redirect(route('admin.slider.index'));
    }


    public function destroy(Slider $slider)
    {
        $this->deleteFile($slider->image);
        $slider->delete();
        toast('Slider deleted successfully', 'success');
        return back();
    }
}
