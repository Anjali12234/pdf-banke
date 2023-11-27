@extends('frontend.layouts.master')

@section('main-container')
    <section class="container-fluid sections">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="fa fa-house"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $documentList->title ?? '' }}</li>
            </ol>
        </nav>

        <div class="row">
            <h5 class="title-dark">{{ $documentList->title ?? '' }} </h5>

            <div class="col-md-12">
                <div class="col-md-3  pdf mt-3 pl-5" style="float: right;">
                    <h4 class="title mb-3 ">सम्बन्धित कानूनी दस्तावेज </h4>

                        <div class="bg-white  pdf-desc ml-4 mb-3">
                            <a href="" class=" card-01 mb-2 bg-white pl-5">
                                <h6 class="heading bg-white ">{{ $documentList->title ?? '' }}</h6>
                                <p class="mt-2 sub-title bg-white">{{ $documentList->publish_date ?? '' }} | PDF </p>
                            </a>
                        </div>
                </div>
                @foreach ($documentList->files as $file)
                    <div class="col-md-8 mb-5"> 
                        <div class="news-iframe" >
                            
                            <iframe src="{{ $file->file_url }}" height="600px" width="100%"></iframe>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
