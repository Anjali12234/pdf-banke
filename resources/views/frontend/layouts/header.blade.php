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
            <div class="col-md-6 bg-white ">
                <div class="butttons bg-white p-2">
                    <ul class="extra-button">
                        <li class="buttons-right"> <a href="{{ route('login') }}"> <button>Login</button></li></a>
                        <li class="buttons-right"> <button class="btn-success">Nepali</button></li>
                        <li class="buttons-right"> <button>English</button></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="sub-header bg-white" >
                <div class="row bg-white py-3" style="background-image: {{ asset('frontend/assets/img/bg.png') }}">
                    <div class="col-md-4 bg-white">
                        <div class="logo bg-white">
                            <img class="bg-white" src="{{ officeSetting()->office_logo ?? '' }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 bg-white">
                        <div class="title mb-3">
                            @foreach (officeHeaders() as $officeHeader)
                                
                            <p class="margin text-center">{{ $officeHeader->title??'' }}</p>
                            @endforeach
                          
                            <p class="margin text-center"><strong class=" bg-white"> {{ officeSetting()->office_name??'' }}</strong></p>
                            <p class="margin text-center"> {{ officeSetting()->office_address??'' }} </p>
                        </div>
                    </div>
                    <div class="col-md-4 bg-white ">
                        <div class="flag bg-white">
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
