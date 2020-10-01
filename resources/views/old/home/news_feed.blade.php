<!-- news feed Area
      ============================================ -->
<section class="news-feed paddb">
    <div class="container">
        <div class="row row-margin">
            <div class="col-xs-12 col-md-6 col-sm-6 col-padding">
                <div id="news-feed-carousel" class="owl-carousel owl-theme">
                    @foreach($featured_posts as $featured_post)
                        <div class="item">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                <div class="post-thumb img-zoom-in">
                                    <a href="/article/details/{{$featured_post->post_id}}/{{str_replace(' ', '-', $featured_post->post_headline)}}">
                                        <img class="entry-thumb-4"
                                             src="{{$featured_post->post_featured_image}}" alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <span class="color-2">{{$featured_post->category_name}} </span>
                                    <h3 class="post-title"><a href="/article/details/{{$featured_post->post_id}}/{{str_replace(' ', '-', $featured_post->post_headline)}}" rel="bookmark">{{$featured_post->post_headline}}</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i>{{$featured_post->updated_at}}
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13</div>
                                        <!-- read more -->
                                        <a class="readmore pull-right" href="/article/details/{{$featured_post->post_id}}/{{str_replace(' ', '-', $featured_post->post_headline)}}"><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- right side post -->
            <div class="hidden-xs col-md-6 col-sm-6 col-padding-1">
                <section class="articale-inner">
                    <div class="row">
                        <div id="content-slide-5" class="owl-carousel">
                            <!-- item-1 -->
                            <div class="item">
                                <div class="row rn_block">
                                    @php($i=0)
                                    @foreach($featured_posts as $featured_post)
                                        <div class="col-md-6 col-sm-6 padd">
                                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                <!-- image -->
                                                <div class="post-thumb">
                                                    <a href="/article/details/{{$featured_post->post_id}}/{{str_replace(' ', '-', $featured_post->post_headline)}}">
                                                        <img class="img-responsive"
                                                             src="{{$featured_post->post_featured_image}}"
                                                             alt="">
                                                    </a>
                                                </div>
                                                <div class="post-info meta-info-rn">
                                                    <div class="slide">
                                                        <a target="_blank" href="/article/details/{{$featured_post->post_id}}/{{str_replace(' ', '-', $featured_post->post_headline)}}" class="post-badge btn_five">{{$featured_post->category_name}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-title-author-details">
                                                <h4><a href="/article/details/{{$featured_post->post_id}}/{{str_replace(' ', '-', $featured_post->post_headline)}}">{{$featured_post->post_headline}}</a></h4>
                                            </div>
                                            <div class="post-editor-date">
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i>{{ date('M d, Y', strtotime($featured_post->created_at))}}
                                                </div>
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13</div>
                                            </div>
                                        </div>

                                        <?php
                                        $i++;
                                        ?>
                                        @if($i==4)
                                            @break;
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
    