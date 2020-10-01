<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <title>Forget Password</title>

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css"/>

    <script src="/assets/js/modernizr.min.js"></script>

</head>
<body>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="card-box">
        <div class="panel-heading">
            <h4 class="text-center">Forget Password</h4>
            {{-- <p class="text-center">Email: memotiur@gmail.com</p>
             <p class="text-center">Pass: 123456</p>--}}
        </div>

        @if(session('failed'))
            <p style="color: red;text-align: center">{{session('failed')}}!</p>
        @endif

        <div class="p-20">
            <form class="form-horizontal m-t-20" action="/admin/password/save" method="post">
                <div class="form-group ">
                    <div class="col-12">
                        <input class="form-control" type="text" name="email"
                               placeholder="Email" required>
                        <input class="form-control" type="hidden" value="{{csrf_token()}}" name="_token">
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-12">
                        <input class="form-control" type="text" name="temp_code"
                               placeholder="Temporary Code" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <input class="form-control" type="text" name="new_pass"
                               placeholder="New Password" required>
                    </div>
                </div>

                <div class="form-group text-center m-t-40">
                    <div class="col-12">
                        <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light"
                                type="submit">Reset
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

<!-- Mirrored from coderthemes.com/ubold/purple_dark/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 May 2018 18:38:06 GMT -->
</html>