@extends('layouts.general')
@section('title', '' . $post->post_headline . '')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <article class="content">
                    <div class="post-thumb">
                        <img src="{{$post->post_featured_image}}" class="img-responsive post-image" alt="">
                        <div class="social">
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i><span>3987</span> </a>
                                </li>
                                <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i><span>3987</span></a></li>
                                <li><a href="#" class="google"><i class="fa  fa-google-plus"></i><span>3987</span></a>
                                </li>
                                <li><a href="#" class="flickr"><i class="fa fa-flickr"></i><span>3987</span> </a></li>
                            </ul>
                        </div>
                        <!-- /.social icon -->
                    </div>
                    <h1>{{$post->post_headline}}</h1>
                    <div class="date">
                        <ul>
                            <li>By<a title="" href="#"><span> {{$post->name}}</span></a> --</li>
                            <li><a title="" href="#"> {{ date('M d, Y', strtotime($post->created_at))}}</a> --</li>
                            {{-- <li><a title="" href="#"><span>275 Comments</span></a></li>--}}
                        </ul>
                    </div>
                    <p>
                        {!! $post->post_details !!}
                    </p>
                    <!-- quoto -->
                {{-- <div class="qtrotator">
                     <div class="qtcontent">
                         <blockquote>
                             here are many variations of passages of Lorem Ipsum available, but the majority <a href="#">have suffered alteration</a> in some form
                         </blockquote>
                     </div>
                 </div>--}}

               @include('general.details.comment')
                </article>
            </div>


            <div class="col-sm-4 left-padding">
                <aside class="sidebar">
                    <div class="input-group search-area">
                        <!-- search area -->
                        <input type="text" class="form-control" placeholder="Search articles here ..." name="q">
                        <div class="input-group-btn">
                            <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.search area -->
                    {{-- <div class="banner-add">
                         <!-- add -->
                         <span class="add-title">- Advertisement -</span>
                         <a href="#"><img src="images/ad-banner.jpg" class="img-responsive center-block" alt=""></a>
                     </div>--}}
                    <div class="tab-inner">
                        <ul class="tabs">
                            <li><a href="#">POPULAR</a></li>
                            <li><a href="#">MOST VIEWED</a></li>
                        </ul>
                        <hr>
                        <!-- tabs -->
                        <div class="tab_content">
                            <div class="tab-item-inner">
                                @foreach($related_posts as $post)
                                    <div class="box-item wow fadeIn" data-wow-duration="1s">
                                        <div class="img-thumb">
                                            <a href="/article/details/{{$post->post_id}}/{{str_replace(' ', '-', $post->post_headline)}}" rel="bookmark"><img class="entry-thumb"
                                                                            src="{{$post->post_featured_image}}" alt=""
                                                                            height="80" width="90"></a>
                                        </div>
                                        <div class="item-details">
                                            <h6 class="sub-category-title bg-color-1">
                                                <a href="/article/details/{{$post->post_id}}/{{str_replace(' ', '-', $post->post_headline)}}">{{$post->category_name}}</a>
                                            </h6>
                                            <h3 class="td-module-title"><a href="/article/details/{{$post->post_id}}/{{str_replace(' ', '-', $post->post_headline)}}">{{$post->post_headline}}</a></h3>
                                            <div class="post-editor-date">
                                                <!-- post date -->
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> {{ date('M d, Y', strtotime($post->created_at))}}
                                                </div>
                                                <!-- post comment -->
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- / tab item -->
                            <div class="tab-item-inner">
                                @foreach($popular_posts as $post)
                                    <div class="box-item">
                                        <div class="img-thumb">
                                            <a href="/article/details/{{$post->post_id}}/{{str_replace(' ', '-', $post->post_headline)}}" rel="bookmark"><img class="entry-thumb"
                                                                            src="{{$post->post_featured_image}}" alt=""
                                                                            height="80" width="90"></a>
                                        </div>
                                        <div class="item-details">
                                            <h6 class="sub-category-title bg-color-1">
                                                <a href="/article/details/{{$post->post_id}}/{{str_replace(' ', '-', $post->post_headline)}}">{{$post->category_name}}</a>
                                            </h6>
                                            <h3 class="td-module-title"><a href="/article/details/{{$post->post_id}}/{{str_replace(' ', '-', $post->post_headline)}}">{{$post->post_headline}}</a></h3>
                                            <div class="post-editor-date">
                                                <!-- post date -->
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> {{ date('M d, Y', strtotime($post->created_at))}}
                                                </div>
                                                <!-- post comment -->
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- / tab item -->
                        </div>
                        <!-- / tab_content -->
                    </div>
                    <!-- / tab -->
                    <!-- comments -->
                  {{--  <div class="latest-comments-inner">
                        <h3 class="category-headding ">LATEST COMMENT</h3>
                        <div class="headding-border"></div>
                        <!-- latest comment post -->
                        <div class="post-style2 latest-com">
                            <img src="images/comment-01.jpg" alt="">
                            <div class="latest-com-detail">
                                <h5><a href="/article/details/{{$post->post_id}}/{{str_replace(' ', '-', $post->post_headline)}}" title="">It uses a dictionary of over</a></h5>
                                <span>Nec sagittis sem nibh dictionary...</span>
                                <p>Proin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </div>
                        <!-- latest comment post -->
                        <div class="post-style2 latest-com">
                            <img src="images/comment-02.jpg" alt="">
                            <div class="latest-com-detail">
                                <h5><a href="/article/details/{{$post->post_id}}/{{str_replace(' ', '-', $post->post_headline)}}" title="">It uses a dictionary of over</a></h5>
                                <span>Nec sagittis sem nibh dictionary...</span>
                                <p>Proin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </div>
                    </div>--}}

                </aside>
            </div>
        </div>
    </div>


@endsection