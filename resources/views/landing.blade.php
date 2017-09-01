<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<title>Book Exchange Portal</title>
<meta name="viewport" content="width=device-width", initial-scale="1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
</head>
    

<body>

    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
    </div>

	<div id="landing">
        <div class="col-md-6 heading">
            <h1 id="landing-heading" >TITLE</h1>
		    <h4 id="landing-subhead">Description</h4>
        </div>
        <div class="col-md-6 register">
            <!------ Registration page goes here ---->
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>

        </div>
    </div>
    
	<div class="image">
        <div class="one col-sm-4">
            <div id="circular_sell">
                <div class="icon">
                    <i class="fa fa-money" aria-hidden="true"></i>
                </div>
            </div>
            <p id="circular-text-sell">Sell</p>
        </div>
        <div class="one col-sm-4">
            <div id="circular_call">
                <div class="icon">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
            </div>
            <p id="circular-text-call">Call</p>
        </div>
        <div class="one col-sm-4">
            <div id="circular_buy">
                <div class="icon">
                    <i class="fa fa-book" aria-hidden="true"></i>
                </div>
            </div>
            <p id="circular-text-buy">Buy</p>
        </div>
        
    </div>
    
    <div id="sell">
        <!--Describe the application-->
    </div>
    
    <div id="call">
        <!--Describe the application-->
    </div>
    
    <div id="buy">
        <!--Describe the application-->
    </div>
    
    <div id="footer">
        <p id="para">Website designed and developed by:</p>
        <a href=""><p class="names">Abha Mutalik</p></a>
        <a href=""><p class="names">Ananya Navelkar</p></a>
    </div>

<script src="{{ asset('js/javascript.js') }}"></script>

</body>
</html>