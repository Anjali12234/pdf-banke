@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Designation</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.dashboard') }}">ड्यासबोर्ड
                        </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Employee</li>
                    <li class="breadcrumb-item active" aria-current="page"> Designation</li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">

            <div class="col-md-12">
                <div class="ibox">

                    <div class="ibox-body">
                        <form action="{{ route('admin.designation.store',$designation) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="title">Title</label>
                                    <input class="form-control" id="title" type="text" value="{{ old('title',$designation->title) }}" name="title" placeholder="Title">
                                    <span class="text-warning">
                                        @error('title')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="english_title"> English Title</label>
                                    <input class="form-control" id="english_title" type="text" value="{{ old('english_title',$designation->english_title) }}" name="english_title"
                                        placeholder="शीर्षक English">
                                    <span class="text-warning">
                                        @error('english_title')
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
                                    <div class="ibox-title">Designation List</div>
                                </div>
                                <div class="ibox-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($designations as $key=>$designation)
                                                <tr>
                                                    <td>{{ $designations->firstItem() + $key }}</td>
                                                    <td>{{ $designation->title }}</td>

                                                    <td>
                                                        <a class="btn btn-primary" href="{{ route('admin.designation.edit', $designation) }}">
                                                            <i class="fa-solid fa-pen-to-square"></i></a>
                                                        <form action="{{ route('admin.designation.destroy', $designation) }}"
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
                                                    <td colspan="4" class=""> <center> No data found.</center></td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $designations->links() }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
