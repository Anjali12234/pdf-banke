@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <div class="page-heading">
            <h1 class="page-title">{{ __("Department List") }}</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: blue"><a
                        href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}
                    </a></li>
                <li class="breadcrumb-item" style="color: blue"><a
                        href="{{ route('admin.employee.index') }}">{{ __('Employee') }}
                    </a></li>
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.department.index') }}">{{ __('Department') }}
                        </a></li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-body">
                        <form action="{{ route('admin.department.update', $department) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="title">{{ __("Title") }}</label>
                                    <input class="form-control" type="text" id="title"
                                        value="{{ old('title', $department->title) }}" name="title" placeholder="Title">
                                    <span class="text-warning">
                                        @error('title')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="english_title"> {{ __("English Title") }}</label>
                                    <input class="form-control" id="english_title" type="text"
                                        value="{{ old('english_title', $department->english_title) }}" name="english_title"
                                        placeholder="शीर्षक English">
                                    <span class="text-warning">
                                        @error('english_title')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-info" type="submit">{{ __("Submit") }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
