@extends('layouts.app')

@section('title', 'Show All User')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">User</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">View User</a></li>
            </ol>

        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>View User</h4>

                    </div>
                    <div class="col-sm-6">
                        <a href="/user/create" class="btn btn-sm btn-primary pull-right"><i
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

                @if(isset($users))
                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>User Name</th>
                            <th>Type</th>
                            <th>Email</th>
                            <th>img</th>
                            <th>BIO</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @php($i=1)
                        @foreach($users as $user)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$user->name}}</td>
                                <td>
                                    @if($user->user_type==1)
                                        <span
                                                class="label label-success">Admin
                                        </span>
                                    @elseif($user->user_type==2)
                                        <span
                                                class="label label-primary">Author
                                        </span>
                                    @elseif($user->user_type==3)
                                        <span
                                                class="label label-info">User
                                        </span>
                                    @endif
                                </td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->image_url}}</td>
                                <td>{{$user->bio}}</td>
                                {{-- <td><img src="/images/post/{{ $user->post_featured_image }}" class="img-rounded"
                                          alt="User image" width="150" height="80"></td>--}}
                                <td>
                                    <button type="button"
                                            class="btn btn-sm btn-danger dropdown-toggle waves-effect waves-light"
                                            data-toggle="dropdown" aria-expanded="false">Action<span
                                                class="caret"></span></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                           href="/user/edit/{{$user->id}}"><i
                                                    class="fa fa-edit"></i> Edit</a>
                                        <a class="dropdown-item"
                                           href="/user/destroy/{{$user->id}}"><i
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
    </div>
    <!-- end row -->

@endsection