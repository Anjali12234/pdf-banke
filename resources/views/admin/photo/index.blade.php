@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">फोटो ग्यालरी</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.dashboard') }}">ड्यासबोर्ड
                        </a></li>
                    <li class="breadcrumb-item active" aria-current="page">फोटो ग्यालरी</li>
                </ol>
            </nav>
        </div>

        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-xl-12">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">Photo List</div>
                            <div class="ibox-title">
                                <a href="{{ route('admin.photo.create') }}" class="btn btn-primary float-right">
                                    <i class="fa fa-plus"></i>
                                    Add New</a>
                            </div>
                        </div>
                        <div class="ibox-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Cover Photo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($photos as $key=>$photo)
                                        <tr>
                                            <td>{{ $photos->firstItem() + $key }}</td>
                                            <td>{{ $photo->title }}</td>
                                            <td>
                                                <img src="{{ count($photo->files) > 0 ? $photo->files?->random()->file_url : '' }}"
                                                    height="80" alt="">
                                            </td>
                                            <td>
                                                <a class="btn btn-warning" href="{{ route('admin.photo.show', $photo) }}">
                                                    <i class="fa-sharp fa-solid fa-eye"></i>View</a>
                                                <a class="btn btn-primary" href="{{ route('admin.photo.edit', $photo) }}">
                                                    <i class="fa-solid fa-pen-to-square"></i></a>

                                                <form action="{{ route('admin.photo.destroy', $photo) }}" method="post"
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
                            {{ $photos->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
