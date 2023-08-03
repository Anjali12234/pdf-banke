@extends('frontend.layouts.master')

@section('main-container')
    @include('frontend.layouts.news')

    <section class="container-fluid">
        <div class="row  information">
            <div class="col-md-3 information-detail">

                <h5 class="headings"> <strong> किसान सूचना केन्द्र</strong></h5>
                    @foreach ($farmerCategories1->first()->farmerLists as $farmerList)
                        <div class="heading-detail bg-white p-1  mt-2 ">
                            <a class="" href="">
                                <h6 class="px-2 bg-white mt-1  ">{{ $farmerList->title ?? '' }}</h6>
                                <p class=" my-1 px-2 bg-white">{{ $farmerList->publish_date ?? '' }}| PDF</p>
                            </a>
                        </div>
                    @endforeach

            </div>
            <div class="col-md-6 mt-3" class="slider">
                <div id="slider" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-indicators bg-transparent">
                        @foreach ($sliders as $slider)
                            <button type="button" data-bs-target="#slider" data-bs-slide-to="{{ $loop->index }}"
                                class="{{ $loop->first ? 'active' : '' }}" aria-current="true"
                                aria-label="Slide 1"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach ($sliders as $slider)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img src="{{ $slider->image_url }}" class="d-block w-100 height-455"
                                    alt="खजुरा साकिनी क्रस  जातका कुखुराहरु">
                                <div class="carousel-caption d-none d-md-block bg-transparent">
                                    <p class="bg-transparent text-white">{{ $slider->title }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <button class="carousel-control-prev " type="button" data-bs-target="#slider" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-transparent" aria-hidden="true"></span>
                        <span class="visually-hidden ">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-transparent" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-3">
                <div class=" mt-3 bg-white pr-3">
                    <div class="d-flex">
                        <div class="officer-image ">
                            <img style="border-radius:50%;" src="{{ officeSetting()->officeChiefId->image ?? '' }}"
                                alt="" srcset="">
                        </div>
                        <div class="officer-detail ">
                            <h5> <strong>{{ officeSetting()->officeChiefId->name ?? '' }}</strong>
                            </h5>
                            <p>{{ officeSetting()->officeChiefId->department->title ?? '' }}</p>
                            <p><i class="fa fa-phone"></i> {{ officeSetting()->officeChiefId->phone ?? '' }}</p>
                            <p><i class="fa fa-envelope"></i> {{ officeSetting()->officeChiefId->email ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr style="width:80%; margin-left: 40px;">
                    <div class="d-flex">
                        <div class="officer-image ">
                            <img style="border-radius:50%;" src="{{ officeSetting()->informationOfficerId->image ?? '' }}"
                                alt="" srcset="">
                        </div>
                        <div class="officer-detail  ">
                            <h5> <strong>{{ officeSetting()->informationOfficerId->name ?? '' }}</strong>
                            </h5>
                            <p>{{ officeSetting()->informationOfficerId->department->title ?? '' }}</p>
                            <p><i class="fa fa-phone "></i>
                                {{ officeSetting()->informationOfficerId->phone ?? '' }}
                            </p>
                            <p><i class="fa fa-envelope "></i>
                                {{ officeSetting()->informationOfficerId->email ?? '' }}</p>
                        </div>
                    </div>



                </div>
                <div class="app mt-3">
                    <div style="margin-right: 3px;">
                        <img style="width:355px;" src="{{ asset('frontend/assets/img/app.png') }}" alt="">

                    </div>
                </div>
            </div>
        </div>
        <br>
    </section>
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-7 bg-white block-information">
                <h6 style="color:blue; background-color:white; margin-top:10px;"> <strong class="bg-white">
                        {{ $introduction->title ?? '' }}</strong></h6>
                <p style="">
                    <span style="background-color: white;">
                        {!! Str::words($introduction->description ?? '', 150, '..') !!}
                    </span>
                </p>

                <br>
                <a class="pb-5" style="text-decoration: none; padding-bottom:10px;"
                    href="{{ route('officeDetail', App\Enums\OfficeDetailTypeEnum::INTRODUCTION, 'introduction') }}">
                    थप हेर्नुहोस
                </a>
            </div>
            <div class="col-md-4 poster">
                <img class=" poster-image" src="{{ officeSetting()->office_cover_photo ?? '' }}" alt="">

            </div>
        </div>
        <br>

    </section>
    <section class="container-fluid">
        <div class="col-md-12 big-poster ">
            <img class="big-poster-img" src="{{ officeSetting()->office_ad_photo ?? '' }}" alt="">
        </div>
        <br>
    </section>
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-8">

                <div class="bar mt-2">
                    <i class="fa fa-info-circle m-2 " aria-hidden="true"></i>
                    <strong> कानूनी दस्तावेज</strong>
                    <h6 class="content_title mt-4"><span class="pull-right"></span></h6>
                </div>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    @foreach ($documentCategories as $documentCategorie)
                        <li class="nav-item " role="presentation">
                            <button class="nav-link {{ $loop->first ? 'active' : '' }}"
                                id="home{{ $loop->iteration }}-tab" data-bs-toggle="tab"
                                data-bs-target="#home{{ $loop->iteration }}" type="button" role="tab"
                                aria-controls="home{{ $loop->iteration }}"
                                aria-selected="true">{{ $documentCategorie->title }}</button>
                        </li>
                    @endforeach
                </ul>

                <div class="tab-content bg-white" id="myTabContent">
                    @foreach ($documentCategories as $documentCategory)
                        <div class="tab-pane  fade {{ $loop->first ? 'show active' : '' }}"
                            id="home{{ $loop->iteration }}" role="tabpanel"
                            aria-labelledby="home{{ $loop->iteration }}-tab" tabindex="0">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">शीर्षक</th>
                                        <th scope="col">प्रकाशित मिति</th>
                                        <th scope="col"> डाउनलोड</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($documentCategory->documentLists as $documentList)
                                        <tr>
                                            <th scope="row"><img style="height:30px; width:50px; margin-left:20px;"
                                                    src="{{ asset('frontend/assets/img/image.png') }}" alt="">
                                            </th>
                                            <td>{{ $documentList->title ?? '' }}</td>
                                            <td> {{ $documentList->publish_date ?? '' }}</td>
                                            <td><a href="{{ route('documentDetail', $documentList) }}"><i
                                                        class="fa fa-eye btn btn-primary btn-xs"></i></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            <div class="pb-2 m-2">
                                <a href="{{ route('documentCategory', $documentCategory) }}" class="btn btn-danger"> थप
                                    हेर्नुहोस</a>
                            </div>

                        </div>
                    @endforeach
                </div>


                <div class="bar mt-2" style="height:50px; ">
                    <i class="fa fa-info-circle m-2" aria-hidden="true"></i>
                    <strong> सूचना/समाचार</strong>
                    <h6 class="content_title"><span class="pull-right"></span></h6>
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    @foreach ($newsCategories as $newsCategory)
                        <li class="nav-item " role="presentation">
                            <button class="nav-link {{ $loop->first ? 'active' : '' }}"
                                id="news{{ $loop->iteration }}-tab" data-bs-toggle="tab"
                                data-bs-target="#news{{ $loop->iteration }}" type="button" role="tab"
                                aria-controls="news{{ $loop->iteration }}"
                                aria-selected="true">{{ $newsCategory->title }}</button>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content bg-white" id="myTabContent">
                    @foreach ($newsCategories as $newsCategory)
                        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                            id="news{{ $loop->iteration }}" role="tabpanel"
                            aria-labelledby="news{{ $loop->iteration }}-tab" tabindex="0">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">शीर्षक</th>
                                        <th scope="col">प्रकाशित मिति</th>
                                        <th scope="col"> डाउनलोड</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($newsCategory->newsLists as $newsList)
                                        <tr>
                                            <th scope="row"><img style="height:30px; width:50px; margin-left:20px;"
                                                    src="{{ asset('frontend/assets/img/image.png') }}" alt="">
                                            </th>
                                            <td>{{ $newsList->title ?? '' }}</td>
                                            <td> {{ $newsList->publish_date ?? '' }}</td>
                                            <td><a href="{{ route('newsDetail', $newsList) }}"><i
                                                        class="fa fa-eye btn btn-primary btn-xs"></i></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pb-2 m-2">
                                <a href="{{ route('newsCategory', $newsCategory) }}" class="btn btn-danger"> थप
                                    हेर्नुहोस</a>
                            </div>
                        </div>
                    @endforeach
                </div>


                <div class="bar mt-2" style="height:50px; ">
                    <i class="fa fa-info-circle m-2" aria-hidden="true"></i>
                    <strong> किसान सूचना केन्द्र </strong>
                    <h6 class="content_title"><span class="pull-right"></span></h6>
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    @foreach ($farmerCategories as $farmerCategory)
                        <li class="nav-item " role="presentation">
                            <button class="nav-link {{ $loop->first ? 'active' : '' }}"
                                id="farmer{{ $loop->iteration }}-tab" data-bs-toggle="tab"
                                data-bs-target="#farmer{{ $loop->iteration }}" type="button" role="tab"
                                aria-controls="farmer{{ $loop->iteration }}"
                                aria-selected="true">{{ $farmerCategory->title }}</button>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content bg-white" id="myTabContent">
                    @foreach ($farmerCategories as $farmerCategory)
                        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                            id="farmer{{ $loop->iteration }}" role="tabpanel"
                            aria-labelledby="farmer{{ $loop->iteration }}-tab" tabindex="0">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">शीर्षक</th>
                                        <th scope="col">प्रकाशित मिति</th>
                                        <th scope="col"> डाउनलोड</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($farmerCategory->farmerLists as $farmerList)
                                        <tr>
                                            <th scope="row"><img style="height:30px; width:50px; margin-left:20px;"
                                                    src="{{ asset('frontend/assets/img/image.png') }}" alt="">
                                            </th>
                                            <td>{{ $farmerList->title ?? '' }}</td>
                                            <td> {{ $farmerList->publish_date ?? '' }}</td>
                                            <td><a href="{{ route('farmerDetail', $farmerList) }}"><i
                                                        class="fa fa-eye btn btn-primary btn-xs"></i></a></td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                            <div class="pb-2 m-2">
                                <a href="{{ route('farmerCategory', $farmerCategory) }}" class="btn btn-danger"> थप
                                    हेर्नुहोस</a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="col-md-3">
                <div class="well-heading mt-2"
                    style="border-left: 20px solid #b31b1b; height:50px; color:white; width: 486px; position: relative;background-color: #004a84;">
                    <i class="fa fa-link mt-2 " style="background-color: #004a84; font-size:30px;"
                        aria-hidden="true"></i>
                    सम्बन्धित जानकारीहरु <h6 class="content_title"><span class="pull-right"></span>
                    </h6>
                </div>
                <div class="blockmenu mt-4 " style="background-color: #004a84; height:50px; width: 486px;">
                    <a href="{{ route('faq') }}" class="d-flex justify-content mt-4"
                        style="text-decoration:none; background-color: #004a84; margin-left: 15px; margin-top:10px;">
                        <span class="block-icon" style=" "><i class="fa fa-question-circle mt-2"
                                style="font-size:30px; background-color:#004a84; color:white;"></i></span>
                        <div class="block-content" style="background-color: #004a84 ">
                            <div class="block-content-title mt-2">धेरै सोधिएका
                                प्रश्नहरु</div>
                        </div>
                    </a>
                </div>
                <div class="blockmenu mt-4 " style="background-color: #004a84; height:50px; width: 486px;">
                    <a href="" class="d-flex justify-content mt-4"
                        style="text-decoration:none; background-color: #004a84; margin-left: 15px; margin-top:10px;">
                        <span class="block-icon"><i class="fa fa-envelope mt-2"
                                style="font-size:30px; background-color:#004a84"></i></span>
                        <div class="block-content" style="background-color: #004a84">
                            <div class="block-content-title mt-2 ">मेल जाँच गर्नुहोस्</div>
                        </div>
                    </a>
                </div>
                <div class="blockmenu mt-4 " style="background-color: #004a84; height:50px; width: 486px;">
                    <a href="" class="d-flex justify-content mt-4"
                        style="text-decoration:none; background-color: #004a84; margin-left: 15px; margin-top:10px;">
                        <span class="block-icon"><i class="fa fa-calculator mt-2"
                                style="font-size:30px; background-color:#004a84"></i></span>
                        <div class="block-content" style="background-color: #004a84">
                            <div class="block-content-title mt-2 ">बिल सर्बजनिकरण</div>
                        </div>
                    </a>
                </div>
                <div class="blockmenu mt-4 " style="background-color: #004a84; height:50px; width: 486px;">
                    <a href="" class="d-flex justify-content mt-4"
                        style="text-decoration:none; background-color: #004a84; margin-left: 15px; margin-top:10px;">
                        <span class="block-icon"><i class="fa-brands fa-twitter mt-2"
                                style="font-size:30px; background-color:#004a84"></i></span>
                        <div class="block-content" style="background-color: #004a84">
                            <div class="block-content-title mt-2 ">ट्विटर लिङ्क</div>
                        </div>
                    </a>
                </div>
                <div class="blockmenu mt-4 " style="background-color: #004a84; height:50px; width: 486px;">
                    <a href="{{ route('link') }}" class="d-flex justify-content mt-4"
                        style="text-decoration:none; background-color: #004a84; margin-left: 15px; margin-top:10px;">
                        <span class="block-icon"><i class="fa fa-link mt-2"
                                style="font-size:30px; background-color:#004a84"></i></span>
                        <div class="block-content" style="background-color: #004a84">
                            <div class="block-content-title mt-2 "> लिंकहरु</div>
                        </div>
                    </a>
                </div>
                <div class="blockmenu mt-4 " style="background-color: #004a84; height:50px; width: 486px;">
                    <a href="{{ route('link') }}" class="d-flex justify-content mt-4"
                        style="text-decoration:none; background-color: #004a84; margin-left: 15px; margin-top:10px;">
                        <span class="block-icon"><i class="fa-brands fa-facebook mt-2"
                                style="font-size:30px; background-color:#004a84"></i></span>
                        <div class="block-content" style="background-color: #004a84">
                            <div class="block-content-title mt-2 "> फेसबुक</div>
                        </div>
                    </a>
                </div>
               
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="wrapper mt-5 mb-3">
            <div class="photobanner">
                @foreach ($photos as $photo)
                    <img src="{{ count($photo->files) > 0 ? $photo->files?->random()->file_url : '' }}" />
                @endforeach
            </div>
        </div>

    </section>
    <section class="container-fluid">
        <div class="wrapper mt-5 mb-3">
           
        </div>

    </section>
    
@endsection
