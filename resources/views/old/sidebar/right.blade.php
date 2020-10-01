
<div class="col-md-4 col-12">

    <div class="row  right-side">
        <div class="detail-page-right-side">

            <h4>এ বিভাগের অন্যান্য সংবাদ </h4>
            @foreach($related_posts as $related_post)
                <hr>
                <div class="news-grid">
                    <a href="/article/details/{{$related_post->post_id}}/{{str_replace(' ', '-', $post->post_headline)}}">
                        <div class="row">
                            <div class="col-md-4"><img
                                        src="/images/post/{{$related_post->post_featured_image}}"
                                        width="100%" height="60px"/></div>
                            <div class="col-md-8">
                                <h4>{{$related_post->post_headline}}</h4>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>

    <div class="row  right-side">
        <div class="detail-page-right-side">
            <img src="/img/grid_ad.gif" width="100%"/>
        </div>
    </div>
    <div class="row  right-side">
        <div class="detail-page-right-side">
            <h4>ক্যাটেগরি </h4>
            <hr>
            <ul class="list-unstyled">
                @foreach($all as $nav)
                    <li><a href="/topics/{{$nav->category_name}}"><i
                                    class="fa fa-chevron-right checvron-size"></i> {{$nav->category_name}}
                        </a><span
                                class="post-count pull-right">(10)</span></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row  right-side">
        <div class="detail-page-right-side">
            <h4>সাম্প্রতিক পোস্ট</h4>
            <hr>
            <ul class="list-unstyled">
                @foreach( $recent_posts as $recent_post)
                    <li><a href="/article/details/{{$recent_post->post_id}}/{{str_replace(' ', '-', $recent_post->post_headline)}}"><i
                                    class="fa fa-chevron-right"></i> {{$recent_post->post_headline}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="row  right-side">
        <div class="detail-page-right-side">
            <h4>আর্কাইভ </h4>
            <hr>
            <form class="form-inline" action="/month/search" method="get"
                  enctype="multipart/form-data">

                <select class="form-control" name="year">
                    <option>2018</option>
                    <option>2017</option>
                </select>

                <select class="form-control" name="month">
                    <option value="1">Jan</option>
                    <option value="2">Feb</option>
                    <option value="3">Mar</option>
                    <option value="4">Apr</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">Aug</option>
                    <option value="9">Sep</option>
                    <option value="10">Oct</option>
                    <option value="11">Nov</option>
                    <option value="12">Dec</option>
                </select>

                <button type="submit" class="btn-primary"
                        style="padding-top:3px;padding-bottom:3px;"><i class="fa fa-search" style="padding-left: 10px;
    padding-right: 10px;
    padding-top: 7px;"></i>
                </button>
            </form>

        </div>
    </div>

</div>