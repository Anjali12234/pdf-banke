@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">डाउनलोड</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.dashboard') }}">ड्यासबोर्ड
                        </a></li>
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.downloadList.index') }}">डाउनलोड
                            List
                        </a></li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-body">
                        <form action="{{ route('admin.downloadList.store', $downloadList) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12 form-group">
                                <label for="title">Title</label>
                                <input class="form-control" id="title" type="text"
                                    value="{{ old('title', $downloadList->title) }}" name="title" placeholder="Title">
                                <span class="text-warning">
                                    @error('title')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="english_title">Title English</label>
                                <input class="form-control" id="english_title" type="text"
                                    value="{{ old('english_title', $downloadList->english_title) }}" name="english_title"
                                    placeholder="Name">
                                <span class="text-warning">
                                    @error('english_title')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="slug">Slug</label>
                                <input class="form-control" id="slug" type="text"
                                    value="{{ old('slug', $downloadList->slug) }}" name="slug" placeholder="Slug">
                                <span class="text-warning">
                                    @error('slug')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="files">Multiple File</label>
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
                            <div class="col-sm-12 form-group">
                                <label for="download_category_id">Category</label>
                                <select name="download_category_id" id="download_category_id" class="form-control">
                                    <option value="">--Select Category--</option>
                                    @foreach ($downloadCategorys as $downloadCategory)
                                        <option value="{{ $downloadCategory->id }} "
                                            {{ old('download_category_id', $downloadList->download_category_id) == $downloadCategory->id ? 'selected' : '' }}>
                                            {{ $downloadCategory->title }}</option>
                                    @endforeach
                                </select>
                                <span class="text-warning">
                                    @error('download_category_id')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="publisher">Publisher</label>
                                <input class="form-control" id="publisher" type="text" name="publisher"
                                    value="{{ old('publisher', $downloadList->publisher) }}" placeholder="Publisher">
                                <span class="text-warning">
                                    @error('publisher')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="english_publisher">Publisher English</label>
                                <input class="form-control" id="english_publisher" type="text" name="english_publisher"
                                    value="{{ old('english_publisher', $downloadList->english_publisher) }}"
                                    placeholder="Publisher English">
                                <span class="text-warning">
                                    @error('english_publisher')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="date">Date</label>
                                <input class="form-control" id="date" type="text"
                                    value="{{ old('publish_date', $downloadList->publish_date) }}" name="publish_date">
                                <span class="text-warning">
                                    @error('publish_date ')
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
