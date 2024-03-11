<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Learn Laravel</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/customize.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div class="row">

            <div class="col-md-12 text-center">
                <h2 class="font-bold">Welcome to XShop</h2>

                <p>
                    Enter Login details to get access.
                </p>
                <div class="ibox-content" style="border-radius: 10px">
                    <form method="POST" class="m-t" role="form" action="{{route('auth.login')}}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Username">
                            @if($errors -> has('email'))
                                <div class="error-message">
                                    * {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            @if($errors -> has('password'))
                                <div class="error-message">
                                    * {{$errors->first('password')}}
                                </div>
                            @endif
                        </div>
                        <button type="submit" style="color: white; background-color: #FF2020" class="btn block full-width m-b">Login</button>

                        <a href="#">
                            <small style="color: #FF2020">Forgot password?</small>
                        </a>

                        <p class="text-muted text-center">
                            <small>Do not have an account?</small>
                        </p>
                        <a style="color: #FF2020" class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
                    </form>
                </div>
            </div>
        </div>
        <hr />
    </div>

</body>

</html>
