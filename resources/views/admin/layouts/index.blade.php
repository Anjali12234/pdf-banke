@extends('admin.layouts.master')
@section('main-container')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-content fade-in-up">
            <h2>{{ __("Dashboard") }}</h2>

            <div class="row mt-5">
                <div class="col-lg-3 col-md-6">
                    <div class="ibox bg-success color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong">{{ $slider_count }}</h2>
                            <div class="m-b-5">{{ __("Slider") }}</div><i class="ti-shopping-cart widget-stat-icon"></i>
                        </div>
                    </div>
                </div>  
                <div class="col-lg-3 col-md-6">
                    <div class="ibox bg-info color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong">{{ $employee_count }}</h2>
                            <div class="m-b-5">{{ __("Employee") }}</div><i class="ti-bar-chart widget-stat-icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ibox bg-warning color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong">{{ $downloads_count }}</h2>
                            <div class="m-b-5">{{ __("Download List") }}</div><i class="fa fa-money widget-stat-icon"></i>
                        </div>
                    </div>
                </div>
                @foreach ($newsCategories as $newsCategory)
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-danger color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">{{ $newsCategory->news_lists_count }}</h2>
                                <div class="m-b-5">{{ $newsCategory->title }}</div><i
                                    class="fa-solid fa-calendar-arrow-down"></i>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="chart-wrapper">
                            <div class="progress-wrapper">
                                <h2>{{ __("Bar Diagram") }} </h2>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @push('script')
            <script src="{{ asset('assets/js/scripts/chartjs_demo.js') }}" type="text/javascript"></script>
            <script src="{{ asset('assets/vendors/chart.js/dist/Chart.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('assets/js/scripts/bar-chart.js') }}"></script>
            <script>
                function toggleSidebar() {
                    const sidebar = document.getElementById('sidebar');
                    sidebar.idList.toggle('show');
                }
                let chartValues = {{ json_encode($chartData->values()) }};
                var labels = {!! json_encode($chartData->keys()) !!}.map(function(label) {
                    var parser = new DOMParser();
                    var decodedLabel = parser.parseFromString(label, 'text/html').body.textContent;
                    return decodedLabel;
                });
            </script>
        @endpush
    @endsection
