@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Frequently Asked Question</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.dashboard') }}">ड्यासबोर्ड
                        </a></li>
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.slider.index') }}">Faq List
                        </a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Frequently Asked Question</li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">

            <div class="col-md-12">
                <div class="ibox">

                    <div class="ibox-body">
                        <form action="{{ route('admin.faq.store',$faq) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12 form-group">
                                <label>Question</label>
                                <textarea class="form-control" type="text" name="question" placeholder="Question">{{ old('question',$faq->question) }}</textarea>
                                <span class="text-warning">
                                    @error('question')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Answer</label>
                                <textarea cols="10" rows="10 " class="form-control" type="text" name="answer" placeholder="Answer">{{ old('answer',$faq->answer) }}</textarea>
                                <span class="text-warning">
                                    @error('answer')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Question English</label>
                                <textarea class="form-control"  type="text" name="english_question" placeholder="Question">{{ old('english_question',$faq->english_question) }}</textarea>
                                <span class="text-warning">
                                    @error('english_question')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Answer English</label>
                                <textarea class="form-control" type="text" name="english_answer" placeholder="Answer">{{ old('english_answer',$faq->english_answer) }}</textarea>
                                <span class="text-warning">
                                    @error('english_answer')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                               
                            <div class="form-group">
                                <button class="btn btn-info" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
@endsection
