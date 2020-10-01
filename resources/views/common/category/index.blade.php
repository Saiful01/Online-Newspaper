@extends('layouts.common')
@section('title', 'Dhaka Gossip')
@section('content')


    <div id="main-wrapper" class="page">

        <div class="container">
            <div class="page-breadcrumbs" style=" margin: 23px 0 15px;">
                <h1 class="section-title">

                    @if(isset($category_name))
                        {{$category_name}}
                    @endif

                    @if(isset($query))
                        Search Result for: {{$query}}
                    @endif

                </h1>
            </div>



            <div class="section">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div id="site-content" class="site-content">
                            <div class="section listing-news">
                                @if(count($posts)==0)

                                    <div class="post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                              <h4 style="padding: 50px 20px"> পোস্ট পাওয়া যায়নি</h4>
                                            </div>
                                        </div>

                                    </div>

                                @endif
                                @foreach($posts as $post)

                                    <div class="post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-fluid" src="/images/post/{{$post->post_featured_image}}"
                                                     width="100%"
                                                     alt="Image"/>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <div class="entry-meta">
                                                <ul class="list-inline">
                                                    <li class="publish-date"><a href="#"><i
                                                                    class="fa fa-clock-o"></i> {{dateFormat($post->created_at)}}
                                                        </a></li>
                                                    {{--<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
                                                    <li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>--}}
                                                </ul>
                                            </div>
                                            <h2 class="entry-title">
                                                <a href="/details/{{$post->post_id}}/@if($post->post_slug==null) {{getTitleToUrl($post->post_headline)}}@else {{$post->post_slug}} @endif">{{$post->post_headline}}</a>

                                            </h2>
                                            <div class="entry-content">

                                                <p>{!! $post->post_details !!}</p>
                                            </div>
                                        </div>
                                    </div>


                                @endforeach

                                {{ $posts->links() }}
                            </div>
                        </div>
                    </div>
                    <div id="sticky" class="col-md-4 col-lg-3 tr-sticky">
                        <div id="sitebar" class="theiaStickySidebar">
                            <div class="widget">
                                <div class="add">
                                    <a href="#"><img class="img-fluid" src="/theme/images/post/add/add6.jpg"
                                                     alt="Image"/></a>
                                </div>
                            </div>

                            @include('include.social_media')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection