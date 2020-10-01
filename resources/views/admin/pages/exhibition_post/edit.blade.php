@extends('layouts.app')

@section('title', 'Create Category')
@section('content')



    <form class="form-horizontal" method="POST" action="/post/update" enctype="multipart/form-data">
        {{--@if(session('success') || session('failed') || $errors->any())--}}
        <div class="row">
            <div class="col-12">

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>{{session('success')}}!</strong>
                    </div>
                @endif
                @if(session('failed'))
                    <div class="alert alert-danger alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>{{session('failed')}}!</strong>
                    </div>
                @endif

                {{--@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif--}}
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
                                    <label>Headline</label>

                                    <input type="text" class="form-control" name="post_headline" value="{{$post->post_headline}}">
                                    <input type="hidden" class="form-control" name="post_id" value="{{$post->post_id}}">
                                    <input type="hidden" class="form-control" name="_token"
                                           value="{{csrf_token()}}">

                                </div>

                                <div class="form-group row">
                                    {{-- <label>Post Details</label><br>--}}

                                    {{--<textarea type="text" class="form-control summernote" name="post_details" rows="25"></textarea>--}}


                                    <div class="col-sm-12">


                                        <h4 class="m-b-30 m-t-0 header-title"><b>Default Editor</b></h4>
                                        {{-- <input type="text" class="form-control summernote" name="post_details">--}}

                                        <textarea type="text" class="form-control summernote" name="post_details" rows="25">{{$post->post_details}}</textarea>


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
                    <h4 class="m-t-0 header-title">Meta Data</h4>
                    <hr>


                    <div class="row">
                        <div class="col-12">
                            <div class="p-20">

                                <div class="form-group row">
                                    <label>Category</label>

                                    <select class="form-control" name="category_id">
                                        @foreach($categories as $category)
                                            <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label>Tags</label>

                                    <input type="text" class="form-control " name="post_tags" value="{{$post->post_tags}}">

                                </div>

                                <div class="form-group row">
                                    <label>Featured Image</label>

                                    <input type="file" class="form-control" name="image">
                                </div>

                                <div class="form-group row">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2"
                                               name="pin_post" @if($post->pin_post==1)checked @endif>
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
                <hr>
                <div class="text-center p-20">
                    <button type="submit" class="btn w-sm btn-white waves-effect">Cancel</button>
                    <button type="submit" class="btn w-sm btn-default waves-effect waves-light">Save</button>
                    <button type="submit" class="btn w-sm btn-danger waves-effect waves-light">Delete</button>
                </div>
            </div>
        </div>
    </form>
    <!-- end row -->


@endsection










