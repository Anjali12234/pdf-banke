@extends('frontend.layouts.master')

@section('main-container')
    <section class="container-fluid sections">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-house"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">फोटो ग्यालरी</li>
            </ol>
        </nav>

        <div class="row ">
            <div class="col-md-3 mb-4">
                <h5> Gallery</h5>
                <a href="#" class="btn bg-white w-50 mt-3"> भिडियो ग्यालरी</a>
                <a href="{{ route('photoGallery')}}" class="btn bg-white text-primary mt-3 w-50"> फोटो ग्यालरी</a>
            </div>
            <div class="col-md-9 mb-4">
                <h5> फोटो ग्यालरी</h5>
                <div class="row d-flex">
                    @foreach ($photos as $photo)
                    <div class="col-md-4 photo">
                        <a href="{{ route('photoList',$photo) }}"><img
                                src="{{count($photo->files)>0 ? $photo->files?->random()->file_url : ''}}" alt=""></a>
                        <a href="{{ route('photoList',$photo) }}">
                            <h5>{{ $photo->title }}</h5>
                        </a>
                        <a href="{{ route('photoList',$photo) }}">{{ count($photo->files) }} items</a>
                    </div>
                    @endforeach
                   

                </div>

            </div>
        </div>
        </div>
    </section>
@endsection
