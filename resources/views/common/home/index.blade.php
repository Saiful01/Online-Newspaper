@extends('layouts.common')
@section('title', 'Dhaka Gossip')
@section('description', 'Dhaka Gossip is one of the most revered Bangla lifestyle web portal in Bangladesh.')
@section('keywords', 'Dhaka Gossip, bangla news, current News, bangla newspaper, bangladesh newspaper, online paper, bangladeshi newspaper, bangla news paper, bangladesh newspapers, newspaper, all bangla news paper, bd news paper, news paper, bangladesh news paper, daily, bangla newspaper, daily news paper, bangladeshi news paper, bangla paper, all bangla newspaper, bangladesh news, daily newspaper, অনলাইন, পত্রিকা, বাংলাদেশ, আজকের পত্রিকা, আন্তর্জাতিক, অর্থনীতি, খেলা, বিনোদন, ফিচার, বিজ্ঞান ও প্রযুক্তি, চলচ্চিত্র, ঢালিউড, বলিউড, হলিউড, বাংলা গান, মঞ্চ, টেলিভিশন, নকশা, রস+আলো, ছুটির দিনে, অধুনা, স্বপ্ন নিয়ে, আনন্দ, অন্য আলো, সাহিত্য, গোল্লাছুট, প্রজন্ম ডট কম, বন্ধুসভা,কম্পিউটার, মোবাইল ফোন, অটোমোবাইল, মহাকাশ, গেমস, মাল্টিমিডিয়া, রাজনীতি, সরকার, অপরাধ, আইন ও বিচার, পরিবেশ, দুর্ঘটনা, সংসদ, রাজধানী, শেয়ার বাজার, বাণিজ্য, পোশাক শিল্প, ক্রিকেট, ফুটবল, লাইভ স্কোর')
@section('content')


    <div class="container" ng-controller="myCtrl">
        @include('common.home.slider')


        @include('common.home.carousel_post')
        @include('common.home.inner_add')

        {{--@include('common.home.category_content')--}}
        @include('common.home.temp')

    </div>
    {{--
        @include('common.home.twitter_feed')
        @include('common.home.footer_widget')--}}


    <script>


        app.controller('myCtrl', function ($scope, $http) {

            $http.get("/api/top-post")
                .then(function (response) {
                    $scope.top_posts = response.data;

                    console.log(response.data + "----");
                });


            $scope.gettingEntertainmentPost = function (id, limit) {

                $http.post('/api/category', {
                    id: id,
                    limit: limit
                }).then(function success(response) {
                    $scope.entertainment_posts = response.data.result;
                });
            };

            $scope.gettingLifeStylePost = function (id, limit) {

                $http.post('/api/category', {
                    id: id,
                    limit: limit
                }).then(function success(response) {
                    $scope.lifestyle_posts = response.data.result;
                });
            };

            $scope.gettingSportPost = function (id, limit) {

                $http.post('/api/category', {
                    id: id,
                    limit: limit
                }).then(function success(response) {
                    $scope.sport_posts = response.data.result;
                });
            };

            $scope.gettingGossipPost = function (id, limit) {

                $http.post('/api/category', {
                    id: id,
                    limit: limit
                }).then(function success(response) {
                    $scope.gossip_posts = response.data.result;
                });
            };
            $scope.gettingEntertainmentPost(1, 4);
            $scope.gettingLifeStylePost(3, 6);
            $scope.gettingSportPost(6, 3);
            $scope.gettingGossipPost(2, 3);

        });
    </script>
@endsection