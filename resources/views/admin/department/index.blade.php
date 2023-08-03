@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Department</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.dashboard') }}">ड्यासबोर्ड
                        </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Employee</li>
                    <li class="breadcrumb-item active" aria-current="page"> Department</li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">

            <div class="col-md-12">
                <div class="ibox">

                    <div class="ibox-body">
                        <form action="{{ route('admin.department.store',$department) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="title">Title</label>
                                    <input class="form-control" id="title" type="text" value="{{ old('title',$department->title) }}" name="title" placeholder="शीर्षक">
                                    <span class="text-warning">
                                        @error('title')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="english_title">Title English</label>
                                    <input class="form-control" id="english_title" type="text" value="{{ old('english_title',$department->english_title) }}" name="english_title"
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
                                    <div class="ibox-title">Department List</div>
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
                                            @forelse ($departments as $key=>$department)
                                                <tr>
                                                    <td>{{ $departments->firstItem() + $key }}</td>
                                                    <td>{{ $department->title }}</td>

                                                    <td>
                                                        <a class="btn btn-primary" href="{{ route('admin.department.edit', $department) }}">
                                                            <i class="fa-solid fa-pen-to-square"></i></a>
                                                        <form action="{{ route('admin.department.destroy', $department) }}"
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
                                    {{ $departments->links() }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    <!-- END PAGE CONTENT-->
@endsection
