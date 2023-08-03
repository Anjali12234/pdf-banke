@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">कार्यालय सेटिंग</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.dashboard') }}">ड्यासबोर्ड
                        </a></li>
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.employee.index') }}">कार्यालय
                            सेटिंग
                        </a></li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">

            <div class="col-md-12">
                <div class="ibox">

                    <div class="ibox-body">

                        <form action="{{ route('admin.officesetting.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="office_name">कार्यालयको नाम *</label>
                                    <input class="form-control" id="office_name" type="text" name="office_name"
                                        value="{{ old('office_name', $officeSetting->office_name ?? '') }}">
                                    <span class="text-warning">
                                        @error('office_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="office_english_name">कार्यालयको नाम * English</label>
                                    <input class="form-control" id="office_english_name" type="text" name="office_english_name"
                                        value="{{ old('office_english_name', $officeSetting->office_english_name ?? '') }}">
                                    <span class="text-warning">
                                        @error('office_english_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="office_address">कार्यालय ठेगाना *</label>
                                    <input class="form-control" id="office_address" type="text" name="office_address"
                                        value="{{ old('office_address', $officeSetting->office_address ?? '') }}">
                                    <span class="text-warning">
                                        @error('office_address')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="office_english_address">कार्यालय ठेगाना *English</label>
                                    <input class="form-control" type="text" id="office_english_address" name="office_english_address"
                                        value="{{ old('office_english_address', $officeSetting->office_english_address ?? '') }}">
                                    <span class="text-warning">
                                        @error('office_english_address')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="office_phone">फोन नं. *</label>
                                    <input class="form-control" id="office_phone" type="text " name="office_phone"
                                        value="{{ old('office_phone', $officeSetting->office_phone ?? '') }}">
                                    <span class="text-warning">
                                        @error('office_phone')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="office_email">इमेल</label>
                                    <input class="form-control" id="office_email" type="text" name="office_email"
                                        value="{{ old('office_email', $officeSetting->office_email ?? '') }}">
                                    <span class="text-warning">
                                        @error('office_email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="cover_photo">Cover Photo</label>
                                    <span>
                                        <img src="{{ $officeSetting->office_cover_photo ?? '' }}" height="70"
                                            alt="">
                                    </span>
                                    <input class="form-control" id="cover_photo" type="file" name="office_cover_photo">
                                    <span class="text-warning">
                                        @error('office_cover_photo')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="logo1">Logo 1</label>
                                    <span>
                                        <img src="{{ $officeSetting->office_logo ?? '' }}" height="70" alt="">
                                    </span>
                                    <input class="form-control" id="logo1" type="file" name="office_logo">

                                    <span class="text-warning">
                                        @error('office_logo')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="logo2">logo 2</label>
                                    <span>
                                        <img src="{{ $officeSetting->flag ?? '' }}" height="70" alt="">
                                    </span>
                                    <input class="form-control" id="logo2" type="file" name="flag">

                                    <span class="text-warning">
                                        @error('flag')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="ad_photo">Ad Photo</label>
                                    <span>
                                        <img src="{{ $officeSetting->office_ad_photo ?? '' }}" height="70"
                                            alt="">
                                    </span>
                                    <input class="form-control" id="ad_photo" type="file" name="office_ad_photo">

                                    <span class="text-warning">
                                        @error('office_ad_photo')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="office_chief_id">कार्यालय प्रमुख</label>
                                    <select name="office_chief_id" id="office_chief_id" class="form-control">
                                        <option value="">--Select Employee--</option>
                                        @foreach ($employees as $employee)
                                            <option value="{{ $employee->id }}"
                                                {{ $employee->id == old('office_chief_id', $officeSetting->office_chief_id ?? '') ? 'selected' : '' }}>
                                                {{ $employee->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <span class="text-warning">
                                        @error('office_chief_id')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="information_officer_id">सूचना अधिकारी</label>
                                    <select name="information_officer_id" id="information_officer_id"
                                        class="form-control">
                                        <option value="">--Select Employee--</option>
                                        @foreach ($employees as $employee)
                                            <option value="{{ $employee->id }}"
                                                {{ $employee->id == old('information_officer_id', $officeSetting->information_officer_id ?? '') ? 'selected' : '' }}>
                                                {{ $employee->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <span class="text-warning">
                                        @error('information_officer_id')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="map">Map Url</label>
                                <input class="form-control" type="url" id="map" value="{{ old('map_url', $officeSetting->map_url ?? '') }}" name="map_url"
                                    placeholder="">
                                <span class="text-warning">
                                    @error('map_url')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="facebook_url">Facebook Url</label>
                                <input class="form-control" id="facebook_url" type="url"
                                    value="{{ old('facebook_url', $officeSetting->facebook_url ?? '') }}"
                                    name="facebook_url" placeholder="Email">
                                <span class="text-warning">
                                    @error('facebook_url')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="twitter_url">Twitter Url</label>
                                <input class="form-control" id="twitter_url" type="url" name="twitter_url"
                                    value="{{ old('twitter_url', $officeSetting->twitter_url ?? '') }}"
                                    placeholder="Address">
                                <span class="text-warning">
                                    @error('twitter_url')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>


                            <div class="form-group">
                                <button class="btn btn-info" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                    <div class="ibox-body">

                       
                       @livewire("office-header-livewire")
                    </div>
                </div>
                <div class="page-content fade-in-up">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="ibox">
                                <div class="ibox-head">
                                    <div class="ibox-title">Office Header </div>
                                </div>
                                <div class="ibox-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>English</th>
                                                <th>Nepali</th>
                                                <th>Position</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($officeHeaders as $key=>$officeHeader)
                                                <tr>
                                                    <td>{{ $officeHeaders->firstItem() + $key }}</td>
                                                    <td>{{ $officeHeader->english_title }}</td>
                                                    <td>{{ $officeHeader->title }}</td>
                                                    <td>{{ $officeHeader->position }}</td>

                                                    <td>

                                                        <a class="btn btn-primary"
                                                            href="{{ route('admin.officeHeader.edit', $officeHeader) }}">
                                                            <i class="fa-solid fa-pen-to-square"></i></a>

                                                        <form
                                                            action="{{ route('admin.officeHeader.destroy', $officeHeader) }}"
                                                            method="post" style="display: inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm('Are You sure want to delete')"> <i
                                                                    class="fa-solid fa-trash"></i> </button>

                                                        </form>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="5" class="">
                                                        <center> No data found.</center>
                                                    </td>
                                                </tr>
                                            @endforelse 
                                        </tbody>
                                    </table>
                                    {{ $officeHeaders->links() }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    @push('script')
    @endpush
@endsection
