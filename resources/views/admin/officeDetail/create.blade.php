@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">कार्यालय विवरण</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.dashboard') }}">ड्यासबोर्ड
                        </a></li>
                    <li class="breadcrumb-item" style="color: blue"><a
                            href="{{ route('admin.officeDetail.index') }}">कार्यालय विवरण लिस्ट
                        </a></li>
                    <li class="breadcrumb-item" style="color: blue"><a href="">कार्यालय विवरण थप्नुहोस
                        </a></li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">

            <div class="col-md-12">
                <div class="ibox">

                    <div class="ibox-body">
                        <form action="{{ route('admin.officeDetail.store', $officeDetail) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12 form-group">
                                <label>शीर्षक</label>
                                <input class="form-control" type="text"
                                    value="{{ old('title', $officeDetail->title ?? '') }}" name="title"
                                    placeholder="Title">
                                <span class="text-warning">
                                    @error('title')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>शीर्षक English</label>
                                <input class="form-control" type="text"
                                    value="{{ old('english_title', $officeDetail->english_title ?? '') }}"
                                    name="english_title" placeholder="English Title">
                                <span class="text-warning">
                                    @error('english_title')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="type">Type</label>
                                <select name="type" id="type" class="form-control">
                                    <option value=""> Select</option>
                                    @foreach (App\Enums\OfficeDetailTypeEnum::cases() as $type)
                                        <option value="{{ $type->value }}"
                                            {{ $type->value == old('type') ? 'selected' : '' }}>
                                            {{ $type->label() }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-warning">
                                    @error('type')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="slug">Slug</label>
                                <input class="form-control" type="text" id="slug"
                                    value="{{ old('slug', $officeDetail->slug ?? '') }}" name="slug" placeholder="Slug">
                                <span class="text-warning">
                                    @error('slug')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>


                            <div class="col-sm-12 form-group">
                                <label>Position</label>
                                <input class="form-control" type="number"
                                    value="{{ old('position', $officeDetail->position ?? '') }}" name="position"
                                    placeholder="Position">
                                <span class="text-warning">
                                    @error('position')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Description</label>
                                <textarea class="form-control summernote" data-plugin="summernote" data-air-mode="true" type="text"
                                    name="description" placeholder="Description">{{ old('description', $officeDetail->description ?? '') }}</textarea>
                                <span class="text-warning">
                                    @error('description')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Description English</label>
                                <textarea class="form-control summernote" data-plugin="summernote" data-air-mode="true" type="text"
                                    name="english_description" placeholder="Description">{{ old('english_description', $officeDetail->english_description ?? '') }}</textarea>
                                <span class="text-warning">
                                    @error('english_description')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>



                            <div class="form-group">
                                <button class="btn btn-info" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>

    @push('script')
        <script type="text/javascript">
            $(function() {
                $('.summernote').summernote();
                $('.summernote_air').summernote({
                    airMode: true
                });
            });
        </script>
    @endpush
@endsection
