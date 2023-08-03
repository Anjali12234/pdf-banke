@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">धेरै सोधिएको प्रस्नहरु</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.dashboard') }}">ड्यासबोर्ड
                        </a></li>
                    <li class="breadcrumb-item active" aria-current="page">धेरै सोधिएको प्रस्नहरु</li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-xl-12">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">धेरै सोधिएको प्रस्नहरु</div>
                            <div class="ibox-title">
                                <a href="{{ route('admin.faq.create') }}" class="btn btn-primary float-right">
                                    <i class="fa fa-plus"></i>
                                    Add New</a>
                            </div>
                        </div>
                        <div class="ibox-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($faqs as $key=>$faq)
                                        <tr>
                                            <td>{{ $faqs->firstItem() + $key }}</td>
                                            <td>{{ $faq->question }}</td>
                                            {{-- <td>{{ $faq->answer}}</td> --}}
                                            <td>{!! Str::limit($faq->answer, 50) !!}</td>

                                            <td>
                                                <a class="btn btn-primary" href="{{ route('admin.faq.edit', $faq) }}">
                                                    <i class="fa-solid fa-pen-to-square"></i></a>
                                                <form action="{{ route('admin.faq.destroy', $faq) }}" method="post"
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
                            {{ $faqs->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection
