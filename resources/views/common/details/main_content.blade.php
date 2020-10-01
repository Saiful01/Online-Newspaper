<div class="col-md-8 col-lg-9">
    <div id="site-content" class="site-content">
        <div class="row">
            <div class="col">
                <div class="left-content">
                    <div class="details-news">
                        <div class="post">
                            <div class="entry-header">
                                <div class="entry-thumbnail">
                                    <img style="width: 100%;" class="img-fluid"
                                         src="/images/post/{{$post->post_featured_image}}"
                                         alt="Image">
                                </div>
                            </div>
                            <div class="post-content">
                                <div class="entry-meta">
                                    <ul class="list-inline">
                                        <li class="posted-by"><i class="fa fa-user"></i><a href="#">ঢাকা গসিপ ডেস্ক</a>
                                        </li>
                                        <li class="publish-date"><a ><i
                                                        class="fa fa-clock-o"></i> {{dateFormat($post->created_at)}}
                                            </a>
                                        </li>
                                        {{-- <li class="views"><a href="#"><i class="fa fa-eye"></i>{{getPostView($post->post_id)}}</a></li>--}}
                                        {{--  <li class="loves"><a href="#"><i
                                                          class="fa fa-heart-o"></i>278</a></li>--}}
                                        <li class="comments"><i class="fa fa-comment-o"></i><a
                                                    href="#comment">{{count($comments)}}</a>
                                        </li>
                                    </ul>
                                </div>
                                <h2 class="entry-title">
                                    {{$post->post_headline}}
                                </h2>
                                <div class="entry-content">


                                    {{--   <div class="fb-post"
                                            data-href="https://www.facebook.com/20531316728/posts/10154009990506729/"
                                            data-show-text="true" data-width="">

                                       </div>--}}


                                    {!!   $post->post_details !!}

                                    <?php

                                    $url = URL::to('/details/' . $post->post_id . "/" . getTitleToUrl($post->post_headline));
                                    $twitter_message = $post->post_headline;
                                    ?>


                                    <ul class="list-inline share-link">
                                        <li><a href="#"
                                               onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('<?php echo $url ?>'),'facebook-share-dialog','width=626,height=436');return false;"><img
                                                        src="/theme/images/others/s1.png"
                                                        alt="Image"></a>
                                        </li>
                                        <li><a href="#"
                                               onclick="window.open('https://twitter.com/intent/tweet?text='+'<?php echo $post->blog_title?>'+'&url='+encodeURIComponent('<?php echo $url ?>'),'facebook-share-dialog','width=626,height=436');return false;"><img
                                                        src="/theme/images/others/s2.png"
                                                        alt="Image"></a>
                                        </li>
                                        <li><a href="#"><img src="/theme/images/others/s3.png"
                                                             alt="Image"></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">

            <div class="post google-add">
                <div class="add inner-add text-center">
                    <a href="#"><img class="img-fluid" src="/theme/images/post/add/google-add.jpg"
                                     alt="Image"></a>
                </div>
            </div>

            <div class="comments-wrapper" id="comment">
                <h1 class="section-title title">Comments</h1>
                <ul class="media-list">
                    @foreach($comments as $comment)
                        <li class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object" src="https://cdn1.iconfinder.com/data/icons/freeline/32/account_friend_human_man_member_person_profile_user_users-512.png"
                                                 alt="Image"></a>
                            </div>
                            <div class="media-body">
                                <h2><a href="#">{{$comment->name}}</a></h2>
                                <h3 class="date"><a href="#">{{dateFormat($comment->created_at)}}</a></h3>
                                <p>{{$comment->comment}} </p>
                                <a class="replay" href="#">Replay</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="comments-box">
                    <h1 class="section-title title">Leave a Comment</h1>
                    @if(session('failed'))
                        <p style="color: red;text-align: center">{{session('failed')}}!</p>
                    @endif
                    @if(session('success'))
                        <p style="color: #27b24b;text-align: center">{{session('success')}}!</p>
                    @endif
                    @if(Auth::check())
                        <form id="comment-form" action="/comment/store" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="post_id" value="{{$post->post_id}}">
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="form-group">
                                        <label>Your Text</label>
                                        <textarea name="comment" id="comment" required="required"
                                                  class="form-control" rows="5"
                                                  spellcheck="false"></textarea>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @else
                        <a class="btn btn-success btn-sm text-white" data-toggle="modal" data-target="#myModal">Login To
                            Comment</a>

                    @endif
                </div>
            </div>

            {{--@include('common.details.more_post')--}}
        </div>
    </div>
