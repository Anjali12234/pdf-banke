<section class="container-fluid pb-3">
    <nav class="navbar navbar-expand-lg navbar-light  bg-primary">
        <div class="container-fluid bg-primary">
            <div class="collapse navbar-collapse bg-primary" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 bg-primary">
                    <li class="nav-item bg-primary">
                        <a class="nav-link active bg-primary" aria-current="page" href="{{ route('index') }}">
                            <i class="fa fa-house bg-primary text-white"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown bg-primary mt-1">
                        <a class="nav-link navbar-brand active dropdown-toggle bg-primary text-white" href="#"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            हाम्रो बारेमा
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="bg-white" style="text-align: center">
                                <a class="dropdown-item"
                                    href="{{ route('officeDetail', App\Enums\OfficeDetailTypeEnum::INTRODUCTION, 'introduction') }}">
                                    परिचय
                                </a>
                            </li>

                            <li class="bg-white" style="text-align: center">
                                <a class="dropdown-item"
                                    href="{{ route('officeDetail', App\Enums\OfficeDetailTypeEnum::PURPOSE, 'purpose') }}">
                                    उद्देश्य
                                </a>
                            </li>
                            <li class="bg-white" style="text-align: center">
                                <a class="dropdown-item"
                                    href="{{ route('officeDetail', App\Enums\OfficeDetailTypeEnum::WORK_DESCRIPTION, 'work_description') }}">
                                    कार्य विवरण
                                </a>
                            </li>
                            <li class="bg-white" style="text-align: center">
                                <a class="dropdown-item"
                                    href="{{ route('officeDetail', App\Enums\OfficeDetailTypeEnum::ORGANIZATIONAL_STRUCTURE, 'organizational_structure') }}">
                                    संगठन संरचना
                                </a>
                            </li>
                            <li class="bg-white" style="text-align: center">
                                <a class="dropdown-item"
                                    href="{{ route('officeDetail', App\Enums\OfficeDetailTypeEnum::CITIZEN_CHARTER, 'citizen_charter') }}">
                                    नागरिक वडापत्र
                                </a>
                            </li>
                            <li class="bg-white" style="text-align: center">
                                <a class="dropdown-item" href="{{ route('emplDetail') }}">
                                    कर्मचारी विवरण
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown bg-primary mt-1">
                        <a class="nav-link navbar-brand active dropdown-toggle bg-primary text-white" href="#"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            सूचना/समाचारहरु
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach (newsCategorys() as $newsCategory)
                                <li class="bg-white" style="text-align: center"><a class="dropdown-item"
                                        href="{{ route('newsCategory', $newsCategory) }}">{{ $newsCategory->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown bg-primary mt-1">
                        <a class="nav-link navbar-brand active dropdown-toggle bg-primary text-white" href="#"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            डाउनलोड
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach (downloadCategorys() as $downloadCategory)
                                <li class="bg-white" style="text-align: center"><a class="dropdown-item"
                                        href="{{ route('downloadCategory', $downloadCategory) }}">{{ $downloadCategory->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="nav-item bg-primary mt-2">
                        <a class=" bg-primary navbar-brand active text-white " href="{{ route('link') }}">लिंकहरु</a>
                    </li>
                    <li class="nav-item dropdown bg-primary mt-1">
                        <a class="nav-link navbar-brand active dropdown-toggle bg-primary text-white" href="#"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ग्यालरी
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="bg-white" style="text-align: center"><a class="dropdown-item"
                                    href="{{ route('photoGallery') }}">फोटो ग्यालरी</a></li>
                            <li class="bg-white " style="text-align: center"><a class="dropdown-item"
                                    href="{{ url('videoGallery') }}">भिडियो ग्यालरी</a></li>
                        </ul>
                    </li>
                    <li class="nav-item bg-primary mt-2">
                        <a class=" bg-primary navbar-brand active text-white" href="{{ route('contact') }}">सम्पर्क</a>
                    </li>

                </ul>
                <form class="d-flex bg-primary">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success btn-primary text-white" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</section>
