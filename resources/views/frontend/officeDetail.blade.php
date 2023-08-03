@extends('frontend.layouts.master')

@section('main-container')
    <section class="container-fluid sections">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-house"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $officeDetail->title }}</li>
            </ol>
        </nav>
        <div class="bar mt-3">
            <i class="fa fa-clipboard mt-3 " aria-hidden="true"></i>
            <strong> {{ $officeDetail->title }} </strong>
            <h6 class="content_title mt-4"><span class="pull-right"></span></h6>
        </div>
        <div class="row">
            <div class="col-md-12" >
                <p class="mt-4 mb-4">
                    {!! $officeDetail->description !!}
                </p>
            </div>
        </div>
      
        
       
    </section>
@endsection
