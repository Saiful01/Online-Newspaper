@extends('layouts.app')

@section('title', 'Show All Exhibition Post')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Exhibition Post</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">View Exhibition Post</a></li>
            </ol>

        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>View Exhibition Post</h4>

                    </div>
                    <div class="col-sm-6">
                        <a href="/exhibition/post/create" class="btn btn-sm btn-primary pull-right"><i
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

                @if(isset($exhibitionPost))
                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Exhibition Post Headline</th>
                            <th>Details</th>
                            <th>Category</th>
                            <th>Exhibition Post Image</th>
                            <th>Last Updated</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @php($i=1)
                        @foreach($exhibitionPost as $post)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$post->exhibition_post_headline}}</td>
                                <td>{{$post->exhibition_post_details}}</td>
                                {{-- <td>{!! $post->post_details !!}</td>--}}
                                <td>{{$post->exhibition_title}}</td>
                                <td><img src="/images/exhibition/{{ $post->exhibition_post_featured_image }}"
                                         class="img-rounded"
                                         alt="Exhibition Post image" width="150" height="80"></td>
                                <td>{{$post->updated_at}}</td>
                                <td>
                                    <button type="button"
                                            class="btn btn-sm btn-danger dropdown-toggle waves-effect waves-light"
                                            data-toggle="dropdown" aria-expanded="false">Action<span
                                                class="caret"></span></button>
                                    <div class="dropdown-menu">
                                     {{--   <a class="dropdown-item"
                                           href="/exhibition/post/edit/{{$post->exhibition_id}}"><i
                                                    class="fa fa-edit"></i> Edit</a>--}}
                                        <a class="dropdown-item"
                                           href="/exhibition/post/destroy/{{$post->exhibition_post_id}}"><i
                                                    class="fa fa-remove"></i> Delete</a>
                                    </div>
                                </td>

                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
            <!-- end row -->

        </div> <!-- end card-box -->
    </div><!-- end col -->
    <!-- end row -->

@endsection