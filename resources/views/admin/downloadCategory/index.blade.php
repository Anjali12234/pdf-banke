@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">
                डाउनलोड </h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.dashboard') }}">ड्यासबोर्ड
                        </a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        डाउनलोड </li>
                    <li class="breadcrumb-item active" aria-current="page"> डाउनलोड बर्गहरु</li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">

            <div class="col-md-12">
                <div class="ibox">

                    <div class="ibox-body">
                        <form action="{{ route('admin.downloadCategory.store', $downloadCategory) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="title">Title</label>
                                    <input class="form-control" type="text" id="title"
                                        value="{{ old('title', $downloadCategory->title) }}" name="title"
                                        placeholder="Title">
                                    <span class="text-warning">
                                        @error('title')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="english_title"> English Title</label>
                                    <input class="form-control" type="text" id="english_title"
                                        value="{{ old('english_title', $downloadCategory->english_title) }}"
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
                                    <input class="form-control" type="text" id="slug"
                                        value="{{ old('slug', $downloadCategory->slug) }}" name="slug"
                                        placeholder="slug">
                                    <span class="text-warning">
                                        @error('slug')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="position">Position</label>
                                    <input class="form-control" type="number" id="position"
                                        value="{{ old('position', $downloadCategory->position) }}" name="position"
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
                <div class="page-content fade-in-up">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="ibox">
                                <div class="ibox-head">
                                    <div class="ibox-title">डाउनलोड बर्गहरु</div>
                                </div>
                                <div class="ibox-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Position</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($downloadCategorys as $key=>$downloadCategory)
                                                <tr>
                                                    <td>{{ $downloadCategorys->firstItem() + $key }}</td>
                                                    <td>{{ $downloadCategory->title }}</td>
                                                    <td>{{ $downloadCategory->position }}</td>
                                                    <td>
                                                        <form action="{{ route('admin.downloadCategory.updateStatus', $downloadCategory) }}" method="post" style="display: inline">
                                                            @csrf
                                                            @method('put')
                                                            <button type="submit" style="border: none; background: none;">
                                                                <i class="fa fa-{{ $downloadCategory->status == 1 ? 'toggle-on text-success' : 'toggle-off text-danger' }} fa-2x"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary"
                                                            href="{{ route('admin.downloadCategory.edit', $downloadCategory) }}">
                                                            <i class="fa-solid fa-pen-to-square"></i></a>
                                                        <form
                                                            action="{{ route('admin.downloadCategory.destroy', $downloadCategory) }}"
                                                            method="post" style="display: inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm('Are You sure want to delete')"> <i
                                                                    class="fa-solid fa-trash"></i> </button>

                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4" class="">
                                                        <center> No data found.</center>
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $downloadCategorys->links() }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
