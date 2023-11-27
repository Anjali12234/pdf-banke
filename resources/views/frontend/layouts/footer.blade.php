<section class="container-fluid hello">

    <div class="row footer ">
        <div class="col-md-4 address">

            <h5 class="text-bold">{{ __('Contact') }}</h5>
            @if (App::getLocale() === 'en')
                <p> {{ officeSetting()->office_english_name ?? '' }}</p>
                <p> <i class="fa fa-map-marker"></i> {{ officesetting()->office_english_address ?? '' }}</p>
            @elseif (App::getLocale() === 'ne')
                <p> {{ officeSetting()->office_name ?? '' }}</p>
                <p> <i class="fa fa-map-marker"></i> {{ officesetting()->office_address ?? '' }}</p>
            @endif

            <p> <i class="fa fa-phone"></i> {{ officeSetting()->office_phone ?? '' }}</p>
            <p> <i class="fa fa-envelope"></i> {{ officeSetting()->office_email ?? '' }}</p>

        </div>
        <div class="col-md-4  link">
            <h5>{{ __('Important Link') }}</h5>
            <ul>
                @foreach (links() as $link)
                    <li><a style="text-decoration: none; background-color: #00335e; color:white;"
                            href="{{ $link->url }}">
                            @if (App::getLocale() === 'en')
                                {{ $link->english_title ?? '' }}
                            @elseif (App::getLocale() === 'ne')
                                {{ $link->title ?? '' }}
                            @endif
                        </a>
                    </li>
                @endforeach

            </ul>
        </div>
        <div class="col-md-4 map">
            <h5>{{ __("Our Map") }}</h5>

            <div class="image">
                <iframe src="{{ officeSetting()->map_url ?? '' }}" width="480px" height="250" style="border:0;"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>



        </div>
    </div>
    <div class="row sub-footer ">
        <div class="col-md-3 mt-2 copyright">
            <span>Copyright © कुखुरा बिकास फार्म</span>

        </div>
        <div class="col-md-3 mt-2 copyright">
            <span>Last Updated: 2022-06-08</span>
        </div>
        <div class="col-md-3 mt-2 copyright">
            <span>Visitors: 6732</span>


        </div>
        <div class="col-md-3 mt-2 copyright">
            <span>Developed By:
                <a href="" target="blank">Ninja Infosys</a></span>



        </div>
    </div>
</section>
