<!doctype html>
<html lang="en">
    

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="IT SOLUTIONS BD Admin &amp; Dashboard ">
        <meta name="author" content="IT SOLUTIONS BD">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>ShoppingZone</title>

       @include('layouts.style')
    </head>

    <body class="fixed">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-green">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <div class="wrapper">
            @include('layouts.sidebar')
            <!-- Page Content  -->
            <div class="content-wrapper">
                <div class="main-content">
                 @include('layouts.topbar')
                    <!--Content Header (Page header)-->
                    <div class="body-content">
  
                    </div>

                    @include('partials.message');

                    @yield('content')
                    
                    <!--/.body content-->
                </div><!--/.main content-->
            </div>
        </div>
               
    </body>

@include('layouts.footer')
</html>