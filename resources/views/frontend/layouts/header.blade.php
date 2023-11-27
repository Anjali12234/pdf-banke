<section class="container-fluid pb-3">
    <div class="header ">
        <div class="row bg-white">
            <div class="col-md-6 bg-white pt-3">
                <span class="date-text bg-white mt-5">
                    <iframe class="bg-white"scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0"
                        allowtransparency="true"
                        src="https://www.ashesh.com.np/linknepali-time.php?time_only=no&font_color=000&aj_time=yes&font_size=14&line_brake=0&bikram_sambat=0&api=741198k444"
                        width="308" height="25">

                    </iframe>
                </span>
            </div>
            <div class="col-md-6 ">
                <div class="butttons p-2">
                    <ul class="extra-button">
                        <li class="buttons-right">
                            <a href="{{ route('login') }}">
                                <button>{{ __('Login') }}</button>
                            </a>
                        </li>
                        <li class="buttons-right">
                            <a href="{{ url()->current() }}?change_language=ne">
                                <button
                                    class="{{ app()->getLocale() === 'ne' ? 'btn-success' : '' }}">{{ __('Nepali') }}</button>
                            </a>
                        </li>
                        <li class="buttons-right">
                            <a href="{{ url()->current() }}?change_language=en">
                                <button
                                    class="{{ app()->getLocale() === 'en' ? 'btn-success' : '' }}">{{ __('English') }}</button>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <hr>
            <div class="sub-header ">
                <div class="row py-3" style="background-image: {{ asset('frontend/assets/img/bg.png') }}">
                    <div class="col-md-4 ">
                        <div class="logo ">
                            <img src="{{ officeSetting()->office_logo ?? '' }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="title mb-3">
                            @foreach (officeHeaders() as $officeHeader)
                                <p class="margin text-center"
                                    style=" font-size: {{ $officeHeader->font_size }}px;
                                    color: {{ $officeHeader->font_color }};
                                    font-family: {{ $officeHeader->font_family }};">
                                    @if (App::getLocale() === 'en')
                                        {{ $officeHeader->english_title ?? '' }}
                                    @elseif (App::getLocale() === 'ne')
                                        {{ $officeHeader->title ?? '' }}
                                    @endif
                                </p>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="flag">
                            <a href="">
                                <img class="bg-white" src="{{ officeSetting()->flag ?? '' }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
