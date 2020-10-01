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
            <div class="widget-panel widget-style-2 bg-white">
                <i class="md md-list text-primary"></i>
                <h2 class="m-0 text-dark counter font-600">10</h2>
                <div class="text-muted m-t-5">Total Post</div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget-panel widget-style-2 bg-white">
                <i class="md md-insert-comment text-pink"></i>
                <h2 class="m-0 text-dark counter font-600">1256</h2>
                <div class="text-muted m-t-5">Total  Comments</div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget-panel widget-style-2 bg-white">
                <i class="md md-store-mall-directory text-info"></i>
                <h2 class="m-0 text-dark counter font-600">18</h2>
                <div class="text-muted m-t-5">Category</div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget-panel widget-style-2 bg-white">
                <i class="md md-account-child text-custom"></i>
                <h2 class="m-0 text-dark counter font-600">8564</h2>
                <div class="text-muted m-t-5">Users</div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12 col-xl-8">
            <div class="card-box">
                <h4 class="text-dark header-title m-t-0">Visitor Analytics</h4>

                <div id="morris-bar-stacked" style="height: 310px;"></div>
            </div>
        </div>
    </div>


@endsection