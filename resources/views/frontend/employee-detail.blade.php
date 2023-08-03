@extends('frontend.layouts.master')

@section('main-container')
    <section class="container-fluid sections ">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-house"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">कर्मचारीहरु</li>
            </ol>
        </nav>
        <div class="">
            <div class="col-md-12 mb-4">
                <center>
                    <div class="card">
                        <img src="{{ $employees->first()->image??'' }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h6 class="fw-bold">{{ $employees->first()->name??'' }}</h6>
                            <p>{{ $employees->first()->department->title??'' }}</p>
                            <p>{{ $employees->first()->designation->title??'' }}</p>
                            <p><i class="fa fa-phone"></i> {{ $employees->first()->phone??'' }}</p>
                            <p><i class="fa fa-envelope"></i> {{ $employees->first()->email??'' }}</p>
                        </div>
                    </div>
                </center>
            </div>

        </div>
        <div class="row">
            @foreach ($employees->skip(1) as $employee)
                <div class="col-md-3 mb-4  ">
                    <div class="card">
                        <img src="{{ $employee->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="fw-bold">{{ $employee->name }}</h6>
                            <p>{{ $employee->department->title??'' }}</p>
                            <p>{{ $employee->designation->title??'' }}</p>
                            <p><i class="fa fa-phone"></i> {{ $employee->phone }}</p>
                            <p><i class="fa fa-envelope"></i> {{ $employee->email }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </section>
@endsection
