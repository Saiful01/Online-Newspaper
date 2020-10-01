<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <title>Registration</title>

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="/assets/js/modernizr.min.js"></script>

</head>
<body>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="card-box">
        <div class="panel-heading">
            <h4 class="text-center"> Registration Form</h4>
            {{-- <p class="text-center">Email: memotiur@gmail.com</p>
             <p class="text-center">Pass: 123456</p>--}}
        </div>

        @if(session('failed'))
            <p style="color: red;text-align: center">{{session('failed')}}!</p>
        @endif
        @if(session('success'))
            <p style="color: #27b24b;text-align: center">{{session('success')}}!</p>
        @endif

        <div class="p-20">
            <form class="form-horizontal m-t-20" action="/user/registration/store" method="post">
                <div class="form-group ">
                    <div class="col-12">
                        <input class="form-control" type="text" required=""  name="name" placeholder="Name">
                        <input class="form-control" type="hidden" value="{{csrf_token()}}" name="_token" >
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-12">
                        <input class="form-control" type="text" required=""  name="email" placeholder="Email">

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <input class="form-control" type="password"  required="" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <input class="form-control" type="text"  required="" name="phone" placeholder="phone">
                    </div>
                </div>

                <div class="form-group text-center m-t-40">
                    <div class="col-12">
                        <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light"
                                type="submit">Registration
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>




<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/detect.js"></script>
<script src="/assets/js/fastclick.js"></script>
<script src="/assets/js/jquery.slimscroll.js"></script>
<script src="/assets/js/jquery.blockUI.js"></script>
<script src="/assets/js/waves.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/jquery.nicescroll.js"></script>
<script src="/assets/js/jquery.scrollTo.min.js"></script>

<script src="/assets/js/jquery.core.js"></script>
<script src="/assets/js/jquery.app.js"></script>

</body>

</html>