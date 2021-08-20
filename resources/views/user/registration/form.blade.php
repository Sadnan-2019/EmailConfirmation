<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('/')}}/front/css/bootstrap.css" />
    <link rel="stylesheet" href="{{asset('/')}}/front/vendors/linericon/style.css" />
    <link rel="stylesheet" href="{{asset('/')}}/front/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{asset('/')}}/front/css/themify-icons.css" />
    <link rel="stylesheet" href="{{asset('/')}}/front/css/flaticon.css" />
    <link rel="stylesheet" href="{{asset('/')}}/front/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{asset('/')}}/front/vendors/lightbox/simpleLightbox.css" />
    <link rel="stylesheet" href="{{asset('/')}}/front/vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="{{asset('/')}}/front/vendors/animate-css/animate.css" />
    <link rel="stylesheet" href="{{asset('/')}}/front/vendors/jquery-ui/jquery-ui.css" />
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('/')}}/front/css/style.css" />
    <link rel="stylesheet" href="{{asset('/')}}/front/css/responsive.css" />
    <link rel="stylesheet" href="{{asset('/')}}/front/fontawesome-free/css/all.min.css">
</head>

<body>
<div class="container">
    <h1><img src="{{asset('/images/logo.png')}}" alt="Image"/></h1>

    <div class="row">
        <div class="col-lg-6 offset-3 m-auto">
            <h1 class="text-center">Registration page</h1>
            <form method="post"  action="{{route('completeRegistration')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your Name">
                    <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : '' }}</span>

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email address">
                    <span class="text-danger">{{$errors->has('email')? $errors->first('email') : ''}}</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password"name="password" class="form-control" placeholder="Enter  Password">
                    <span class="text-danger">{{$errors->has('password')? $errors->first('password') : ''}}</span>
                 </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Paasword</label>
                    <input type="password" name="password_confirmation" class="form-control "  placeholder="Enter Confirm Password">
                    <span class="text-danger">{{$errors->has('password_confirmation')? $errors->first('password_confirmation') : ''}}</span>

                </div>
                <div class="form-group">
                    <label for="vat" class=" form-control-label">Photo</label>
                    <input type="file"  placeholder="Upload Picture" name="photo" class="form-control">
                    <span class="text-danger">{{$errors->has('photo')? $errors->first('photo') : ''}}</span>


                </div>



                <input class="btn btn-primary" type="submit" value="Submit" name="btn">
            </form>
        </div>
    </div>
</div>
</body>
</html>
