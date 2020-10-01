<section class="weekly-news-inner">
    <div class="container">
        <div class="row row-margin">
            <h3 class="category-headding ">WEEKLY NEWS</h3>
            <div class="headding-border bg-color-1"></div>
            <div id="content-slide-4" class="owl-carousel">

                @foreach($weekly_posts as $weekly_post)
                    <div class="item">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                            <div class="post-thumb img-zoom-in">
                                <a href="/article/details/{{$weekly_post->post_id}}/{{str_replace(' ', '-', $weekly_post->post_headline)}}">
                                    <img class="entry-thumb" src="{{$weekly_post->post_featured_image}}" alt="">
                                </a>
                            </div>
                            <div class="post-info">
                                <span class="color-4">{{$weekly_post->category_name}} </span>
                                <h3 class="post-title">
                                    <a href="/article/details/{{$weekly_post->post_id}}/{{str_replace(' ', '-', $weekly_post->post_headline)}}" rel="bookmark">
                                        {{$weekly_post->post_headline}}
                                    </a>
                                </h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> {{ date('M d, Y', strtotime($weekly_post->created_at))}}
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13</div>
                                    <!-- read more -->
                                    <a class="readmore pull-right" href="/article/details/{{$weekly_post->post_id}}/{{str_replace(' ', '-', $weekly_post->post_headline)}}"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>