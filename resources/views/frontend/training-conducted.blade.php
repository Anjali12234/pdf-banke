@extends('frontend.layouts.master')

@section('main-container')
    <section class="container-fluid sections">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-house"></i></a></li>
                <li class="breadcrumb-item " aria-current="page"> <a href="{{url('photoGallery')}}"> फोटो ग्यालेरी </a></li>
                <li class="breadcrumb-item active" aria-current="page">  कुखुरा बिकास फार्म द्वरा संचलित तालिमहरु </li>
            </ol>
        </nav>

        <div class="row ">
            <div class="col-md-3 mb-4">
                <h5> Gallery</h5>
                <a href="" class="btn bg-white w-50 mt-3"> भिडियो ग्यालरी </a>
                <a href="{{ url('photoGallery') }}" class="btn bg-white active text-primary mt-3 w-50"> फोटो ग्यालेरी </a>
            </div>
            <div class="col-md-9 mb-4">
                <h5> कुखुरा बिकास फार्म द्वरा संचलित तालिमहरु</h5>
                <div class="row d-flex">
                    <div class="col-md-4 mb-3 photo">
                        <a href="{{ asset('frontend/assets/img/photo1.jpg') }}"><img
                                src="{{ asset('frontend/assets/img/photo1.jpg') }}" alt=""></a>

                    </div>
                    <div class="col-md-4 mb-3 photo">
                        <a href="{{ asset('frontend/assets/img/photo1.jpg') }}"><img
                                src="{{ asset('frontend/assets/img/photo1.jpg') }}" alt=""></a>

                    </div>
                    <div class="col-md-4 mb-3 photo">
                        <a href="{{ asset('frontend/assets/img/photo1.jpg') }}"><img
                                src="{{ asset('frontend/assets/img/photo1.jpg') }}" alt=""></a>

                    </div>
                    <div class="col-md-4 mb-3 photo">
                        <a href="{{ asset('frontend/assets/img/photo1.jpg') }}"><img
                                src="{{ asset('frontend/assets/img/photo1.jpg') }}" alt=""></a>

                    </div>
                    <div class="col-md-4 mb-3 photo">
                        <a href="{{ asset('frontend/assets/img/photo1.jpg') }}"><img
                                src="{{ asset('frontend/assets/img/photo1.jpg') }}" alt=""></a>

                    </div>
                    <div class="col-md-4 mb-3 photo">
                        <a href="{{ asset('frontend/assets/img/photo1.jpg') }}"><img
                                src="{{ asset('frontend/assets/img/photo1.jpg') }}" alt=""></a>

                    </div>
                    

                </div>

            </div>
        </div>
        </div>
    </section>
@endsection
