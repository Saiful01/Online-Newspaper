<div class="author-box" id="comment">
    <div class="row">
        <form class="form-horizontal" method="post" action="/comment/store"
              enctype="multipart/form-data" style="width: 100%">

            <div class="form-group row">

                <div class="col-12">
                    <textarea type="text" class="form-control" name="comment" placeholder="Comment" required></textarea>
                    <input type="hidden" class="form-control" name="_token"
                           value="{{csrf_token()}}">
                    <input type="hidden" class="form-control" name="post_id"
                           value="{{$post->post_id}}">
                </div>
            </div>
            <div class="form-group row">

                <div class="col-12">
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                </div>
            </div>
            <div class="form-group row">

                <div class="col-12">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
            </div>

            <div class="form-group mb-0 justify-content-end row">
                <div class="col-12">
                    <button type="submit" class="btn btn-info waves-effect waves-light">Comment
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>

@if(count($comments)>0)
    <div class="author-box">
        <div class="row">

            <div class="card">
                <div class="card-body">

                    @foreach($comments as $comment)
                        <div class="row">
                            <div class="col-md-2">
                                <img src="https://image.ibb.co/jw55Ex/def_face.jpg"
                                     class="img img-rounded img-fluid" height="30px"/>
                                <p class="text-secondary text-center">{{$comment->name}}</p>
                                {{-- <p class="text-secondary text-center">{{$comment->updated_at}}</p>--}}
                            </div>
                            <div class="col-md-10">
                                {{--  <p>
                                      <a class="float-left"
                                         href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>{{$comment->name}}</strong></a>
                                      <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                      <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                      <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                      <span class="float-right"><i class="text-warning fa fa-star"></i></span>

                                  </p>--}}
                                <div class="clearfix"></div>
                                <p>{{$comment->comment}}</p>
                                {{-- <p>
                                     <a class="float-right btn btn-outline-primary ml-2"> <i
                                                 class="fa fa-reply"></i> Reply</a>
                                     <a class="float-right btn text-white btn-danger"> <i
                                                 class="fa fa-heart"></i> Like</a>
                                 </p>--}}
                            </div>
                        </div>
                        <hr>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
@endif