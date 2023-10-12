@extends('backend.layouts.app')
@section('content')
    <div>
        <!-- Counts Section -->
        <section class="py-5">
            <div class="container-fluid">
                <div class="row">
                    <!-- Count item widget-->
                    <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
                        <div class="d-flex">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                                <use xlink:href="#user-1"> </use>
                            </svg>
                            <div class="ms-2">
                                <h3 class="h4 text-dark text-uppercase fw-normal">Students</h3>
                                <p class="text-gray-500 small">Last 7 days</p>
                                <p class="display-6 mb-0">{{$students}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Count item widget-->
                    <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
                        <div class="d-flex">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                                <use xlink:href="#survey-1"> </use>
                            </svg>
                            <div class="ms-2">
                                <h3 class="h4 text-dark text-uppercase fw-normal">Books</h3>
                                <p class="text-gray-500 small">Last 1 months</p>
                                <p class="display-6 mb-0">{{$books}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Count item widget-->
                    <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
                        <div class="d-flex">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                                <use xlink:href="#list-details-1"> </use>
                            </svg>
                            <div class="ms-2">
                                <h3 class="h4 text-dark text-uppercase fw-normal">Articles</h3>
                                <p class="text-gray-500 small">Last 2 months</p>
                                <p class="display-6 mb-0">{{$articles}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
