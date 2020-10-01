@extends('layouts.app')

@section('title', 'Dashborad')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Dashborad</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Dashborad</a></li>
            </ol>

        </div>
    </div>


    <div class="row">
        <div class="col-md-6 col-lg-6 col-xl-3">
            <a href="/post/show">
                <div class="widget-panel widget-style-2 bg-white">
                    <i class="md md-list text-primary"></i>
                    <h2 class="m-0 text-dark counter font-600">{{$post_count}}</h2>
                    <div class="text-muted m-t-5">Total Post</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <a href="/comment/show">
                <div class="widget-panel widget-style-2 bg-white">
                    <i class="md md-insert-comment text-pink"></i>
                    <h2 class="m-0 text-dark counter font-600">{{$comment_count}}</h2>
                    <div class="text-muted m-t-5">Total Comments</div>
                </div>
            </a>

        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <a href="/category/show">
                <div class="widget-panel widget-style-2 bg-white">
                    <i class="md md-store-mall-directory text-info"></i>
                    <h2 class="m-0 text-dark counter font-600">{{$category_count}}</h2>
                    <div class="text-muted m-t-5">Category</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <a href="/user/show">
                <div class="widget-panel widget-style-2 bg-white">
                    <i class="md md-account-child text-custom"></i>
                    <h2 class="m-0 text-dark counter font-600">{{$user_count}}</h2>
                    <div class="text-muted m-t-5">Users</div>
                </div>
            </a>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-xl-4">
            <a href="/monthly-stat">
                <div class="card-box">
                    <div class="bar-widget">
                        <div class="table-box">
                            <div class="table-detail">
                                <div class="iconbox bg-info">
                                    <i class="icon-layers"></i>
                                </div>
                            </div>

                            <div class="table-detail">
                                <h4 class="m-t-0 m-b-5"><b>{{$unique_visitor}}</b></h4>
                                <h5 class="text-muted m-b-0 m-t-0">Monthly Visitors</h5>
                            </div>


                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-12 col-xl-4">
            <a href="/weekly-stat">
                <div class="card-box">
                    <div class="bar-widget">
                        <div class="table-box">
                            <div class="table-detail">
                                <div class="iconbox bg-custom">
                                    <i class="icon-layers"></i>
                                </div>
                            </div>

                            <div class="table-detail">
                                <h4 class="m-t-0 m-b-5"><b>{{$weekly_visitor_count}}</b></h4>
                                <h5 class="text-muted m-b-0 m-t-0">Weekly Visitors</h5>
                            </div>

                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-12 col-xl-4">
            <a href="/today-stat">
                <div class="card-box">
                    <div class="bar-widget">
                        <div class="table-box">
                            <div class="table-detail">
                                <div class="iconbox bg-danger">
                                    <i class="icon-layers"></i>
                                </div>
                            </div>

                            <div class="table-detail">
                                <h4 class="m-t-0 m-b-5"><b>{{$today_total_visitor}}</b></h4>
                                <h5 class="text-muted m-b-0 m-t-0">Today Visitors</h5>
                            </div>


                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection