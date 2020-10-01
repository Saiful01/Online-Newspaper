@extends('layouts.app')

@section('title', 'Comment')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Comment</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">View Comment</a></li>
            </ol>

        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>View Comment</h4>

                    </div>

                </div>

                <hr>

                @if(session('success'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>{{session('success')}}!</strong>
                    </div>
                @endif
                @if(session('failed'))
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>{{session('failed')}}!</strong>
                    </div>
                @endif

                @if(isset($results))
                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Comment</th>
                            <th>Commented By</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @php($i=1)
                        @foreach($results as $res)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$res->comment}}</td>
                                <td>{{$res->name}}</td>
                                <td>
                                    @if($res->approve_status==1)
                                        <button class="btn btn-sm btn-primary">Published</button>
                                    @else
                                        <button class="btn btn-sm btn-danger">Spam</button>
                                    @endif

                                </td>

                                <td>
                                    <button type="button"
                                            class="btn btn-sm btn-danger dropdown-toggle waves-effect waves-light"
                                            data-toggle="dropdown" aria-expanded="false">Action<span
                                                class="caret"></span></button>
                                    <div class="dropdown-menu">
                                        @if($res->approve_status==1)
                                            <a class="dropdown-item"
                                               href="/comment/spam/{{$res->comment_id}}"><i
                                                        class="fa fa-edit"></i> Spam</a>
                                        @else
                                            <a class="dropdown-item"
                                               href="/comment/publish/{{$res->comment_id}}"><i
                                                        class="fa fa-edit"></i> Publish</a>
                                        @endif


                                        <a class="dropdown-item"
                                           href="/comment/delete/{{$res->comment_id}}"><i
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