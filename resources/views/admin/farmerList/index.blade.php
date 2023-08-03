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
                    <li class="breadcrumb-item active" aria-current="page">किसान सूचना केन्द्र     </li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-xl-12">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">किसान सूचना केन्द्र </div>
                            <div class="ibox-title">
                                <a href="{{ route('admin.farmerList.create') }}" class="btn btn-primary float-right">
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
                                    @forelse ($farmerLists as $key=>$farmerList)
                                        <tr>
                                            <td>{{ $farmerLists->firstItem() + $key }}</td>
                                            <td>{{$farmerList->title}}</td>
                                            <td>
                                                <form action="{{ route('admin.farmerList.updateStatus', $farmerList) }}" method="post" style="display: inline">
                                                    @csrf
                                                    @method('put')
                                                    <button type="submit" style="border: none; background: none;">
                                                        <i class="fa fa-{{ $farmerList->status == 1 ? 'toggle-on text-success' : 'toggle-off text-danger' }} fa-2x"></i>
                                                    </button>
                                                </form>
                                            </td>
                                              <td>
                                                <a class="btn btn-warning" href="{{ route('admin.farmerList.show', $farmerList) }}">
                                                    <i class="fa-sharp fa-solid fa-eye"></i>View</a>
                                                <a class="btn btn-primary" href="{{ route('admin.farmerList.edit', $farmerList) }}">
                                                    <i class="fa-solid fa-pen-to-square"></i></a>

                                                <form action="{{ route('admin.farmerList.destroy', $farmerList) }}" method="post"
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
                            {{ $farmerLists->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection
