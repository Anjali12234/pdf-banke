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
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.photo.index') }}">फोटो ग्यालरी
                        </a></li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">

            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-body">

                        
                        <div class="col-md-9">
                            <div class="row" >
                                @foreach ($photo->files as $file)
                                    <div class="col-md-3 mt-3" >
                                        <div class="image" >
                                            <img class="card-img-top " src="{{ $file->file_url }}" style="height:200px; width:200px;">
                                        </div>
                                        <div class="mt-5">
                                            <form action="{{ route('admin.file.destroy',$file) }}" method="post"
                                                style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Are You sure want to delete')"> <i
                                                        class="fa-solid fa-trash"></i> </button>

                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
@endsection
