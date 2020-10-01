<div class="section">
    <div class="row">
        <div class="col-md-7 col-lg-8">
            <div id="site-content">
                <div class="row">
                    <div class="col-lg-8 col-md-6 tr-sticky">
                        <div class="left-content theiaStickySidebar">
                            <div class="section lifestyle-section">
                                <h1 class="section-title">বিনোদন </h1>
                                <div class="cat-menu">
                                    <a href="/topic/entertainment">See all</a>
                                </div>
                                <div class="row">

                                    <div class="col-lg-6" ng-repeat="post in entertainment_posts" ng-cloak>
                                        <div class="post medium-post">
                                            <div class="entry-header">
                                                <div class="entry-thumbnail">
                                                    <img class="img-fluid" style="height: 115px;"
                                                         ng-src="/images/post/@{{post.post_featured_image}}"
                                                         alt="Image"/>
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                <div class="entry-meta">
                                                    <ul class="list-inline">
                                                        <li class="publish-date"><a href="#"><i
                                                                        class="fa fa-clock-o"></i>@{{post.created_at}}</a>
                                                        </li>
                                                        {{--<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a>
                                                        </li>
                                                        <li class="loves"><a href="#"><i
                                                                        class="fa fa-heart-o"></i>278</a></li>--}}
                                                    </ul>
                                                </div>
                                                <h2 class="entry-title">
                                                    <a href="/details/@{{post.post_id}}/@{{post.post_slug}}">@{{post.post_headline}}</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 tr-sticky">
                        <div class="middle-content theiaStickySidebar">

                            <div class="section video-section">
                                <h1 class="section-title title">গসিপ</h1>
                                <div class="cat-menu">
                                    <a href="/topic/gossip">See all</a>
                                </div>

                                <ul class="post-list home">
                                    <li ng-repeat="post in gossip_posts" ng-cloak>
                                        <div class="post small-post">
                                            <div class="entry-header">
                                                <div class="entry-thumbnail">
                                                    <img class="img-fluid" ng-src="/images/post/@{{post.post_featured_image}}"
                                                         alt="Image"/>
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                {{-- <div class="video-catagory"><a href="#">@{{post.category_name}}</a></div>--}}
                                                <h2 class="entry-title">
                                                    <a href="/details/@{{post.post_id}}/@{{post.post_slug}}">@{{post.post_headline}}</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </li>

                                </ul>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-lg-4 tr-sticky">
            <div id="sitebar" class="theiaStickySidebar">
                {{-- <div class="widget follow-us">
                     <h1 class="section-title title">ফলো করুন</h1>
                     <ul class="list-inline social-icons">
                         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                         <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                     </ul>
                 </div>--}}
                <div class="widget">
                    <h1 class="section-title title">সর্বাধিক পঠিত</h1>

                    <ul class="post-list home">
                        <li ng-repeat="post in top_posts" ng-cloak>
                            <div class="post small-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid" ng-src="/images/post/@{{post.post_featured_image}}"
                                             alt="Image"/>
                                    </div>
                                </div>
                                <div class="post-content">
                                    {{-- <div class="video-catagory"><a href="#">@{{post.category_name}}</a></div>--}}
                                    <h2 class="entry-title">
                                        <a href="/details/@{{post.post_id}}/@{{post.post_slug}}">@{{post.post_headline}}</a>
                                    </h2>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>


            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="row">
        <div class="col-md-8 col-lg-9">
            <div class="row">
                <div class="col-lg-8 col-md-6 tr-sticky">
                    <div class="section health-section">
                        <h1 class="section-title">লাইফস্টাইল</h1>
                        <div class="cat-menu">
                            <a href="/topic/lifestyle">See all</a>
                        </div>
                        {{--<div class="health-feature">
                            <div class="post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid" src="images/post/health/1.jpg" alt="Image">
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 15,
                                                    2018 </a>
                                            </li>
                                            <li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
                                            <li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
                                        </ul>
                                    </div>
                                    <h2 class="entry-title">
                                        <a href="news-details.html">HealthNews Salutes: Direct Relief International</a>
                                    </h2>
                                </div>
                            </div>
                        </div>--}}
                        <div class="row">
                            <div class="col-lg-6" ng-repeat="post in lifestyle_posts">
                                <div class="post small-post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail">
                                            <img class="img-fluid" ng-src="/images/post/@{{post.post_featured_image}}" style="max-height: 100px; padding-top:10px; width: 100%;"  alt="Image">
                                        </div>
                                    </div>
                                    <div class="post-content">
                                        {{--<div class="entry-meta">
                                            <ul class="list-inline">
                                                <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i>@{{post.created_at}}</a></li>
                                            </ul>
                                        </div>--}}
                                        <h2 class="entry-title">
                                            <a href="/details/@{{post.post_id}}/@{{post.post_slug}}">@{{post.post_headline}}</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 tr-sticky"
                     style="position: relative; overflow: visible; box-sizing: border-box; min-height: 3321px;">
                    <div class="middle-content theiaStickySidebar"
                         style="padding-top: 1px; padding-bottom: 1px; position: absolute; transform: translateY(53px); top: 0px; width: 254.984px;">

                        <div class="section business-section">
                            <h1 class="section-title">খেলাধুলা</h1>
                            <div class="cat-menu">
                                <a href="/topic/sports">See all</a>
                            </div>
                            <div class="post medium-post" ng-repeat="post in sport_posts">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-fluid"  ng-src="/images/post/@{{post.post_featured_image}}" style="height: auto; width: 100%;" alt="Image">
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> @{{post.created_at}}</a></li>
                                            {{--<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
                                            <li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>--}}
                                        </ul>
                                    </div>
                                    <h2 class="entry-title">
                                        <a href="/details/@{{post.post_id}}/@{{post.post_slug}}">@{{post.post_headline}}</a>
                                    </h2>
                                </div>
                            </div>

                            {{--<div class="stock-exchange text-center">
                                <div class="stock-exchange-zone">
                                    <a href="#"><img class="img-fluid" src="images/gallery/stock.png" alt="Image"></a>
                                </div>
                                <div class="stock-header">
                                    <div class="row">
                                        <div class="col-4">Name</div>
                                        <div class="col-4">Price</div>
                                        <div class="col-4">%+/-</div>
                                    </div>
                                </div>
                                <div class="stock-reports">
                                    <div class="com-details">
                                        <div class="row">
                                            <div class="col-4 com-name">BP</div>
                                            <div class="col-4 current-price">388.65</div>
                                            <div class="col-4 current-result">+0.58 <i class="fa fa-caret-up"></i></div>
                                        </div>
                                    </div>
                                    <div class="com-details">
                                        <div class="row">
                                            <div class="col-4 com-name">Royal Ba...</div>
                                            <div class="col-4 current-price">318.25</div>
                                            <div class="col-4 current-result">+0.32 <i class="fa fa-caret-up"></i></div>
                                        </div>
                                    </div>
                                    <div class="com-details">
                                        <div class="row">
                                            <div class="col-4 com-name">Inmarsat</div>
                                            <div class="col-4 current-price">214.19</div>
                                            <div class="col-4 current-result">-0.43 <i class="fa fa-caret-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-4 col-lg-3 tr-sticky">
            <div class="widget">
                <div class="add">
                    <a href="#"><img class="img-fluid" src="/theme/images/post/add/add6.jpg"
                                     alt="Image"/></a>
                </div>
            </div>
        </div>
    </div>
</div>
