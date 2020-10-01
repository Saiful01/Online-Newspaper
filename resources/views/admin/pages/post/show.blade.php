@extends('layouts.app')

@section('title', 'Show All Post')
@section('content')
    {{--
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Post</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">View Post</a></li>
                </ol>

            </div>
        </div>
    --}}
    <style>

        .form-inline .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle;
            line-height: 24px;
            margin-right: 23px;
        }
    </style>

    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <div class="row">
                    <div class="col-12">
                        <div class="p-20">
                            <form class="form-inline" method="post" action="/post/show"
                                  enctype="multipart/form-data">

                                <div class="form-group row">
                                    <div class="">

                                        <label>
                                            <input type="text" class="form-control" name="query" placeholder="Search">
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="">
                                        <select class="form-control" name="category_id">
                                            <option value="All">All</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->category_id}}">{{$category->category_bn}}</option>
                                            @endforeach
                                        </select>

                                        <input type="hidden" class="form-control" name="_token"
                                               value="{{csrf_token()}}">
                                    </div>
                                </div>


                                <div class="form-group mb-0 justify-content-end row">
                                    <div class="col-10">
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Search
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div> <!-- end card-box -->
        </div><!-- end col -->
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>View Post</h4>

                    </div>
                    <div class="col-sm-6">
                        <a href="/post/create" class="btn btn-sm btn-primary pull-right"><i
                                    class="md md-add"></i> Add New</a>
                    </div>
                </div>

                <hr>

                @if(session('success'))
                    <div class="alert alert-success">
                        <strong></strong> {{session('success')}}
                    </div>
                @endif
                @if(session('decline'))
                    <div class="alert alert-danger">
                        <strong></strong> {{session('failed')}}
                    </div>
                @endif

                @if(isset($posts))
                    <table id="datatable-buttonss" class="table table-striped table-bordered" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Post Headline</th>
                            {{-- <th>Details</th>--}}
                            <th>Category</th>
                            <th>Post Image</th>
                            <th>Pin Post</th>
                            <th>Publish</th>
                            <th>Author</th>
                            <th>Last Updated</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @php($i=1)
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$post->post_headline}}</td>
                                {{-- <td>{!! $post->post_details !!}</td>--}}
                                <td>
                                    @if(json_decode($post->category_id)!=null)
                                        @foreach(json_decode($post->category_id) as $item)
                                            <span class="badge badge-pink">{{getCategoryNameFromId($item)}}</span>
                                        @endforeach
                                    @endif
                                </td>
                                <td><img src="/images/post/{{ $post->post_featured_image }}" class="img-rounded"
                                         alt="Post image" width="150" height="80"></td>
                                <td>@if($post->pin_post==1) <a href="/post/unpin/{{$post->post_id}}"
                                                               class="label label-primary">Pinned</a> @else <a
                                            href="/post/pin/{{$post->post_id}}"
                                            class="label label-info">Unpinned</a>@endif</td>
                                <td>@if($post->publish_status==1) <span
                                            class="label label-primary">Published</span>
                                    @else <span
                                                class="label label-danger">Draft</span>
                                    @endif
                                </td>
                                <td>{{$post->name}}</td>
                                <td>{{$post->updated_at}}</td>
                                <td>
                                    <button type="button"
                                            class="btn btn-xs btn-danger dropdown-toggle waves-effect waves-light"
                                            data-toggle="dropdown" aria-expanded="false">Action<span
                                                class="caret"></span></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                           href="/post/edit/{{$post->post_id}}"><i
                                                    class="fa fa-edit"></i> Edit</a>
                                        <a class="dropdown-item"
                                           href="/post/destroy/{{$post->post_id}}"><i
                                                    class="fa fa-remove"></i> Delete</a>
                                        <a class="dropdown-item"
                                           href="/post/details/{{$post->post_id}}"><i
                                                    class="fa  fa-expand"></i> Details</a>
                                        @if($post->publish_status==1)
                                            <a class="dropdown-item"
                                               href="/post/draft/{{$post->post_id}}"><i
                                                        class="fa  fa-expand"></i> Draft</a>
                                        @else
                                            <a class="dropdown-item"
                                               href="/post/publish/{{$post->post_id}}"><i
                                                        class="fa  fa-expand"></i> Publish</a>
                                        @endif
                                    </div>
                                </td>

                            </tr>

                        @endforeach
                        </tbody>
                    </table>

                    {{$posts->links()}}

                @endif
            </div>
            <!-- end row -->


        </div> <!-- end card-box -->
    </div><!-- end col -->
    <!-- end row -->

@endsection