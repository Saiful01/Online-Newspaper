@extends('layouts.app')

@section('title', 'Create Advertisement')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title"> Advertisement</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Update Advertisement</a></li>
            </ol>

        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Update Advertisement</h4>
                <hr>

                @if(session('success'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>{{session('success')}}!</strong>
                    </div>
                @endif
                @if(session('failed'))
                    <div class="alert ">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>{{session('failed')}}!</strong>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="row">
                    <div class="col-12">
                        <div class="p-20">
                            <form class="form-horizontal" method="post" action="/advertisement/update"
                                  enctype="multipart/form-data">

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Advertisement Image</label>
                                    <div class="col-10">
                                        <input type="hidden" class="form-control" name="_token"
                                               value="{{csrf_token()}}">
                                        <input type="hidden" class="form-control" name="ad_id"
                                               value="{{$result->ad_id}}">
                                        <input type="file" class="form-control" name="image" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Website</label>
                                    <div class="col-10">


                                        <input type="text" class="form-control" value="{{$result->website}}" name="website" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Advertisement Place</label>
                                    <div class="col-10">
                                        <select class="form-control" name="ad_place_value">
                                            <option value="1" @if($result->ad_place_value==1) selected @else disabled @endif >Header Advertisement</option>
                                            <option value="2" @if($result->ad_place_value==2) selected @else disabled @endif >First Row Advertisement</option>
                                            <option value="3" @if($result->ad_place_value==3) selected @else disabled @endif >Second Row Advertisement</option>

                                            <option value="4" @if($result->ad_place_value==4) selected @else disabled @endif >Third Row First Advertisement</option>
                                            <option value="5" @if($result->ad_place_value==5) selected @else disabled @endif >Third Row Second Advertisement</option>
                                            <option value="6" @if($result->ad_place_value==6) selected @else disabled @endif >Third Row Third Advertisement</option>

                                            <option value="7" @if($result->ad_place_value==7) selected @else disabled @endif >Fourth Row First Advertisement</option>
                                            <option value="8" @if($result->ad_place_value==8) selected @else disabled @endif >Fourth Row Second Advertisement</option>
                                            <option value="9" @if($result->ad_place_value==9) selected @else disabled @endif >Fourth Row Third Advertisement</option>

                                            <option value="10" @if($result->ad_place_value==10) selected @else disabled @endif >E-Gallery Bottom Ad</option>
                                            <option value="11" @if($result->ad_place_value==11) selected @else disabled @endif >Full Post Top Ad</option>
                                            <option value="12" @if($result->ad_place_value==12) selected @else disabled @endif >Full Post Sidebar Ad</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group mb-0 justify-content-end row">
                                    <div class="col-10">
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
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