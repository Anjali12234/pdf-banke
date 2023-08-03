@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">किसान सूचना केन्द्र</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.dashboard') }}">ड्यासबोर्ड
                        </a></li>
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.farmerList.index') }}">किसान सूचना केन्द्र List
                        </a></li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">

            <div class="col-md-12">
                <div class="ibox">

                    <div class="ibox-body">
                        <form action="{{ route('admin.farmerList.store',$farmerList) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12 form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" value="{{ old('title', $farmerList->title) }}"
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
                                    value="{{ old('english_title', $farmerList->english_title) }}" name="english_title"
                                    placeholder="Name">
                                <span class="text-warning">
                                    @error('english_title')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Slug</label>
                                <input class="form-control" type="text" value="{{ old('slug', $farmerList->slug) }}"
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
                                <select name="farmer_category_id" id="farmer_category_id" class="form-control">
                                    <option value="">--Select Category--</option>
                                    @foreach ($farmerCategorys as $farmerCategory)
                                        <option
                                            value="{{ $farmerCategory->id }} "
                                            {{ old('farmer_category_id', $farmerList->farmer_category_id) == $farmerCategory->id ? 'selected' : '' }}>
                                            {{ $farmerCategory->title }}</option>
                                    @endforeach
                                </select>
                                <span class="text-warning">
                                    @error('farmer_category_id')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label>Publisher</label>
                                <input class="form-control" type="text" name="publisher"
                                    value="{{ old('publisher', $farmerList->publisher) }}" placeholder="Publisher">
                                <span class="text-warning">
                                    @error('publisher')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Publisher English</label>
                                <input class="form-control" type="text" name="english_publisher"
                                    value="{{ old('english_publisher', $farmerList->english_publisher) }}"
                                    placeholder="Publisher English">
                                <span class="text-warning">
                                    @error('english_publisher')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Date</label>
                                <input class="form-control" type="date"
                                    value="{{ old('publish_date', $farmerList->publish_date) }}" name="publish_date">
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
