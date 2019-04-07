<!DOCTYPE html>
<html lang="en" class="no-js">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title></title>

    <!-- External fonts -->
    <link href="https://brick.a.ssl.fastly.net/Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- NPM Packages -->
    <link href="{{asset ('/spark/node_modules/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset ('/spark/node_modules/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset ('/spark/node_modules/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Vendor -->
    <link href="{{asset ('/spark/assets/vendor/md-snackbars/md-snackbars.min.css')}}" rel="stylesheet">

    <!-- Theme -->
    <link href="{{asset ('/spark/assets/css/spark.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class=""> <!-- right-to-left -->
    <div class="splash active">
        <div class="icon"></div>
    </div>

    <div class="wrapper">

        <div class="page-content full-width">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mx-auto">

                        <div class="card card-default widget">
                            <div class="card-heading">
                                <h3 class="card-title">{{ __('Sign In') }}</h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <label for="email">{{ __('E-Mail Address') }}</label>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required autofocus>

                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success btn-block btn-lg">{{ __('Sign In') }}</button>
                                </form>

                                <div class="margin-tb-10">
                                    <a href="404">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <span class="text-muted">Dont have an account?</span> <a href="404">{{ __('Sign Up') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /#wrapper -->

    <!-- NPM Packages -->
    <script src="{{asset ('/spark/node_modules/jquery/dist/jquery.min.js')}}"></script>

    <script src="{{asset ('/spark/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset ('/spark/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Vendor -->
    <script src="{{asset ('/spark/assets/vendor/md-snackbars/md-snackbars.min.js')}}"></script>

    <!-- Theme -->
    <script src="{{asset ('/spark/assets/js/spark.js')}}"></script>

    <script>
        $(document).ready(function () {
            Spark.init();
        });
    </script>

</body>
</html>