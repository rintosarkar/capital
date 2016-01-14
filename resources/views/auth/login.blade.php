<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Login</title>

    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">

    {!! Form::open(['url'=>'auth/login', 'class'=>'form-signin', 'method'=>'post']) !!}
        {!! csrf_field() !!}
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">Sign In</h1>
            <img src="/images/login-logo.png" alt=""/>
        </div>
        <div class="login-wrap">
            {!! Form::text('username','',['class'=>'form-control','placeholder'=>'User ID', 'autofocus'=>'autofocus']) !!}
            {!! Form::password('password',['class'=>'form-control','placeholder'=>'Password']) !!}
            {!! Form::submit('log in',['class'=>'btn btn-lg btn-login btn-block']) !!}
            
            {{-- <button class="btn btn-lg btn-login btn-block" type="submit">
                <i class="fa fa-check"></i>
            </button> --}}

            <div class="registration">
                Not a member yet?
                <a class="" href="{!! url('auth/register') !!}">
                    Signup
                </a>
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
                </span>
            </label>

        </div>

        
    {!! Form::close() !!}

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    
    @if(Session::get('warning'))
        <div class="alert alert-danger">
            <ul>
                <li>{{ Session::get('warning') }}</li>
            </ul>
        </div>
    @endif

</div>

<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
            </div>
            <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                {{-- <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix"> --}}

            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-primary" type="button">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- modal -->




<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="/js/jquery-1.10.2.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/modernizr.min.js"></script>

</body>
</html>
