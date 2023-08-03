<div class="col-md-9 ">
    <div class="heading-title mt-2 ">
        <h5 class="text-white"> <i class="fa fa-info-circle" aria-hidden="true"></i>
            कानूनी दस्तावेज</h5>
    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">

        @foreach ($documentCategories as $documentCategory)
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $loop->first ? 'active' : '' }}"
                    id="document{{ $loop->iteration }}-tab" data-bs-toggle="tab"
                    data-bs-target="#document{{ $loop->iteration }}" type="button" role="tab"
                    aria-controls="document{{ $loop->iteration }}" aria-selected="false"><b>
                        {{ $documentCategory->title }}</b></button>
            </li>
        @endforeach

    </ul>
    <div class="tab-content" id="myTabContent">

        @foreach ($documentCategories as $documentCategory)
            <div class="tab-pane fade  {{ $loop->first ? ' show active' : '' }}"
                id="document{{ $loop->iteration }}" role="tabpanel"
                aria-labelledby="document{{ $loop->iteration }}-tab">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="px-5"><b> शीर्षक</b></th>
                            <th scope="col"><b>प्रकाशित मिति</b></th>
                            <th scope="col"><b> डाउनलोड </b></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($documentCategory->documents as $document)
                            <tr>
                                <td> <img src="{{ asset('assets/image/document1.png') }}"
                                        alt=""height="7%" width="7%">
                                    {{ $document->title }}</td>
                                <td> {{ $document->date }}</td>
                                <td><a class="btn btn-primary" href="{{ route('document.documentDetail',[$documentCategory,$document]) }}" role="button"><i
                                            class="fa-solid fa-eye"></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="#" class="btn1 btn-danger  ">थप हेर्नुहोस्</a>
            </div>
        @endforeach
    </div>




    <div class="heading-title mt-2 ">
        <h5 class="text-white"> <i class="fa fa-info-circle" aria-hidden="true"></i>
            सुचना/ समाचार </h5>
    </div>
    <table class="table">

        <thead>
            <tr>
                <th scope="col" class="px-5"><b> शीर्षक</b></th>
                <th scope="col"><b>प्रकाशित मिति</b></th>
                <th scope="col"><b> डाउनलोड </b></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notices as $notice)
                <tr>

                    <td><img src="{{ asset('assets/image/document1.png') }}"
                            alt=""height="7%" width="7%"> {{ $notice->title }}
                    </td>
                    <td> {{ $notice->date }}</td>
                    <td><a class="btn btn-primary" href="#" role="button"><i
                                class="fa-solid fa-eye"></a></td>

                </tr>
            @endforeach


        </tbody>

    </table>

    <a href="#" class="btn1 btn-danger">थप हेर्नुहोस्</a>


    <div class="heading-title mt-2 ">
        <h5 class="text-white"> <i class="fa fa-info-circle" aria-hidden="true"></i>
            किसान सूचना केन्द्र </h5>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="px-5"><b> शीर्षक</b></th>
                <th scope="col"><b>प्रकाशित मिति</b></th>
                <th scope="col"><b> डाउनलोड </b></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($publications as $publication)
                <tr>
                    <td> <img src="{{ asset('assets/image/document1.png') }}"
                            alt=""height="7%" width="7%"> {{ $publication->title }}</td>
                    <td> {{ $publication->date }}</td>
                    <td><a class="btn btn-primary" href="#" role="button"><i
                                class="fa-solid fa-eye"></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="#" class="btn1 btn-danger">थप हेर्नुहोस्</a>
</div>