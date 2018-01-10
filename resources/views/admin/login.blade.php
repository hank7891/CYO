<!--Inspired by http://tutorialzine.com/2012/02/apple-like-login-form/ - Apple-like Login Form with CSS 3D Transforms -->
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="{{ asset('assets/admin/c/login.css') }}" rel="stylesheet">
        <style type="text/css">
            .fail {width:200px; margin: 20px auto; color: red;}
        </style>

        <title>Blog Login</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="container" id="formContainer">
                    <form class="form-signin" id="login" role="form" action="{{ route('admin.login') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @if ($errors->has('fail'))
                            <div class="fail">{{ $errors->first('fail') }}</div>
                        @endif

                        <h3 class="form-signin-heading">Please sign in</h3>
                        <a href="#" id="flipToRecover" class="flipLink">
                            <div id="triangle-topright"></div>
                        </a>
                        <input type="text" class="form-control" name="accountID" id="accountID" placeholder="accountID" required autofocus>
                        <input type="password" class="form-control" name="accountPassword" id="accountPassword" placeholder="Password" required>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    </form>

                </div> <!-- /container -->
            </div>
        </div>
    </body>
</html>
