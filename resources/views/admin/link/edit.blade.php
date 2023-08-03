@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Link List</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.dashboard') }}">ड्यासबोर्ड
                        </a></li>
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.link.index') }}">link
                        </a></li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">

            <div class="col-md-12">
                <div class="ibox">

                    <div class="ibox-body">
                        <form action="{{ route('admin.link.update', $link) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Link List</label>
                                    <input class="form-control" type="text" value="{{ old('title',$link->title) }}" name="title" placeholder="Title">
                                    <span class="text-warning">
                                        @error('title')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label> English Title</label>
                                    <input class="form-control" type="text" value="{{ old('english_title',$link->english_title) }}" name="english_title"
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
                                    <label>Url</label>
                                    <input class="form-control" type="text" name="url" value="{{old('url', $link->url)}}">
                                    <span class="text-warning">
                                        @error('url')
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
