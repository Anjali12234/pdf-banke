@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">कार्यालय विवरण</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.dashboard') }}">ड्यासबोर्ड
                        </a></li>
                    <li class="breadcrumb-item active" aria-current="page">कार्यालय विवरण   </li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-xl-12">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">कार्यालय विवरण</div>
                            <div class="ibox-title">
                                <a href="{{ route('admin.officeDetail.create') }}" class="btn btn-primary float-right">
                                    <i class="fa fa-plus"></i>
                                    Add New</a>
                            </div>
                        </div>
                        <div class="ibox-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($officeDetails as $key=>$officeDetail)
                                        <tr>
                                            <td>{{ $officeDetails->firstItem() + $key }}</td>
                                            <td>{{$officeDetail->title}}</td>
                                            <td>
                                                <form action="{{ route('admin.officeDetail.updateStatus',$officeDetail) }}" method="post" style="display: inline">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" style="border: none; background: none;">
                                                        <i class="fa fa-{{ $officeDetail->status == 1 ? 'toggle-on text-success' : 'toggle-off text-danger' }} fa-2x"></i>
                                                    </button>
                                                </form>
                                            </td>
                                              <td>
                                                
                                                <a class="btn btn-primary" href="{{ route('admin.officeDetail.edit', $officeDetail) }}">
                                                    <i class="fa-solid fa-pen-to-square"></i></a>

                                                <form action="{{ route('admin.officeDetail.destroy', $officeDetail) }}" method="post"
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
                            {{ $officeDetails->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection
