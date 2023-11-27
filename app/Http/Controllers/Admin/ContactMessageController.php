<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactMessage\StoreContactMessageRequest;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function index()
    {
        $contactMessages = ContactMessage::latest()->paginate(10);
        return view('admin.contactMessage.index',compact('contactMessages'));
    }

    public function store(StoreContactMessageRequest $request)
    {
        ContactMessage::create($request->validated());
        toast( __('Your Message has been sent'),'success');
        return back();
    }


}
