<div class="tab-inner">
    <ul class="tabs">
        <li>
            <a href="#">POPULAR</a>
        </li>
        <li>
            <a href="#">MOST
                VIEWED</a></li>
    </ul>
    <hr>
    <!-- tabs -->
    <div class="tab_content">
        <div class="tab-item-inner">
            @foreach($latest_posts as $post)
                <div class="box-item wow fadeIn" data-wow-duration="1s">
                    <div class="img-thumb">
                        <a href="/article/details/{{$post->post_id}}/{{str_replace(' ', '-', $post->post_headline)}}"
                           rel="bookmark"><img class="entry-thumb"
                                               src="{{$post->post_featured_image}}"
                                               alt="" height="80" width="90"></a>
                    </div>
                    <div class="item-details">
                        <h6 class="sub-category-title bg-color-1">
                            <a href="/article/details/{{$post->post_id}}/{{str_replace(' ', '-', $post->post_headline)}}">{{$post->category_name}}</a>
                        </h6>
                        <h3 class="td-module-title"><a
                                    href="/article/details/{{$post->post_id}}/{{str_replace(' ', '-', $post->post_headline)}}">{{$post->post_headline}}</a></h3>
                        <div class="post-editor-date">
                            <!-- post date -->
                            <div class="post-date">
                                <i class="pe-7s-clock"></i> {{date('M d, Y', strtotime($post->created_at))}}
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
            @foreach($latest_posts as $post)
                <div class="box-item">
                    <div class="img-thumb">
                        <a href="/article/details/{{$post->post_id}}/{{str_replace(' ', '-', $post->post_headline)}}"
                           rel="bookmark"><img class="entry-thumb"
                                               src="/theme/images/popular_news_01.jpg"
                                               alt="" height="80" width="90"></a>
                    </div>
                    <div class="item-details">
                        <h6 class="sub-category-title bg-color-5">
                            <a href="/article/details/{{$post->post_id}}/{{str_replace(' ', '-', $post->post_headline)}}">BUSINESS</a>
                        </h6>
                        <h3 class="td-module-title"><a
                                    href="/article/details/{{$post->post_id}}/{{str_replace(' ', '-', $post->post_headline)}}">It
                                is a long established fact that a
                                reader
                                will</a></h3>
                        <div class="post-editor-date">
                            <!-- post date -->
                            <div class="post-date">
                                <i class="pe-7s-clock"></i> {{date('M d, Y', strtotime($post->created_at))}}
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