@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">सम्पर्क सन्देशहरू</h1>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: blue"><a href="{{ route('admin.dashboard') }}">ड्यासबोर्ड
                        </a></li>
                    <li class="breadcrumb-item active" aria-current="page">सम्पर्क सन्देशहरू</li>
                </ol>
            </nav>
        </div>
        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-xl-12">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">सम्पर्क सन्देशहरू</div>
                        </div>
                        <div class="ibox-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Name	</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($contactMessages as $key=>$contactMessage)
                                        <tr>
                                            <td>{{ $contactMessages->firstItem() + $key }}</td>
                                            <td>{{ $contactMessage->name }}</td>
                                            <td>{{ $contactMessage->email }}</td>
                                            <td>{{ $contactMessage->phone }}</td>
                                            <td>{{ $contactMessage->subject }}</td>
                                            <td>{!! Str::limit($contactMessage->message, 50) !!}</td>

                                            
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="">
                                                <center> No data found.</center>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $contactMessages->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>

    <!-- END PAGE CONTENT-->
@endsection
