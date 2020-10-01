@extends('layouts.common')

@section('title', $post->post_headline)
@section('description',  strip_tags(substr( $post->post_details,0,400) ))
@section('thumbnail',URL::to('/').'/images/post/'.$post->post_featured_image)


@section('content')

    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0"
            nonce="lwtuitwp"></script>


    <div class="container">

        <div class="section" style="transform: none;">
            <div class="row" style="transform: none;">
                @include('common.details.main_content')
                @include('common.details.right_sidebar')
            </div>
        </div>

    </div>

@endsection