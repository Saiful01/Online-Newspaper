@extends('layouts.general')
@section('title', '')
@section('content')

    <div class="container">

        <div class="row">

            <!--Top Advertisement Start-->
            <div class="container">
                <div class="row">

                    <div class="col-12 full-row-add">
                        <div class="text-center">
                            <img src="/img/add.gif" width="100%" height="90px" style="overflow: hidden">
                        </div>
                    </div>
                </div>

            </div>
            <!--Top Advertisement End-->
            <div class="col-12 col-md-8 news-details">

               {{-- <button class="btn btn-success btn-sm">{{$post->post_tags}}</button>--}}




                {{--  <a href="https://www.facebook.com/sharer/sharer.php?u=URLENCODED&t=TITLE" class="share facebook"
                     data-network="facebook">Share on Facebook</a>
                  <a href="https://twitter.com/share?url=URLENCODED&text=TITLE" class="share twitter"
                     data-network="twitter">Share on Twitter</a>
                  <a href="https://plus.google.com/share?url=URLENCODED" class="share google" data-network="google">Share
                      on Google+</a>
                  <a href="https://www.linkedin.com/shareArticle?mini=true&url=URLENCODED&title=TITLE&source=COMPANY"
                     class="share linkedin" data-network="linkedin">Share on LinkedIn</a>--}}

                {{--<!--Facebook-->
                    <button type="button" class="btn btn-fb btn-primary"><i class="fa fa-facebook pr-1"></i> Facebook</button>
                    <!--Twitter-->
                    <button type="button" class="btn btn-tw"><i class="fa fa-twitter pr-1"></i> Twitter</button>
                    <!--Google +-->
                    <button type="button" class="btn btn-gplus"><i class="fa fa-google-plus pr-1"></i> Google +</button>
                    <!--Linkedin-->
                    <button type="button" class="btn btn-li"><i class="fa fa-linkedin pr-1"></i> Linkedin</button>
                    <!--Instagram-->--}}



                @foreach($post as $p)
                    <img src="/images/exhibition/1537990434.gif" width="100%"/>
                    <div class="post-detail-headline">
                        <h4>{{$p->exhibition_post_headline}}</h4>
                    </div>

                @endforeach




                {{-- <div class="author-box">
                     <div class="row">
                         <div class="fb-comments"
                              data-href="https://developers.facebook.com/docs/plugins/comments#configurator"
                              data-numposts="5"></div>
                         <div id="fb-root"></div>
                     </div>
                 </div>--}}

               {{-- <div class="author-box">
                    <div class="row">
                        <form class="form-horizontal" method="post" action="/comment/store"
                              enctype="multipart/form-data">

                            <div class="form-group row">
                                <div class="col-10">
                                    <textarea type="text" class="form-control" name="comment"></textarea>
                                    <input type="hidden" class="form-control" name="_token"
                                           value="{{csrf_token()}}">
                                    <input type="hidden" class="form-control" name="post_id"
                                           value="{{$post->post_id}}">
                                </div>
                            </div>

                            <div class="form-group mb-0 justify-content-end row">
                                <div class="col-10">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Save
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>--}}


            </div>


            <div class="col-md-4 col-12">

                <div class="row  right-side">
                    <div class="detail-page-right-side">

                        <h4>এ বিভাগের অন্যান্য সংবাদ </h4>
                        @foreach($related_posts as $related_post)
                            <hr>
                            <div class="news-grid">
                                <a href="/article/details/{{$related_post->post_id}}">
                                    <div class="row">
                                        <div class="col-md-4"><img
                                                    src="/images/post/{{$related_post->post_featured_image}}"
                                                    width="100%"/></div>
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
                                <li><a href="#"><i
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
                                <li><a href="/article/details/{{$recent_post->post_id}}"><i
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
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="fa fa-chevron-right"></i> জানুয়ারি</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i> ফেব্রুয়ারি</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i> মার্চ</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i> এপ্রিল</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <script>
        $('a.share').click(function (e) {
            e.preventDefault();
            var $link = $(this);
            var href = $link.attr('href');
            var network = $link.attr('data-network');

            var networks = {
                facebook: {width: 600, height: 300},
                twitter: {width: 600, height: 254},
                google: {width: 515, height: 490},
                linkedin: {width: 600, height: 473}
            };

            var popup = function (network) {
                var options = 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,';
                window.open(href, '', options + 'height=' + networks[network].height + ',width=' + networks[network].width);
            }

            popup(network);
        });
    </script>

    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
@endsection