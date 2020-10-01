@extends('layouts.app')

@section('title', 'Show Menu')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Menu</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">View Menu</a></li>
            </ol>

        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Update Menu</h4>

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

                @if(isset($result))
                    <form class="form-horizontal" method="POST" action="/menu/update" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="_token"
                               value="{{csrf_token()}}">
                        @foreach($result as $res)


                            <div class="form-group mb-0 justify-content-end row">
                                <div class="col-10">

                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               id="customCheck{{$res->category_id}}" name="menu[]"
                                               value="{{$res->category_id}}"
                                               @foreach( $menu as $m)
                                               @if($m->category_id==$res->category_id)
                                               checked
                                                @endif
                                                @endforeach
                                        >
                                        <label class="custom-control-label"
                                               for="customCheck{{$res->category_id}}">{{$res->category_name}}</label>
                                    </div>
                                </div>
                            </div>

                        @endforeach


                        <div class="form-group mb-0 justify-content-end row">
                            <div class="col-10">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Save
                                </button>
                            </div>
                        </div>
                    </form>
                @endif
            </div>
            <!-- end row -->


        </div> <!-- end card-box -->
    </div><!-- end col -->
    </div>
    <!-- end row -->

@endsection