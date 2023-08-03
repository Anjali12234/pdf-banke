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
                    <li class="breadcrumb-item active" aria-current="page">Employee</li>
                    <li class="breadcrumb-item active" aria-current="page">Employee</li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-xl-12">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">Employee List</div>
                            <div class="ibox-title">
                                <a href="{{ route('admin.employee.create') }}" class="btn btn-primary float-right">
                                    <i class="fa fa-plus"></i>
                                    Add New</a>
                            </div>
                        </div>
                        <div class="ibox-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Designation</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($employees as $key=>$employee)
                                        <tr>
                                            <td>{{ $employees->firstItem() + $key }}</td>
                                            <td><img src="{{ $employee->image }}" height="100px" width="100px" alt=""></td>
                                            <td>{{$employee->name?? ''}}</td>
                                            <td>{{$employee->department->title?? ''}}</td>
                                            <td>{{$employee->designation->title?? ''}}</td>
                                            <td>{{$employee->email?? ''}}</td>
                                            <td>{{$employee->phone?? ''}}</td>
                                            

                                            <td>
                                                <a class="btn btn-primary" href="{{ route('admin.employee.edit', $employee) }}">
                                                    <i class="fa-solid fa-pen-to-square"></i></a>
                                                <form action="{{ route('admin.employee.destroy', $employee) }}" method="post"
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
                                            <td colspan="9" class="">
                                                <center> No data found.</center>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $employees->links() }}
                        </div>
                    </div>
                </div>
            </div>
@endsection
