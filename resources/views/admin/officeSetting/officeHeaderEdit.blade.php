@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">कार्यालय सेटिंग</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.dashboard') }}">ड्यासबोर्ड
                        </a></li>
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.employee.index') }}">कार्यालय
                            सेटिंग
                        </a></li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-body">
                        <div class="row">
                            <h1>Office Header</h1>
                        </div>
                        <form action="{{ route('admin.officeHeader.update', $officeHeader) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div id="office-header">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label for="title">नाम *</label>
                                        <input class="form-control" id="title" type="text"
                                            name="title">
                                        <span class="text-warning">
                                            @error('title')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label for="english_title">English*</label>
                                        <input class="form-control" type="text" id="english_title"
                                            name="english_title">
                                        <span class="text-warning">
                                            @error('english_title')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label for="position">Position *</label>
                                        <input class="form-control" type="text" name="position">
                                        <span class="text-warning">
                                            @error('position')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
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
