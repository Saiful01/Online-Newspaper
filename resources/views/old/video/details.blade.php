@extends('layouts.general')
@section('title', '' . $post->post_headline . '')
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

                <button class="btn btn-success btn-sm">{{$post->post_tags}}</button>

                <div class="post-detail-headline">
                    <h4>{{$post->video_title}}</h4>
                </div>
                <div class="post-detail-meta-data">
                    <ul class="list-inline">
                        <li class="list-inline-item"><i
                                    class="fa fa-clock-o"></i> {{$post->updated_at}}
                        </li>
                        <li class="list-inline-item"><a href="#comment"><i
                                        class="fa fa-comments"></i> {{count($comments)}}</a></li>
                    </ul>
                </div>

                <div class="social-share">
                    <ul class="social-network social-circle">
                        {{-- <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>--}}
                        <li>
                            <a href="https://www.facebook.com/sharer/sharer.php?u= {{ url('/article/details')}}/{{$post->post_id}}"
                               target="_blank" class="icoFacebook share facebook" data-network="facebook"
                               title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li>
                            <a href="https://twitter.com/share?url={{ url('/article/details')}}/{{$post->post_id}}&text={{$post->post_headline}}"
                               target="_blank" class="icoTwitter share twitter" data-network="twitter"
                               title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/share?url={{ url('/path/uri') }}/{{$post->post_id}}"
                               target="_blank" class="icoGoogle share google" data-network="google" title="Google +"><i
                                        class="fa fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url('/path/uri') }}/{{$post->post_id}}&title={{$post->post_headline}}&source=COMPANY"
                               class="icoLinkedin share linkedin" data-network="linkedin" title="Linkedin"><i
                                        class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>

                <?php
                function get_youtube_id_from_url($url)
                {
                    preg_match('/(http(s|):|)\/\/(www\.|)yout(.*?)\/(embed\/|watch.*?v=|)([a-z_A-Z0-9\-]{11})/i', $url, $results);
                    return $results[6];
                }
                ?>


                <div class="featured-image">
                    <iframe width="100%" height="300px"
                            src="https://www.youtube.com/embed/{{get_youtube_id_from_url($post->video_url)}}"
                            frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen></iframe>

                </div>
                <div class="detail-post">
                    <span style="color: black">{!! $post->video_description !!}</span>

                </div>

                @include('general.details.author')

                {{-- <div class="author-box">
                     <div class="row">
                         <div class="fb-comments"
                              data-href="https://developers.facebook.com/docs/plugins/comments#configurator"
                              data-numposts="5"></div>
                         <div id="fb-root"></div>
                     </div>
                 </div>--}}
                @include('general.comment.index')

            </div>

            @include('general.sidebar.right')
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