@extends('layouts.general')
@section('title', 'Details')
@section('content')
    <section class="block-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Food News</h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li><i class="pe-7s-home"></i> <a href="/" title="">Home</a></li>
                            <li><a href="#" title="">{{$category_name}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach($posts as $post)
                    <div class="col-md-6">
                        <div class="post-style1">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                <!-- post image -->
                                <a href="#"><img src="{{$post->post_featured_image}}"
                                                 class="img-responsive" alt=""></a>
                                <div class="post-info meta-info-rn">
                                    <div class="slide">
                                        <a target="_blank" href="#" class="post-badge btn_eight">H</a>
                                    </div>
                                </div>
                            </div>
                            <!-- post title -->
                            <h4>
                                <a href="/article/details/{{$post->post_id}}/{{str_replace(' ', '-', $post->post_headline)}}">{{$post->post_headline}}</a>
                            </h4>
                            <div class="post-title-author-details">
                                <div class="date">
                                    <ul>
                                        <li><img src="/theme/images/comment-01.jpg" class="img-responsive" alt=""></li>
                                        <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                        <li><a title="" href="#">{{ date('M d, Y', strtotime($post->created_at))}}</a>
                                            --
                                        </li>
                                        <li><a title="" href="#"><span>275 Comments</span></a></li>
                                    </ul>
                                </div>
                                <p>{!! str_limit($post->post_details,300,'') !!}<a href="#">Read more...</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="col-md-4">
                <aside class="col-sm-12 left-padding">
                    <div class="input-group search-area c-search">
                        <!-- search area -->
                        <input type="text" class="form-control" placeholder="Search articles here ..." name="q">
                        <div class="input-group-btn">
                            <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                   {{-- <!-- social icon -->
                    <h3 class="category-headding ">SOCIAL PIXEL</h3>
                    <div class="headding-border"></div>
                    <div class="social">
                        <ul>
                            <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i><span>3987</span> </a></li>
                            <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i><span>3987</span></a></li>
                            <li><a href="#" class="google"><i class="fa  fa-google-plus"></i><span>3987</span></a></li>
                            <li><a href="#" class="flickr"><i class="fa fa-flickr"></i><span>3987</span> </a></li>
                        </ul>
                    </div>--}}
                    <!-- /.social icon -->
                    @include('general.includes.popular_tab')

                </aside>
            </div>
        </div>

        {{--
                <!-- pagination -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="pagination">
                                <li>
                                    <a href="#" class="prev">
                                        <i class="pe-7s-angle-left"></i>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#" class="active">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li> ...</li>
                                <li><a href="#">15</a></li>
                                <li>
                                    <a href="#" class="next"> <i class="pe-7s-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12">
                            <div class="banner">
                                <img src="images/top-bannner2.jpg" class="img-responsive center-block" alt="">
                            </div>
                        </div>
                    </div>
                </div>--}}
    </div>

@endsection
