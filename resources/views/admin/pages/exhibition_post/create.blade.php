@extends('layouts.app')

@section('title', 'Create Category')
@section('content')

    <form class="form-horizontal" method="POST" action="/exhibition/post/store" enctype="multipart/form-data">
        {{--@if(session('success') || session('failed') || $errors->any())--}}
        <div class="row">
            <div class="col-12">

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
            <div class="col-12">
                <div class="card-box">

                    <div class="row">
                        <div class="col-12">
                            <div class="p-20">

                                <div class="form-group row">
                                    <label>Headline <span class="required">*</span></label>

                                    <input type="text" class="form-control" name="exhibition_post_headline">
                                    <input type="hidden" class="form-control" name="_token"
                                           value="{{csrf_token()}}">

                                </div>
                                <div class="form-group row">
                                    <label>Seelect Exhibition</label>

                                    <select class="form-control" name="exhibition_id">
                                        @foreach($exhibitions as $category)
                                            <option value="{{$category->exhibition_id}}">{{$category->exhibition_title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label>Tags</label>

                                    <input type="text" class="form-control " name="exhibition_post_tags">

                                </div>

                                <div class="form-group row">
                                    <label>Featured Image <span class="required">*</span></label>

                                    <input type="file" class="form-control" name="image" required>
                                </div>

                                <div class="form-group mb-0 justify-content-end row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->

                </div> <!-- end card-box -->
            </div><!-- end col -->

        </div>
    </form>
    <!-- end row -->


@endsection










