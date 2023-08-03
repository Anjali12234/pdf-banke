@extends('frontend.layouts.master')

@section('main-container')
    <section class="container-fluid sections">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-house"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $farmerCategory->title }}</li>
            </ol>
        </nav>
        <div class="bar mt-3">
            <i class="fa fa-clipboard mt-3 " aria-hidden="true"></i>
            <strong> {{ $farmerCategory->title }} </strong>
            <h6 class="content_title mt-4"><span class="pull-right"></span></h6>
        </div>
        <div class="row ">
            <div class="col-md-12">
                <table class="table bg-white mb-4" id="karyavidhi">
                    <thead class=" bg-white">
                        <tr class=" bg-white">
                            <th class=" bg-white" scope="col">क्र.सं</th>
                            <th class=" bg-white" scope="col">शीर्षक</th>
                            <th class=" bg-white" scope="col">समूह</th>
                            <th class=" bg-white" scope="col">प्रकाशित मिति</th>
                            <th class=" bg-white" scope="col">प्रकाशक</th>
                            <th class=" bg-white" scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($farmerCategory->farmerLists as $key => $farmerList)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $farmerList->title??'' }}</td>
                                <td> {{ $farmerCategory->title??'' }}</td>
                                <td> {{ $farmerList->publish_date??'' }}</td>
                                <td> PDF</td>
                                <td><a href="{{ route('farmerDetail', $farmerList) }}"><i class="fa fa-eye btn btn-primary btn-xs">
                                            विवरण हेर्नुहोस्</i> </a>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
