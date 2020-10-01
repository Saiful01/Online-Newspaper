
<div class="author-box">
    <div class="row">
        <div class="col-4">
            <a href="/author/{{$post->author_id}}">
                <img src="/images/user/{{$post->image_url}}" class="rounded-circle" width="200px"
                     height="150px">
            </a>

        </div>
        <div class="col-8">
            <a href="/author/{{$post->author_id}}"> <h4>{{$post->name}} </h4></a>

            <ul class="social-network social-circle">
                <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a>
                </li>
                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                </li>
            </ul>


            <p>{{$post->biography}}</p>
        </div>
    </div>
</div>

