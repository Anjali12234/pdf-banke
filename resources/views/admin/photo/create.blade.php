@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Photo</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.dashboard') }}">ड्यासबोर्ड
                        </a></li>
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.photo.index') }}">Photo
                        </a></li>
                    <li class="breadcrumb-item active" aria-current="page">Photo</li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">

            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-body">
                        <form action="{{ route('admin.photo.store','$photo') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="title">शीर्षक</label>
                                    <input class="form-control" id="title" value="{{ old('title',$photo->title??'' ) }}" type="text" name="title"  placeholder="शीर्षक">
                                    <span class="text-warning">
                                        @error('title')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="english_title">शीर्षक English</label>
                                    <input class="form-control" id="english_title" value="{{ old('english_title',$photo->english_title??'' ) }}" type="text" name="english_title"
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
                                    <label for="slug">Slug</label>
                                    <input class="form-control" id="slug" value="{{ old('slug',$photo->slug?? '' ) }}" type="text" name="slug" placeholder="Slug">
                                    <span class="text-warning">
                                        @error('slug')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="col-sm-6 form-group">
                                    <label for="files">Multiple Photo</label>
                                    <input class="form-control" id="files" type="file" name="files[]" multiple>
                                    <span class="text-warning">
                                        @error('files')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <span class="text-warning">
                                        @error('files.*')
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

