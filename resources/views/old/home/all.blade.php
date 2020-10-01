<section class="all-category-inner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">

                <h3 class="category-headding ">SPORTS</h3>
                <div class="headding-border bg-color-1"></div>
            </div>

            @foreach($more_posts as $post)


                <div class="col-md-4 col-sm-4">
                    <!-- sports -->
                    <div class="sports-inner">


                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                            <!-- post title -->
                            <h3><a href="/article/details/{{$post->post_id}}/{{str_replace(' ', '-', $post->post_headline)}}">{{$post->post_headline}}</a></h3>
                            <!-- post image -->
                            <div class="post-thumb">
                                <a href="/article/details/{{$post->post_id}}/{{str_replace(' ', '-', $post->post_headline)}}">
                                    <img src="{{$post->post_featured_image}}" class="img-responsive" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="post-title-author-details">
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> {{ date('M d, Y', strtotime($post->created_at))}}
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13</div>
                            </div>
                            <p>{!! str_limit($post->post_details,300,'') !!}<a href="/article/details/{{$post->post_id}}/{{str_replace(' ', '-', $post->post_headline)}}">Read more...</a></p>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>

    </div>
</section>