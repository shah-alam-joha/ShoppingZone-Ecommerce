<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title> Signin</title>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="CodedThemes" />

    <link rel="icon" href="http://it-solutionsbd.com/public/fontend/images/logo/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('backend/login/assets/fonts/fontawesome/css/fontawesome-all.min.css')}}">

    <link rel="stylesheet" href="{{asset('backend/login/assets/plugins/animation/css/animate.min.css')}}">

    <link rel="stylesheet" href="{{asset('backend/login/assets/css/style.css')}}">
</head>
<body>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            
            <div class="card">
               
                <div class="card-body text-center">
                    <div class="mb-4">
                        <a href="http://it-solutionsbd.com/"><img  src="{{asset('public/logo.jpeg')}}" width="200" height="84" class="img-fluid "  alt=""></a>
                    </div>
                    <h3 class="mb-4">Login</h3>
                     <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                       <input type="text" name="email" placeholder="Email" class="form-control " id="fatherMobile" minlength="8" required>
                    </div>
                    <div class="input-group mb-4">
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                    </div>
                    <div class="form-group text-left">
                        <div class="checkbox checkbox-fill d-inline">
                            <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
                            <label for="checkbox-fill-a1" class="cr"> Save credentials</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary shadow-2 mb-4">Login</button>
                    </form>
                    <p>Call:01782300002</p>
                </div>
                
            </div>
        
        </div>
    </div>

    <script src="{{asset('backend/login/assets/js/vendor-all.min.js')}}"></script>
    <script src="{{asset('backend/login/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/login/assets/js/pcoded.min.js')}}"></script>
</body>

</html>