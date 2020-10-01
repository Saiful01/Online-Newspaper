@extends('layouts.general')
@section('title', 'Details')
@section('content')

    <div class="container">

        <div class="row">

            <!--Top Advertisement Start-->
            <div class="container">
                <div class="row">

                    <div class="col-12 full-row-add">
                        <div class="text-center">
                            <img src="/img/add.gif" width="100%" height="90px">
                        </div>
                    </div>
                </div>

            </div>
            <!--Top Advertisement End-->


            <div class="col-12 col-md-8 news-details">

                <!-- Author Profile-->
                <div class="container">
                    <div class="row">

                        <div class="col-4  full-row-add">

                            <div class="card">
                                <img class="card-img-top rounded-circle" src="/images/user/{{$author->image_url}}"
                                     style="display: block;
  max-width:130px;
  max-height:95px;
  width: auto;
  height: auto;">
                                <hr>
                                <div class="card-body">
                                    <h4 class="card-title">{{$author->name}}</h4>
                                    <p class="card-text">{{$author->biography}}</p>

                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <!-- Author Profile-->
                <hr>

                <div class="col-12 row">
                    @if(sizeof($posts)>0)
                        @php($i=1)
                        @foreach($posts as $post)
                            @php($i++)

                            <div class="col-4">
                                <img src="/images/post/{{$post->post_featured_image}}" width="100%"/>
                            </div>
                            <div class="col-8">
                                <h5>{{$post->post_headline}}</h5>
                                <div class="col-12 horizontal-line"></div>
                                <p style="overflow: hidden;display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">{{$post->post_details}}</p>
                                <a href="/article/details/{{$post->post_id}}/{{str_replace(' ', '-', $post->post_headline)}}"
                                   class="btn btn-outline-danger btn-sm">আরো
                                    দেখুন </a>
                                @if( $i> 20 )
                                    @break
                                @endif
                                <hr>
                            </div>


                        @endforeach

                    @else
                        <p>Nothing Found</p>
                        <div>

                            @endif
                        </div>

                </div>
            </div>


            <div class="col-md-4 col-12">

                <div class="row  right-side">
                    <div class="detail-page-right-side">
                        <h4>সাম্প্রতিক পোস্ট</h4>
                        @if(isset($recent_posts))
                            @foreach($recent_posts as $recent_post)
                                <hr>
                                <div class="news-grid">
                                    <a href="/article/details/{{$recent_post->post_id}}">
                                        <div class="row">
                                            <div class="col-md-4"><img
                                                        src="/images/post/{{$recent_post->post_featured_image}}"
                                                        width="100%"/></div>
                                            <div class="col-md-8">
                                                <h4>{{$recent_post->post_headline}}</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @endif
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
