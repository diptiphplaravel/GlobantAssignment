<!DOCTYPE html>
<html lang="en">
<head>

  <title>Home Page</title>
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE; chrome=1" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta http-equiv="refresh" content="900">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dipti">
  <link rel="icon"  type="image/png"  href="images/core-favicon.png">

    <!-- IncludeCSS File start-->
        @include('IncludeCSS')
    <!-- IncludeCSS File end-->
  
</head>
<body>
<section>
<!-- main content start-->
<div class="main-content">

       <!-- header section start-->
         @include('header')
        <!-- header section end-->

        
       <!--body wrapper start-->
        <div class="wrapper">
           
            <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-body">
                    You are logged in!
                    
                    Hello {{Auth::User()->email}}
                </div>
            </div>
        </div>
           
       </div>
         <!--Row Ends-->                             
     </div>
    <!--body wrapper ends-->
</div>
<!-- main content Ends-->
</section>
<!-- IncludeJS File start-->
        @include('CommonJS')
    <!-- IncludeJS File end-->
<!--common scripts for all pages-->
<script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>