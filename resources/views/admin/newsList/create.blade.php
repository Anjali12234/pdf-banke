@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">सुचना/ समाचार</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.dashboard') }}">ड्यासबोर्ड
                        </a></li>
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.newsList.index') }}">सुचना/
                            समाचार List
                        </a></li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">

            <div class="col-md-12">
                <div class="ibox">

                    <div class="ibox-body">
                        <form action="{{ route('admin.newsList.store', '$newsList') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12 form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" value="{{ old('title', $newsList->title) }}"
                                    name="title" placeholder="Title">
                                <span class="text-warning">
                                    @error('title')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Title English</label>
                                <input class="form-control" type="text"
                                    value="{{ old('english_title', $newsList->english_title) }}" name="english_title"
                                    placeholder="Name">
                                <span class="text-warning">
                                    @error('english_title')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Slug</label>
                                <input class="form-control" type="text" value="{{ old('slug', $newsList->slug) }}"
                                    name="slug" placeholder="Slug">
                                <span class="text-warning">
                                    @error('slug')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>File</label>
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
                                <label>Category</label>
                                <select name="news_category_id" id="category" class="form-control  select2">
                                    <option value="">--Select Category--</option>

                                    @foreach ($newsCategorys as $newsCategory)
                                        <option value="{{ $newsCategory->id }} "
                                            {{ old('news_category_id', $newsCategory->news_category_id) == $newsCategory->id ? 'selected' : '' }}>
                                            {{ $newsCategory->title }}</option>
                                    @endforeach
                                </select>
                                <span class="text-warning">
                                    @error('news_category_id')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>


                            <div class="col-sm-12 form-group">
                                <label>Publisher</label>
                                <input class="form-control" type="text" name="publisher"
                                    value="{{ old('publisher', $newsList->publisher) }}" placeholder="Publisher">
                                <span class="text-warning">
                                    @error('publisher')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Publisher English</label>
                                <input class="form-control" type="text" name="english_publisher"
                                    value="{{ old('english_publisher', $newsList->english_publisher) }}"
                                    placeholder="Publisher English">
                                <span class="text-warning">
                                    @error('english_publisher')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Date</label>
                                <input class="form-control" type="datetime"
                                    value="{{ old('publish_date', $newsList->publish_date) }}" name="publish_date">
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
        @push('script')
            <script type="text/javascript">
                $('#category').select2();
            </script>
        @endpush
    @endsection
