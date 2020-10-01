<div class="row">
    <div class="col-md-8 col-sm-8">
        <!-- left content inner -->
        <section class="recent_news_inner">
            <h3 class="category-headding ">RECENT NEWS</h3>
            <div class="headding-border"></div>
            <div class="row">
                <div id="content-slide" class="owl-carousel">

                @foreach($latest_posts as $latest_post)
                    <!-- item-1 -->
                        <div class="item">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                <!-- image -->
                                <h3>
                                    <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">{{$latest_post->post_headline}}</a>
                                </h3>
                                <div class="post-thumb">
                                    <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">
                                        <img class="img-responsive" src="{{$latest_post->post_featured_image}}" alt="">
                                    </a>
                                </div>
                                <div class="post-info meta-info-rn">
                                    <div class="slide">
                                        <a target="_blank"
                                           href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}"
                                           class="post-badge btn_six">T</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-title-author-details">
                                <div class="post-editor-date">
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> {{date('M d, Y', strtotime($latest_post->created_at))}}
                                    </div>
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13</div>
                                </div>
                                <p>{!! str_limit($latest_post->post_details,300,'') !!} <a
                                            href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">Read
                                        more...</a></p>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>

            <div class="row rn_block">
                @php($i=5)
                @foreach($latest_posts as $latest_post)
                    <?php $i++?>
                    @if($i>=5 && $i<=8)
                        <div class="col-md-4 col-sm-6 padd">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                <!-- image -->
                                <div class="post-thumb">
                                    <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">
                                        <img class="img-responsive" src="/theme/images/recent_news_04.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-info meta-info-rn">
                                    <div class="slide">
                                        <a target="_blank"
                                           href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}"
                                           class="post-badge btn_eight">H</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-title-author-details">
                                <h4>
                                    <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">World
                                        Econmy Changing and Affecting in 3rd ...</a></h4>
                                <div class="post-editor-date">
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> {{date('M d, Y', strtotime($latest_post->created_at))}}
                                    </div>
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13</div>
                                </div>
                            </div>
                        </div>
                    @endif

                @endforeach
            </div>
        </section>

    </div>
    <!-- /.left content inner -->
    <div class="col-md-4 col-sm-4 left-padding">
        <!-- right content wrapper -->
        <div class="input-group search-area">
            <!-- search area -->
            <input type="text" class="form-control" placeholder="Search articles here ..." name="q">
            <div class="input-group-btn">
                <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </div>
        </div>
        <!-- /.search area -->


        <div class="tab-inner">
            <ul class="tabs">
                <li>
                    <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">POPULAR</a>
                </li>
                <li>
                    <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">MOST
                        VIEWED</a></li>
            </ul>
            <hr>
            <!-- tabs -->
            <div class="tab_content">
                <div class="tab-item-inner">
                    <div class="box-item wow fadeIn" data-wow-duration="1s">
                        <div class="img-thumb">
                            <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}"
                               rel="bookmark"><img class="entry-thumb"
                                                   src="/theme/images/popular_news_01.jpg"
                                                   alt="" height="80" width="90"></a>
                        </div>
                        <div class="item-details">
                            <h6 class="sub-category-title bg-color-1">
                                <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">SPORTS</a>
                            </h6>
                            <h3 class="td-module-title"><a
                                        href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">It
                                    is a long established fact that a
                                    reader
                                    will</a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> {{date('M d, Y', strtotime($latest_post->created_at))}}
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13</div>
                            </div>
                        </div>
                    </div>
                    <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="img-thumb">
                            <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}"
                               rel="bookmark"><img class="entry-thumb"
                                                   src="/theme/images/popular_news_02.jpg"
                                                   alt="" height="80" width="90"></a>
                        </div>
                        <div class="item-details">
                            <h6 class="sub-category-title bg-color-2">
                                <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">TECHNOLOGY </a>
                            </h6>
                            <h3 class="td-module-title"><a
                                        href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">The
                                    generated Lorem Ipsum is
                                    therefore</a>
                            </h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> {{date('M d, Y', strtotime($latest_post->created_at))}}
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13</div>
                            </div>
                        </div>
                    </div>
                    <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="img-thumb">
                            <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}"
                               rel="bookmark"><img class="entry-thumb"
                                                   src="/theme/images/popular_news_03.jpg"
                                                   alt="" height="80" width="90"></a>
                        </div>
                        <div class="item-details">
                            <h6 class="sub-category-title bg-color-3">
                                <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">HEALTH</a>
                            </h6>
                            <h3 class="td-module-title"><a
                                        href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">The
                                    standard chunk of Lorem Ipsum used
                                    since</a>
                            </h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> {{date('M d, Y', strtotime($latest_post->created_at))}}
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13</div>
                            </div>
                        </div>
                    </div>
                    <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="img-thumb">
                            <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}"
                               rel="bookmark"><img class="entry-thumb"
                                                   src="/theme/images/popular_news_04.jpg"
                                                   alt="" height="80" width="90"></a>
                        </div>
                        <div class="item-details">
                            <h6 class="sub-category-title bg-color-4">
                                <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">FASHION</a>
                            </h6>
                            <h3 class="td-module-title"><a
                                        href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">Lorem
                                    Ipum therefore always free
                                    from</a>
                            </h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> {{date('M d, Y', strtotime($latest_post->created_at))}}
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / tab item -->
                <div class="tab-item-inner">
                    <div class="box-item">
                        <div class="img-thumb">
                            <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}"
                               rel="bookmark"><img class="entry-thumb"
                                                   src="/theme/images/popular_news_01.jpg"
                                                   alt="" height="80" width="90"></a>
                        </div>
                        <div class="item-details">
                            <h6 class="sub-category-title bg-color-5">
                                <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">BUSINESS</a>
                            </h6>
                            <h3 class="td-module-title"><a
                                        href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">It
                                    is a long established fact that a
                                    reader
                                    will</a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> {{date('M d, Y', strtotime($latest_post->created_at))}}
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13</div>
                            </div>
                        </div>
                    </div>
                    <div class="box-item">
                        <div class="img-thumb">
                            <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}"
                               rel="bookmark"><img class="entry-thumb"
                                                   src="/theme/images/popular_news_02.jpg"
                                                   alt="" height="80" width="90"></a>
                        </div>
                        <div class="item-details">
                            <h6 class="sub-category-title bg-color-2">
                                <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">TECHNOLOGY </a>
                            </h6>
                            <h3 class="td-module-title"><a
                                        href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">The
                                    generated Lorem Ipsum is
                                    therefore</a>
                            </h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> {{date('M d, Y', strtotime($latest_post->created_at))}}
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13</div>
                            </div>
                        </div>
                    </div>
                    <div class="box-item">
                        <div class="img-thumb">
                            <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}"
                               rel="bookmark"><img class="entry-thumb"
                                                   src="/theme/images/popular_news_03.jpg"
                                                   alt="" height="80" width="90"></a>
                        </div>
                        <div class="item-details">
                            <h6 class="sub-category-title bg-color-3">
                                <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">HEALTH</a>
                            </h6>
                            <h3 class="td-module-title"><a
                                        href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">The
                                    standard chunk of Lorem Ipsum used
                                    since</a>
                            </h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> {{date('M d, Y', strtotime($latest_post->created_at))}}
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13</div>
                            </div>
                        </div>
                    </div>
                    <div class="box-item">
                        <div class="img-thumb">
                            <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}"
                               rel="bookmark"><img class="entry-thumb"
                                                   src="/theme/images/popular_news_04.jpg"
                                                   alt="" height="80" width="90"></a>
                        </div>
                        <div class="item-details">
                            <h6 class="sub-category-title bg-color-4">
                                <a href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}">FASHION</a>
                            </h6>
                            <h3 class="td-module-title"><a
                                        href="/article/details/{{$latest_post->post_id}}/{{str_replace(' ', '-', $latest_post->post_headline)}}"></a>
                            </h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> {{date('M d, Y', strtotime($latest_post->created_at))}}
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / tab item -->
            </div>
            <!-- / tab_content -->
        </div>
        <!-- / tab -->

    </div>
    <!-- row end -->
</div>