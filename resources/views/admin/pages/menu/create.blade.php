@extends('layouts.app')

@section('title', 'Create User')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title"> User</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">New User</a></li>
            </ol>

        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">New User</h4>
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

                <div class="row">
                    <div class="col-12">
                        <div class="p-20">
                            <form class="form-horizontal" method="post" action="/user/store"
                                  enctype="multipart/form-data">

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">User Name</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" name="name">
                                        <input type="hidden" class="form-control" name="_token"
                                               value="{{csrf_token()}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Bio</label>
                                    <div class="col-10">
                                        <textarea type="text" class="form-control" name="biography"></textarea>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Birth Date</label>
                                    <div class="col-10">
                                        <input type="date" class="form-control" name="dob">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Phone</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" name="phone">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Email</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" name="email">

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Password</label>
                                    <div class="col-10">
                                        <input type="password" class="form-control" name="password">

                                    </div>
                                </div>


                                {{--$table->string('password');

                                $table->string('facebook')->nullable();
                                $table->string('twitter')->nullable();
                                $table->string('linkedin')->nullable();--}}


                              {{--  <div class="form-group row">
                                    <label class="col-2 col-form-label">User Image</label>
                                    <div class="col-10">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>--}}


                                <div class="form-group mb-0 justify-content-end row">
                                    <div class="col-10">
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Save
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

@endsection