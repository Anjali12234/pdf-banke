@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Employee</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.dashboard') }}">ड्यासबोर्ड
                        </a></li>
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.employee.index') }}">Employee
                        </a></li>
                    <li class="breadcrumb-item active" aria-current="page">Employee</li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">

            <div class="col-md-12">
                <div class="ibox">

                    <div class="ibox-body">
                        <form action="{{ route('admin.employee.store',$employee) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12 form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" value="{{ old('name', $employee->name?? '') }}"
                                    name="name" placeholder="Name">
                                <span class="text-warning">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Photo</label>
                                <input class="form-control" type="file" name="image">
                                <span class="text-warning">
                                    @error('image')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Designation</label>
                                <select name="designation_id" id="designation_id" class="form-control">
                                    <option value="">--Select Designation--</option>
                                    @foreach ($designations as $designation)
                                        <option value="{{ $designation->id }}"
                                            {{ old('designation_id', $employee->designation_id) == $designation->id ? 'selected' : '' }}>
                                            {{ $designation->title }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-warning">
                                    @error('designation_id')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label>Department</label>
                                <select name="department_id" id="department_id" class="form-control">
                                    <option value="">--Select Department--</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}"
                                            {{ $department->id == old('department_id', $employee->department_id) ? 'selected' : '' }}>
                                            {{ $department->title }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-warning">
                                    @error('department_id')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Phone</label>
                                <input class="form-control" type="text" name="phone"
                                    value="{{ old('phone', $employee->phone?? '') }}" placeholder="Phone">
                                <span class="text-warning">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Email</label>
                                <input class="form-control" type="text" name="email"
                                    value="{{ old('email', $employee->email?? '') }}" placeholder="Email">
                                <span class="text-warning">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Address</label>
                                <input class="form-control" type="text" name="address"
                                    value="{{ old('address', $employee->address ?? '') }}" placeholder="Address">
                                <span class="text-warning">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Position</label>
                                <input class="form-control" type="number" name="position"
                                    value="{{ old('position', $employee->position?? '') }}" placeholder="Position">
                                <span class="text-warning">
                                    @error('position')
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
@endsection
