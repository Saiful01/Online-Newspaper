<div class="col-md-4 col-lg-3 tr-sticky"
     style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
    <div id="sitebar" class="theiaStickySidebar"
         style="padding-top: 1px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 974.5px;">
        <div class="widget">
            <div class="add featured-add">
                <a href="#"><img class="img-fluid" src="/theme/images/post/add/add5.jpg" alt="Image"></a>
            </div>
        </div>
        <div class="widget follow-us">
            <h1 class="section-title title">ফলো করুন </h1>
            <ul class="list-inline social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
        <div class="widget">
            <h1 class="section-title title">সম্পৃক্ত পোস্ট</h1>
            <ul class="post-list">
                @foreach($related_posts as $related_post)
                    <li>
                        <div class="post small-post">
                            <div class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-fluid" src="/images/post/{{$related_post->post_featured_image}}" alt="Image">
                                </div>
                            </div>
                            <div class="post-content">
                                {{--<div class="video-catagory"><a href="#">{{getCategoryNameFromId($related_post->category_id)}}</a></div>--}}
                                <h2 class="entry-title">
                                    <a href="/details/{{$related_post->post_id}}/{{$related_post->post_slug}}">{{$related_post->post_headline}}</a>
                                </h2>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>