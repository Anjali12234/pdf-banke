@extends('frontend.layouts.master')

@section('main-container')
    <section class="container-fluid sections">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-house"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">भिडियो ग्यालरी</li>
            </ol>
        </nav>

        <div class="row ">
            <div class="col-md-3 mb-4">
                <h5> Gallery</h5>
                <a href="" class="btn bg-white w-50 mt-3 text-primary "> भिडियो ग्यालरी</a>
                <a href="{{ url('photoGallery') }}" class="btn bg-white  mt-3 w-50"> फोटो ग्यालरी</a>
            </div>
            <div class="col-md-9 mb-4">
                <h5> भिडियो ग्यालरी</h5>
                <div class="row d-flex">
                    <div class="col-md-4 photo">
                        <iframe width="100%" height="250" src="https://www.youtube.com/embed/fcCW2IR1Y64"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write;
                        encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                        <h5>हेर्न लायक खजुरामा रहेको कुखुरा बिकास फार्म</h5>
                    </div>
                    <div class="col-md-4 photo">
                        <iframe width="100%" height="250" src="https://www.youtube.com/embed/fcCW2IR1Y64"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write;
                        encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                        <h5>हेर्न लायक खजुरामा रहेको कुखुरा बिकास फार्म</h5>
                    </div>
                    <div class="col-md-4 photo">
                        <iframe width="100%" height="250" src="https://www.youtube.com/embed/fcCW2IR1Y64"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write;
                        encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                        <h5>हेर्न लायक खजुरामा रहेको कुखुरा बिकास फार्म</h5>
                    </div>
                    <div class="col-md-4 photo">
                        <iframe width="100%" height="250" src="https://www.youtube.com/embed/fcCW2IR1Y64"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write;
                        encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                        <h5>हेर्न लायक खजुरामा रहेको कुखुरा बिकास फार्म</h5>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
