@extends('layouts.app')

@section('title', 'Update Post')
@section('content')

    <style>
        .modal-footer {
            display: none;
        }
    </style>

    <form class="form-horizontal" method="POST" action="/post/update" enctype="multipart/form-data"
          ng-controller="myCtrl">
        {{--@if(session('success') || session('failed') || $errors->any())--}}
        <div class="row">
            <div class="col-12">

                @if(session('success'))
                    <div class="alert alert-success">
                        <strong></strong> {{session('success')}}
                    </div>
                @endif
                @if(session('failed'))
                    <div class="alert alert-danger">
                        <strong></strong> {{session('failed')}}
                    </div>
                @endif

            </div>
        </div>
        {{--@endif--}}
        <div class="row">
            <div class="col-9">
                <div class="card-box">

                    <div class="row">
                        <div class="col-12">
                            <div class="p-20">

                                <div class="form-group row">
                                    {{-- <label>Headline</label>--}}

                                    <input type="text" class="form-control" name="post_headline"
                                           value="{{$post->post_headline}}" ng-model="post_headline"
                                           ng-change="titleChange()" required>
                                    <input type="hidden" class="form-control" name="_token"
                                           value="{{csrf_token()}}">
                                    <input type="hidden" class="form-control" name="post_id"
                                           value="{{$post->post_id}}">

                                </div>

                                <div class="form-group row">
                                    <input type="text" class="form-control" name="post_slug"
                                           value="{{$post->post_slug}}" ng-model="post_slug">

                                </div>

                                <div class="form-group row">
                                    {{-- <label>Post Details</label><br>--}}

                                    {{--<textarea type="text" class="form-control summernote" name="post_details" rows="25"></textarea>--}}


                                    <div class="col-sm-12">


                                        {{--       <h4 class="m-b-30 m-t-0 header-title"><b>Default Editor</b></h4>
                                               --}}{{-- <input type="text" class="form-control summernote" name="post_details">--}}{{--
       --}}
                                        <textarea type="text" class="form-control summernote" name="post_details"
                                                  rows="30" style="height: 300px;">{{$post->post_details}}</textarea>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->

                </div> <!-- end card-box -->
            </div><!-- end col -->

            <div class="col-3">
                <div class="card-box">
                    <div class="form-group row">
                        <button type="submit" class="btn btn-block w-sm btn-success waves-effect waves-light">Publish
                        </button>
                    </div>

                    <h4 class="m-t-0 header-title">Meta Data</h4>
                    <hr style="margin-bottom: 0px">

                    <div class="row">
                        <div class="col-12">
                            <div class="p-20">

                                <div class="form-group row">
                                    <label>Category</label>
                                    <div class="containercheckbox form-group  ">

                                        @foreach($categories as $category)
                                            <input class="ml-2" type="checkbox" name="category_id[]"
                                                   value="{{$category->category_id}}"
                                                   @if(json_decode($post->category_id)!=null)
                                                   @foreach(json_decode($post->category_id) as $item)

                                                   @if($category->category_id==$item)
                                                   checked
                                                    @endif

                                                    @endforeach
                                                   @endif

                                            /> {{$category->category_bn}} <br/>
                                        @endforeach
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label>Tags (Comma separated)</label>

                                    <input type="text" class="form-control " name="post_tags" data-role="tagsinput">

                                </div>

                                <div class="form-group row">
                                    <label>Featured Image(900*500px)</label>
                                    <img id="blah" class="img-thumbnail"
                                         src="/images/post/{{$post->post_featured_image}}" height="100px"
                                         alt="your image" style="margin-bottom: 5px"/>
                                    <input type='file' name="image" id="imgInp"/>


                                </div>

                                <div class="form-group row">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2"
                                               name="pin_post" value="pin_post" @if($post->pin_post==1)checked @endif>
                                        <label class="custom-control-label" for="customCheck2">Pin Post</label>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->

                </div> <!-- end card-box -->
            </div><!-- end col -->

        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center p-20">
                    {{--                    <button type="submit" class="btn w-sm btn-white waves-effect">Cancel</button>--}}

                </div>
            </div>
        </div>
    </form>
    <!-- end row -->



    <script src="/assets/js/jquery.min.js"></script>

    <script src="/assets//plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
    <script src="/assets//plugins/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="/assets//plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>


    <link href="/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet"/>
    <link href="/assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet"/>



    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>





    <script>
        var app = angular.module('sposApp', []);
        app.controller('myCtrl', function ($scope, $http) {

            $scope.post_headline = "<?php echo $post->post_headline?>";
            $scope.post_slug = "<?php echo $post->post_slug?>";
            $scope.titleChange = function () {

                $scope.post_slug = $scope.post_headline.replace(/[\s]/g, '-');
            };


            console.log("llll");
            /*$http.get("welcome.htm")
                .then(function (response) {
                    $scope.myWelcome = response.data;
                });*/
        });
    </script>


@endsection







