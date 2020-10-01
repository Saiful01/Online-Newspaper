<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Summernote Laravel Tutorial</title>


    <!-- Custom styles for this template -->
    <link href="{{asset('starter-template.css')}}" rel="stylesheet">
  </head>
 <style>
	textarea {
    		display: block;
    		margin-left: auto;
    		margin-right: auto;
	}	
 </style>
  <body>

    <div class="container">

      <div class="starter-template">
	<h1>Display summernote content from Database</h1>
      </div>

	{!! $summernote->content !!}
    </div><!-- /.container -->





    <!--================================================== Summernote library -->
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>




    <script>
        $(document).ready(function() {
          $('.summernote').summernote();
        });
    </script>
  </body>
</html>

