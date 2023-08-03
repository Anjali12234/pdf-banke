@extends('frontend.layouts.master')

@section('main-container')
    <section class="container-fluid sections">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-house"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">महत्वोपूर्ण लिंक</li>
            </ol>
        </nav>
        <div class="bar mt-3">
            <i class="fa fa-clipboard mt-3 " aria-hidden="true"></i>
            <strong> महत्वोपूर्ण लिंक </strong>
            <h6 class="content_title mt-4"><span class="pull-right"></span></h6>
        </div>
        <div class="row ">
            <div class="col-md-12">
                <table class="table bg-white mb-4" id="karyavidhi">
                    <thead class=" bg-white">
                        <tr class=" bg-white">
                            <th class=" bg-white" scope="col">क्र.सं</th>
                            <th class=" bg-white" scope="col">कार्यालयको नाम</th>
                            <th class=" bg-white" scope="col">लिंकहरु</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($links as $link)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td> {{ $link->title ?? '' }}</td>
                                <td> <a style="text-decoration:none;" href="{{ $link->url }}"> {{ $link->url }}</a> </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
