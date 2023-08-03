<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Faq\StoreFaqRequest;
use App\Http\Requests\Faq\UpdateFaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
  
    public function index()
    {
        $faqs = Faq::latest()->paginate(10);
        return view('admin.faq.index',compact('faqs'));
    }

  
    public function create(Faq $faq)
    {
        return view('admin.faq.create',compact('faq'));
    }

   
    public function store(StoreFaqRequest $request)
    {
        Faq::create($request->validated());
        toast('Faq added sucessfully','success');
        return redirect(route('admin.faq.index'));
    }

   

   
    public function edit(Faq $faq)
    {
        return view('admin.faq.edit',compact('faq'));
    }

  
    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        $faq->update($request->validated());
        toast('Faq updated successfully','success');
        return redirect(route('admin.faq.index'));
    }

   
    public function destroy(Faq $faq)
    {
        $faq->delete();
        toast('Faq deleted successfully','success');
        return back();
    }
}
