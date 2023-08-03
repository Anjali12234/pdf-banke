@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">कानूनी दस्तावेज</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.dashboard') }}">ड्यासबोर्ड
                        </a></li>
                    <li class="breadcrumb-item" style="color: blue"><a
                            href="{{ route('admin.documentCategory.index') }}">कानूनी दस्तावेज

                        </a></li>
                    <li class="breadcrumb-item active"><a href="">Category
                        </a></li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">

            <div class="col-md-12">
                <div class="ibox">
                    <h3>कानूनी दस्तावेज</h3>
                    <div class="ibox-body">
                        <form action="{{ route('admin.documentCategory.update', $documentCategory) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="title">Title</label>
                                    <input class="form-control" id="title" type="text"
                                        value="{{ old('title', $documentCategory->title) }}" name="title"
                                        placeholder="Title">
                                    <span class="text-warning">
                                        @error('title')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="english_title"> English Title</label>
                                    <input class="form-control" id="english_title" type="text"
                                        value="{{ old('english_title', $documentCategory->english_title) }}"
                                        name="english_title" placeholder="शीर्षक English">
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
                                    <input class="form-control" id="slug" type="text"
                                        value="{{ old('slug', $documentCategory->slug) }}" name="slug"
                                        placeholder="slug">
                                    <span class="text-warning">
                                        @error('slug')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="position">Position</label>
                                    <input class="form-control" id="position" type="number"
                                        value="{{ old('position', $documentCategory->position) }}" name="position"
                                        placeholder="शीर्षक English">
                                    <span class="text-warning">
                                        @error('position')
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
