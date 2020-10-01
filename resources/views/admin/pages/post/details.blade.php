@extends('layouts.app')

@section('title', 'Create Category')
@section('content')

    <div class="col-md-10 mx-auto">
        <div class=" card-box">
            <div class="" style="text-align: center">
                <h4 >{{$post->post_headline}}</h4>

                <img src="/images/post/{{$post->post_featured_image}}" height="150px;">
            </div>


            <div class="" style="text-align: left">
                <p style="text-align: left">{!! $post->post_details !!}</p>
            </div>


        </div>

    </div>


@endsection










