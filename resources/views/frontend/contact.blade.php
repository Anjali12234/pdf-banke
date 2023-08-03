@extends('frontend.layouts.master')

@section('main-container')
    <section class="container-fluid sections">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-house"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">सम्पर्क</li>
            </ol>
        </nav>
        <div class="row ">
            @include('sweetalert::alert')

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 contact-text"
                        style="background-color:rgb(1, 66, 1); text-align:center;padding-top:50px; height:200px; width:480px; margin-left:10px;">
                        <i class="fa fa-phone" style="height: 20px;" aria-hidden="true"></i>
                        <h2>फोन</h2>
                        <span>०८१-५६०२०१</span>
                    </div>
                    <div class="col-md-3 contact-text"
                        style="background-color:rgb(1, 66, 1); text-align:center;padding-top:50px; height:220px; width:480px; margin-left:26px;">
                        <i class="fa fa-map-marker"></i>
                        <h2>संपर्क ठेगाना</h2>
                        <span>कुखुरा बिकास फार्म</span><br>
                        <span>खजुरा, बाँके</span>
                    </div>
                    <div class="col-md-3 contact-text"
                        style="background-color:rgb(1, 66, 1); text-align:center;padding-top:50px; height:200px; width:480px; margin-left:26px;">
                        <i class="fa fa-envelope"></i>
                        <h2>इ-मेल</h2>
                        <span>pdfkhajura@gmail.com</span>
                    </div>
                </div>
                <div class="row mt-5 mb-4">
                    <div class="col-md-5 mb-4 ">
                        <form action="{{ route('admin.contactMessage.store') }}" method="PoST" class="form ">
                            @csrf

                            <div class="row">
                                <div class="col-md-2 mt-1" style="width:310px;">
                                    <label class="form-label" for="">Name</label>
                                    <input type="text" class="form-control " name="name" placeholder="Name">
                                    <span class="text-warning">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-2 mt-4" style="width:310px;">
                                    <label class="form-label" for="">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                    <span class="text-warning">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 " style="width:310px;">
                                    <label class="form-label" for="">Phone Number</label>
                                    <input type="number" class="form-control" name="phone" placeholder="Phone Number">
                                    <span class="text-warning">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-2 " style="width:310px;">
                                    <label class="form-label" for="">Subject</label>
                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                    <span class="text-warning">
                                        @error('subject')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-7 " style="600px;">
                                    <label class="form-label" for=""> Message</label>
                                    <textarea name="message" rows="3" class="form-control"></textarea>
                                    <span class="text-warning">
                                        @error('message')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                            </div>
                            <div class="row ">
                                <div class="col-md-2 " style="600px;">
                                    <button class="btn btn-danger mb-4 mt-2" type="submit">Submit</button>

                                </div>

                            </div>
                            <div class="col-md-2 ">
                            </div>
                        </form>

                    </div>
                    <div class="col-md-5">
                        <div class="image">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d56299.450071304476!2d81.57326!3d28.124695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3998617aa9744f87%3A0x590ea4a291cbe255!2sKhajura%2C%20Nepal!5e0!3m2!1sen!2sus!4v1656655997957!5m2!1sen!2sus"
                                width="850px" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
