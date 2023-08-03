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
                    <li class="breadcrumb-item active" aria-current="page"> कानूनी दस्तावेज</li>
                    <li class="breadcrumb-item active" aria-current="page"> कानूनी दस्तावेज बर्गहरु</li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">

            <div class="col-md-12">
                <div class="ibox">

                    <div class="ibox-body">
                        <form action="{{ route('admin.documentCategory.store',$documentCategory) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
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
                                        value="{{ old('slug', $documentCategory->slug) }}" name="slug" placeholder="slug">
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
                <div class="page-content fade-in-up">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="ibox">
                                <div class="ibox-head">
                                    <div class="ibox-title">कानूनी दस्तावेज बर्गहरु</div>
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
                                            @forelse ($documentCategorys as $key=>$documentCategory)
                                                <tr>
                                                    <td>{{ $documentCategorys->firstItem() + $key }}</td>
                                                    <td>{{ $documentCategory->title }}</td>
                                                    <td>{{ $documentCategory->position }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.documentCategory.updateStatus',$documentCategory) }}">
                                                            <i class="fa fa-{{ $documentCategory->status ? 'toggle-on text-success' : 'toggle-off text-danger' }} fa-2x"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" href="{{ route('admin.documentCategory.edit', $documentCategory) }}">
                                                            <i class="fa-solid fa-pen-to-square"></i></a>
                                                        <form action="{{ route('admin.documentCategory.destroy', $documentCategory) }}" method="post"
                                                            style="display: inline">
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
                                    {{ $documentCategorys->links() }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
