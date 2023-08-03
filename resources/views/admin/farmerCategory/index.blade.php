@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">किसान सूचना केन्द्र </h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.dashboard') }}">ड्यासबोर्ड
                        </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> किसान सूचना केन्द्र </li>
                    <li class="breadcrumb-item active" aria-current="page"> किसान सूचना केन्द्र  बर्गहरु</li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">

            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-body">
                        <form action="{{ route('admin.farmerCategory.store',$farmerCategory) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Title</label>
                                    <input class="form-control" type="text"
                                        value="{{ old('title', $farmerCategory->title) }}" name="title"
                                        placeholder="Title">
                                    <span class="text-warning">
                                        @error('title')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label> English Title</label>
                                    <input class="form-control" type="text"
                                        value="{{ old('english_title', $farmerCategory->english_title) }}"
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
                                    <label>Slug</label>
                                    <input class="form-control" type="text"
                                        value="{{ old('slug', $farmerCategory->slug) }}" name="slug" placeholder="slug">
                                    <span class="text-warning">
                                        @error('slug')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Position</label>
                                    <input class="form-control" type="number"
                                        value="{{ old('position', $farmerCategory->position) }}" name="position"
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
                                    <div class="ibox-title">किसान सूचना केन्द्र बर्गहरु</div>
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
                                            @forelse ($farmerCategorys as $key=>$farmerCategory)
                                                <tr>
                                                    <td>{{ $farmerCategorys->firstItem() + $key }}</td>
                                                    <td>{{ $farmerCategory->title }}</td>
                                                    <td>{{ $farmerCategory->position }}</td>
                                                    <td>
                                                        <form action="{{ route('admin.farmerCategory.updateStatus', $farmerCategory) }}" method="post" style="display: inline">
                                                            @csrf
                                                            @method('put')
                                                            <button type="submit" style="border: none; background: none;">
                                                                <i class="fa fa-{{ $farmerCategory->status == 1 ? 'toggle-on text-success' : 'toggle-off text-danger' }} fa-2x"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" href="{{ route('admin.farmerCategory.edit', $farmerCategory) }}">
                                                            <i class="fa-solid fa-pen-to-square"></i></a>
                                                        <form action="{{ route('admin.farmerCategory.destroy', $farmerCategory) }}" method="post"
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
                                    {{ $farmerCategorys->links() }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
