@extends('frontend.layouts.master')

@section('main-container')
    <section class="container-fluid sections">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-house"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">कर्मचारी दरबन्दी</li>
            </ol>
        </nav>
        <div class="bar mt-3">
            <i class="fa fa-clipboard mt-3 " aria-hidden="true"></i>
            <strong> कर्मचारी दरबन्दी </strong>
            <h6 class="content_title mt-4"><span class="pull-right"></span></h6>
        </div>
        <div class="row ">
            <div class="col-md-12">
                <img style="height:500px; width: 500px; margin-top:20px; margin-bottom:20px;" src="{{asset('frontend/assets/img/download.png')}}" alt="">
            </div>
        </div>
    </section>
@endsection