</div>

<!-- The Login Modal -->
<div class="modal fade" id="myModal" style="padding-top: 100px" ng-controller="myCtrl">
    <div class="modal-dialog" >
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Login</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                @if(session('failed'))
                    <p style="color: red;text-align: center">{{session('failed')}}!</p>
                @endif
                @if(session('success'))
                    <p style="color: #27b24b;text-align: center">{{session('success')}}!</p>
                @endif
                <div id="login">
                    <form class="form-horizontal m-t-20">
                        <div class="form-group ">
                            <div class="col-12">
                                <input class="form-control" type="text" required="" name="email" placeholder="Email"
                                       ng-model="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <input class="form-control" type="password" required="" name="password"
                                       placeholder="Password" ng-model="password">
                            </div>
                        </div>

                        {{--       <div class="form-group ">
                                   <div class="col-12">
                                       <div class="checkbox checkbox-primary">
                                           <input id="checkbox-signup" type="checkbox">
                                           <label for="checkbox-signup">
                                               Remember me
                                           </label>
                                       </div>

                                   </div>
                               </div>--}}

                        <div class="form-group text-center m-t-40">
                            <div class="col-12">
                                <button class="btn btn-success "
                                        ng-click="login()">Log In
                                </button>
                            </div>
                        </div>

                    </form>
                    <div class="form-group text-center m-t-40" style="">
                        <div class="col-12">
                            <label>If You Are Not Registered Then Registration</label>
                            <button class="btn btn-primary " ng-click="hideLogin()">Registration
                            </button>
                        </div>
                    </div>
                </div>

                <div class="" id="registration">
                    <form class="form-horizontal m-t-20">
                        <div class="form-group ">
                            <div class="col-12">
                                <input class="form-control" type="text" required="" name="name" placeholder="Name"
                                       ng-model="name">
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-12">
                                <input class="form-control" type="text" required="" name="email" placeholder="Email"
                                       ng-model="email">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <input class="form-control" type="password" required="" name="password"
                                       placeholder="Password" ng-model="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-12">
                                <input class="form-control" type="text" required="" name="phone" placeholder="phone"
                                       ng-model="phone">
                            </div>
                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-12">
                                <button class="btn btn-success"
                                        ng-click="registration()">Registration
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>

</div>


<script>


    app.controller('myCtrl', function ($scope, $http) {


        document.getElementById("registration").style.display = 'none';

        $scope.hideLogin = function () {
            console.log("kkkk");
            document.getElementById("login").style.display = 'none';
            document.getElementById("registration").style.display = 'block';
        };
        $scope.login = function () {

            console.log("lll");
            $http.post('/api/user/login', {
                email: $scope.email,
                password: $scope.password
            }).then(function success(response) {

                if (response.data.status_code == 200) {

                    window.location.reload();
                } else {

                    console.log("Email or Password is wrong");
                }

            });
        };

        $scope.registration = function () {

            console.log("lll");
            $http.post('/api/user/registration', {
                email: $scope.email,
                password: $scope.password,
                name: $scope.name,
                phone: $scope.phone
            }).then(function success(response) {

                if (response.data.status_code == 200) {

                    window.location.reload();
                } else {

                    console.log("There is an error");
                }

            });
        };


    });
</script>