@extends('frontend.layouts.master')

@section('main-container')
    <section class="container-fluid sections">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-house"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page"> धेरै सोधिएका प्रस्नहरु</li>
            </ol>
        </nav>
        <div class="bar mt-3">
            <i class="fa fa-clipboard mt-3 " aria-hidden="true"></i>
            <strong> धेरै सोधिएका प्रस्नहरु </strong>
            <h6 class="content_title mt-4"><span class="pull-right"></span></h6>
        </div>
        <div class="row mt-3 mb-4">
            @foreach ($faqs as $index => $faq)
                <div class="col-md-8" style="padding-left: 100px; ">
                    <div class="accordion mt-2" id="accordionExample">
                        <div class="accordion-item ">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $index }}" aria-expanded="false"
                                    aria-controls="collapse{{ $index }}">
                                    {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="collapse{{ $index }}" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {{ $faq->answer }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
@endsection
