@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Slider</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.dashboard') }}">ड्यासबोर्ड
                        </a></li>
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.slider.index') }}">User Management
                        </a></li>
                    <li class="breadcrumb-item active" aria-current="page">Slider</li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">

            <div class="col-md-12">
                <div class="ibox">

                    <div class="ibox-body">
                        <h2>Input Fields</h2>
                        <form action="{{ route('admin.slider.update', $slider) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="title">शीर्षक</label>
                                    <input class="form-control" id="title" type="text" value="{{ old('title',$slider->title) }}" name="title" placeholder="शीर्षक">
                                    <span class="text-warning">
                                        @error('title')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="english_title">शीर्षक English</label>
                                    <input class="form-control" id="english_title" type="text" value="{{ old('english_title',$slider->english_title) }}" name="english_title"
                                        placeholder="शीर्षक English">
                                    <span class="text-warning">
                                        @error('english_title')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="slider_photo">Slider Photo</label>
                                    <input class="form-control" id="slider_photo" type="file" name="image">
                                    <img src="{{ $slider->image_url }}" width="100px" height="100px" alt="">
                                    <span class="text-warning">
                                        @error('image')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
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
