<div class="section">
    <div class="latest-news-wrapper">
        <h1 class="section-title">সাম্প্রতিক</h1>
        <div class="row">
            <div id="latest-news">
                @foreach($posts as $post)
                    <div class="post medium-post">
                        <div class="entry-header">
                            <div class="entry-thumbnail">
                                <img class="img-fluid" style="height: 150px; width: 100%;" src="/images/post/{{$post->post_featured_image}}" alt="Image"/>
                            </div>
                            <div class="catagory {{randomCategory()}}"><a
                                        href="#">{{$post->category_name}}</a></div>
                        </div>
                        <div class="post-content">
                            <div class="entry-meta">
                                <ul class="list-inline">
                                    <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> {{dateFormat($post->created_at)}} </a>
                                    </li>
                                    {{--<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
                                    <li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>--}}
                                </ul>
                            </div>
                            <h2 class="entry-title">
                                <a href="/details/{{$post->post_id}}/{{$post->post_slug}}">{{$post->post_headline}}</a>
                            </h2>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>