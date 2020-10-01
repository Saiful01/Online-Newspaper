<div class="row">
    <div class="col-md-5">

        <div id="home-slider">

            @foreach($sliders as $post)
                <div class="post feature-post">
                    <div class="entry-header">
                        <div class="entry-thumbnail">
                            <img class="img-fluid" src="/images/post/{{$post->post_featured_image}}" alt="Image"
                                 style="width: 100%; max-height: 250px"/>
                        </div>
                        <div class="catagory world"><a href="#">World</a></div>
                    </div>
                    <div class="post-content">
                        <div class="entry-meta">
                            <ul class="list-inline">
                                <li class="publish-date"><i class="fa fa-clock-o"></i><a
                                            href="#"> {{dateFormat($post->created_at)}} </a></li>
                                {{-- <li class="views"><i class="fa fa-eye"></i><a href="#">15k</a></li>
                                 <li class="loves"><i class="fa fa-heart-o"></i><a href="#">278</a></li>
                                 <li class="comments"><i class="fa fa-comment-o"></i><a href="#">189</a>
                                 </li>--}}
                            </ul>
                        </div>
                        <h2 class="entry-title">
                            <a href="/details/{{$post->post_id}}/{{$post->post_slug}}">{{$post->post_headline}}</a>
                        </h2>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="section add inner-add">
            <a href="#"><img class="img-fluid" src="/images/ad/add4.jpg" alt="Image"></a>
        </div>

        {{--   <div class="widget-box-2" style="background:#ffffff;margin-top: 10px";>
<h4>Corona</h4>
                   <div class="stock-reports">
                       <div class="com-details">
                           <div class="row">
                               <div class="col-4 com-name">Infected</div>
                               <div class="col-4 current-price">25</div>
                           </div>
                       </div>
                       <div class="com-details">
                           <div class="row">
                               <div class="col-4 com-name">Dead</div>
                               <div class="col-4 current-price">31</div>
                           </div>
                       </div>

               </div>
           </div>--}}
    </div>
    <div class="col-md-7">

        <div class="row">
            @foreach($posts1 as $post)
                <div class="col-md-6">
                    <div class="post feature-post">
                        <div class="entry-header">
                            <div class="entry-thumbnail">
                                <img class="img-fluid slider-img-2"
                                     src="/images/post/{{$post->post_featured_image}}" alt="Image"
                                     style="max-height: 165px; width: 100%;"/>
                            </div>
                            {{-- <div class="catagory {{randomCategory()}}"><a
                                         href="#">{{$post->category_name}}</a></div>--}}
                        </div>
                        <div class="post-content">
                            <div class="entry-meta">
                                <ul class="list-inline">
                                    <li class="publish-date"><i class="fa fa-clock-o"></i><a
                                                href="#">{{dateFormat($post->created_at)}} </a></li>
                                    {{--<li class="views"><i class="fa fa-eye"></i><a href="#">15k</a></li>
                                    <li class="loves"><i class="fa fa-heart-o"></i><a href="#">278</a></li>--}}
                                </ul>
                            </div>
                            <h2 class="entry-title">
                                <a href="/details/{{$post->post_id}}/{{$post->post_slug}}">{{$post->post_headline}}</a>
                            </h2>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </div>
</div>